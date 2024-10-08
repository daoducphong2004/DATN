@extends('admin.layouts.default')

@section('title')
    @parent
    Danh sách thể loại sách
@endsection

@push('styles')
@endpush

@section('content')
    <div class="p-4" style="min-height: 800px;">
        <table class="table">
            <thead>
                <tr>
                    <th>Tên người dùng</th>
                    <th>Email</th>
                    <th>Mật khẩu</th>
                    <th>Tên đầy đủ</th>
                    <th>Giới tính</th>
                    <th>Ngày sinh</th>
                    <th>Ảnh Đại Diện</th>
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
                            <img width="50px" src="{{ asset('/storage/' . $user->avatar_url) }}" alt="Không có ảnh đại diện">
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
    @endsection

    @push('scripts')
    @endpush
