@extends('user.layout.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="card-header text-center"><strong>Chọn hành động</strong></div>
                    </div>

                    <div class="panel-body">
                        <div class="card">
                           
                            <div class="card-body">
                                @if (Auth::user()->group)
                                    <p class="text-center">Bạn đã là thành viên của nhóm
                                        <strong>{{ Auth::user()->group->name }}</strong>.
                                    </p>
                                    <div class="text-center">
                                        <a href="{{ route('action.group.show', Auth::user()->group) }}"
                                            class="btn btn-primary">Xem nhóm của bạn</a>
                                    </div>
                                @else
                                    <p class="text-center">Bạn chưa tham gia nhóm nào. Bạn muốn:</p>
    
                                    <!-- Tabs Nav -->
                                    <ul class="nav nav-tabs justify-content-center" id="actionTabs" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link active" id="createGroupTab" data-bs-toggle="tab"
                                                href="#createGroup" role="tab" aria-controls="createGroup"
                                                aria-selected="true">Tạo nhóm mới</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" id="joinGroupTab" data-bs-toggle="tab" href="#joinGroup"
                                                role="tab" aria-controls="joinGroup" aria-selected="false">Tham gia nhóm</a>
                                        </li>
                                    </ul>
    
                                    <!-- Tabs Content -->
                                    <div class="tab-content mt-3" id="actionTabsContent">
                                        <!-- Tab for Create Group -->
                                        <div class="tab-pane  show active" id="createGroup" style="padding-top: 15px" role="tabpanel"
                                            aria-labelledby="createGroupTab">
                                            <div class="text-center">
                                                <a href="{{ route('action.group.create') }}"
                                                    class="btn btn-success btn-block">Tạo nhóm mới</a>
                                            </div>
                                        </div>
    
                                        <!-- Tab for Join Group -->
                                        <div class="tab-pane" id="joinGroup" role="tabpanel" aria-labelledby="joinGroupTab">
                                            <form action="{{ route('action.group.join') }}" method="POST">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="group_name">Tìm kiếm nhóm:</label>
                                                    <input type="text" id="group_name" name="group_name" class="form-control"
                                                        placeholder="Nhập tên nhóm">
                                                    <div id="group_suggestions"  class="list-group mt-2" style="display:none;">
                                                        <!-- Các gợi ý nhóm sẽ được hiển thị ở đây -->
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-info btn-block">Tham gia nhóm</button>
                                            </form>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>





    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const tabs = document.querySelectorAll('.nav-link');
            const tabContents = document.querySelectorAll('.tab-pane');

            tabs.forEach(tab => {
                tab.addEventListener('click', function() {
                    // Remove the 'active' class from all tabs and tab content
                    tabs.forEach(t => t.classList.remove('active'));
                    tabContents.forEach(content => content.classList.remove('show', 'active'));

                    // Add 'active' class to the clicked tab and corresponding tab content
                    tab.classList.add('active');
                    const targetContent = document.querySelector(tab.getAttribute('href'));
                    targetContent.classList.add('show', 'active');
                });
            });

            // Initialize with the first tab active (in case the user directly visits a tab)
            if (tabs.length > 0) {
                tabs[0].classList.add('active');
                tabContents[0].classList.add('show', 'active');
            }
        });

        $(document).ready(function() {
            $('#group_name').on('keyup', function() {
                var searchTerm = $(this).val(); // Lấy giá trị từ ô tìm kiếm

                if (searchTerm.length >= 3) { // Tìm kiếm khi người dùng gõ từ 3 ký tự trở lên
                    $.ajax({
                        url: '{{ route('action.group.search') }}',
                        method: 'GET',
                        data: {
                            name: searchTerm
                        },
                        success: function(response) {
                            var suggestions = response.groups;
                            var suggestionsHtml = '';

                            // Xử lý các gợi ý nhóm
                            if (suggestions.length > 0) {
                                suggestions.forEach(function(group) {
                                    suggestionsHtml +=
                                        '<a href="#" class="list-group-item list-group-item-action" data-id="' +
                                        group.id + '">' + group.name + '</a>';
                                });

                                $('#group_suggestions').html(suggestionsHtml).show();
                            } else {
                                $('#group_suggestions').html(
                                        '<p class="list-group-item">Không tìm thấy nhóm</p>')
                                    .show();
                            }
                        }
                    });
                } else {
                    $('#group_suggestions').hide();
                }
            });

            // Khi người dùng chọn một gợi ý nhóm
            $(document).on('click', '.list-group-item', function() {
                var groupName = $(this).text();
                var groupId = $(this).data('id');

                $('#group_name').val(groupName); // Điền tên nhóm vào ô tìm kiếm
                $('#group_id').val(groupId); // Điền id nhóm vào input hidden
                $('#group_suggestions').hide(); // Ẩn danh sách gợi ý
            });
        });
    </script>
@endsection
