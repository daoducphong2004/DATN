@extends('user.layout.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Thành viên nhóm <strong>{{ $group->name }}</strong>
                    </div>

                    <div class="panel-body">
                        @if ($currentUser->id == $group->user_id)
                            <div class="alert alert-danger">
                                Không thêm thành viên nếu chưa được sự đồng ý của họ. Cố tình vi phạm sẽ bị xử lý.
                            </div>
                        @endif
                        @if (Auth::id() != $group->id)
                            <!-- Chỉ hiển thị nút "Rời nhóm" cho thành viên trong nhóm -->
                            <form action="{{ route('action.group.leave') }}" method="POST" style="display:inline;">
                                @csrf
                                <button type="submit" class="btn btn-danger btn-xs pull-right">
                                    <i class="fas fa-times"></i> Rời nhóm
                                </button>
                            </form>
                        @endif
                        <table class="table">
                            <tr>
                                <td class="col-xs-8">
                                    <ul class="list-group">
                                        @foreach ($group->members as $member)
                                            <li class="list-group-item">
                                                <i class="fas fa-user-circle"></i> {{ $member->username }}
                                                @if ($currentUser->id === $group->user_id && $member->id !== $group->user_id)
                                                    <!-- Chỉ chủ nhóm mới có thể xóa, không được xóa bản thân -->
                                                    <button type="button" class="btn btn-warning btn-xs pull-right"
                                                        onclick="removeMember({{ $member->id }})">
                                                        <i class="fas fa-times"></i>
                                                    </button>
                                                @endif

                                            </li>
                                        @endforeach
                                    </ul>
                                </td>
                                @if ($currentUser->id === $group->user_id)
                                    <!-- Form thêm thành viên chỉ hiển thị cho chủ nhóm -->
                                    <td class="col-xs-4">
                                        <form action="{{ route('action.group.adduser') }}" method="POST">
                                            @csrf
                                            <div class="input-group">
                                                <input type="text" autocomplete class="form-control" name="username"
                                                    placeholder="Tên thành viên" required>
                                                <input type="hidden" name="group_id" value="{{ $group->id }}">
                                                <span class="input-group-btn">
                                                    <button class="btn btn-default btn-add-member" type="submit">
                                                        Thêm
                                                    </button>
                                                </span>
                                            </div>
                                        </form>
                                    </td>
                                @endif
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function removeMember(userId) {
            if (confirm('Bạn có chắc chắn muốn xóa thành viên này khỏi nhóm?')) {
                fetch(`/action/group/removeuser/${userId}`, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    },
                }).then(response => {
                    if (response.ok) {
                        window.location.reload();
                    } else {
                        alert('Có lỗi xảy ra. Vui lòng thử lại.');
                    }
                });
            }
        }
    </script>
@endsection
