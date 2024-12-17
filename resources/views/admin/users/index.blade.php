@extends('admin.layouts.default')

@section('title')
    @parent
    Danh sách user
@endsection

@push('styles')
@endpush

@section('content')
    {{-- <div class="p-4" style="min-height: 800px;">
        <table class="table table-bordered">
            <thead>

                <tr>
                    <th>Tên người dùng</th>
                    <th>Email</th>
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
        </>
    </div> --}}

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h5 class="card-title mb-0 flex-grow-1">Danh Sách User</h5>
                    <div>
                        <a href="{{ route('user_create') }}" class="btn btn-secondary">
                            <i class="ri-add-circle-fill"></i> Create
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <table id="example" class="table table-bordered dt-responsive table-striped align-middle"
                        style="width:100%">
                        <thead>
                            <tr>
                                <th>Tên người dùng</th>
                                <th>Email</th>
                                <th>Ảnh Đại Diện</th>
                                <th>Trạng thái</th>
                                <th>Số xu</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->username }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        <img width="50px" src="{{ asset(Storage::url($user->avatar_url ?: 'img/noava.png')) }}" alt="Không có ảnh đại diện">
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
                </div>
            </div>
        </div><!--end col-->
    </div><!--end row-->
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
