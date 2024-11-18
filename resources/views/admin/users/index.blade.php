@extends('admin.layouts.default')

@section('title')
    @parent
    Danh sách thể loại sách
@endsection

@push('styles')
@endpush

@section('content')
    <div class="p-4" style="min-width: 500px">
        <div class="table-responsive">
            <table class="table table-bordered" style="overflow-x: auto">
                <thead>
                    <tr>
                        <th>Tên người dùng</th>
                        <th>Email</th>
                        <th>Mật khẩu</th>
                        <th>Tên đầy đủ</th>
                        <th>Giới tính</th>
                        <th>Ngày sinh</th>
                        <th>Ảnh Đại Diện</th>
                        <th>Ảnh Nền</th>
                        <th>Trạng thái</th>
                        <th>Số xu</th>
                        <th scope="col">
                            <a class="btn btn-primary" href="{{ route('user_create') }}">Create</a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->password }}</td>
                            <td>{{ $user->full_name }}</td>
                            <td>{{ $user->gender }}</td>
                            <td>{{ $user->date_of_birth }}</td>
                            <td>
                                <div style="display: flex; align-items: center; gap: 10px;">
                                    <img width="50px" src="{{ asset('/storage/' . $user->avatar_url) }}"
                                        alt="Không có ảnh đại diện">
                                    <form id="avatarForm{{ $user->id }}" enctype="multipart/form-data">
                                        @csrf
                                        <input type="file" name="avatar" data-user-id="{{ $user->id }}"
                                            class="update-avatar">
                                    </form>
                                </div>
                            </td>
                            <td>
                                <div style="display: flex; align-items: center; gap: 10px;">
                                    <div
                                        style="width: 50px; height: 50px; background: url('{{ asset('/storage/' . $user->background) }}') no-repeat center/cover;">
                                    </div>
                                    <form id="backgroundForm{{ $user->id }}" enctype="multipart/form-data">
                                        @csrf
                                        <input type="file" name="background" data-user-id="{{ $user->id }}"
                                            class="update-background">
                                    </form>
                                </div>
                            </td>
                            <td>{{ $user->status }}</td>
                            <td>{{ $user->coin_earned }}</td>
                            <td>
                                <div class="btn-action" style="display: flex; gap:5px;">
                                    <a class="btn btn-success" href="{{ route('user_edit', $user->id) }}">Edit</a>
                                    <form action="{{ route('user_delete', $user->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit"
                                            onclick="return confirm('Xác nhận xóa')">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $users->links() }}
            </>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).on('change', '.update-avatar', function() {
            let userId = $(this).data('user-id');
            let formData = new FormData($(`#avatarForm${userId}`)[0]);

            $.ajax({
                url: `/admin/user/${userId}/update-avatar`,
                method: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    alert('Avatar updated successfully!');
                    location.reload(); // Reload page to see changes
                },
                error: function(error) {
                    alert('Failed to update avatar');
                }
            });
        });

        $(document).on('change', '.update-background', function() {
            let userId = $(this).data('user-id');
            let formData = new FormData($(`#backgroundForm${userId}`)[0]);

            $.ajax({
                url: `/admin/user/${userId}/update-background`,
                method: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    alert('Background updated successfully!');
                    location.reload(); // Reload page to see changes
                },
                error: function(error) {
                    alert('Failed to update background');
                }
            });
        });
    </script>
@endpush
