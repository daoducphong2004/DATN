@extends('admin.layouts.default')

@section('title')
    @parent
    Danh sách yêu cầu quyền tác giả - Cổng Light Novel - Đọc Light Novel
@endsection

@push('styles')
@endpush

@section('content')
    @auth
        {{-- <div class="p-4" style="min-height: 800px;">
            <h2 class="text-primary mb-4">Danh Sách Yêu Cầu Quyền Tác Giả</h2>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @elseif(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <table id="author-request" class="table">
                <thead>
                    <tr>
                        <th>Họ tên</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Vai trò hiện tại</th>
                        <th>Lý do</th>
                        <th>Ảnh CMND/CCCD (Trước)</th>
                        <th>Ảnh CMND/CCCD (Sau)</th>
                        <th>Ảnh chân dung</th>
                        <th>Trạng thái</th> <!-- Trường trạng thái được đưa lên trước -->
                        <th>Thao tác</th> <!-- Trường thao tác ở cuối -->
                    </tr>
                </thead>
                <tbody>
                    @foreach ($requests as $request)
                        <tr>
                            <td>{{ $request->user->username }}</td>
                            <td>{{ $request->phone }}</td>
                            <td>{{ $request->user->email }}</td>
                            <td>{{ $request->user->role->name }}</td>
                            <td>{{ $request->reason }}</td>
                            <td>
                                @if ($request->front_id_image)
                                    <img src="{{ Storage::url($request->front_id_image) }}" alt="CMND/CCCD Trước" width="100">
                                @else
                                    Không có ảnh
                                @endif
                            </td>
                            <td>
                                @if ($request->back_id_image)
                                    <img src="{{ asset('storage/' . $request->back_id_image) }}" alt="CMND/CCCD Sau"
                                        width="100">
                                @else
                                    Không có ảnh
                                @endif
                            </td>
                            <td>
                                @if ($request->portrait_image)
                                    <img src="{{ asset('storage/' . $request->portrait_image) }}" alt="Ảnh chân dung"
                                        width="100">
                                @else
                                    Không có ảnh
                                @endif
                            </td>
                            <td>
                                @if ($request->is_approve == 'pending')
                                    <span class="badge badge-warning">Đang chờ duyệt</span>
                                @elseif($request->is_approve == 'accepted')
                                    <span class="badge badge-success" style="background-color: rgb(127, 253, 65)">Đã chấp
                                        nhận</span>
                                @elseif($request->is_approve == 'rejected')
                                    <span class="badge badge-danger" style="background-color: red">Đã từ chối</span>
                                @endif
                            </td>
                            <td>
                                @if ($request->is_approve == 'pending')
                                    <form action="{{ route('accept_request', $request->id) }}" method="POST"
                                        class="d-inline-block">
                                        @csrf
                                        <button type="submit" class="btn btn-success"
                                            onclick="return confirm('Bạn có chắc muốn xác nhận?')">Chấp nhận</button>
                                    </form>
                                    <form action="{{ route('reject_request', $request->id) }}" method="POST"
                                        class="d-inline-block mt-1">
                                        @csrf
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Bạn có chắc muốn từ chối?')">Từ chối</button>
                                    </form>
                                @else
                                    <span class="text-muted">Đã hoàn thành</span>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div> --}}

        <div class="row full-with">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-2 flex-grow-1">Danh sách tác giả chờ duyệt</h5>
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @elseif(session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                    </div>
                    <div class="card-body">
                        <table id="example" class="table table-bordered dt-responsive table-striped align-middle"
                            style="width:100%">
                            <thead>
                                <tr>
                                    <th>Họ tên</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Vai trò hiện tại</th>
                                    <th>Lý do</th>
                                    <th>Ảnh CMND/CCCD (Trước)</th>
                                    <th>Ảnh CMND/CCCD (Sau)</th>
                                    <th>Ảnh chân dung</th>
                                    <th>Trạng thái</th> <!-- Trường trạng thái được đưa lên trước -->
                                    <th>Thao tác</th> <!-- Trường thao tác ở cuối -->
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($requests as $request)
                                    <tr>
                                        <td>{{ $request->user->username }}</td>
                                        <td>{{ $request->phone }}</td>
                                        <td>{{ $request->user->email }}</td>
                                        <td>{{ $request->user->role->name }}</td>
                                        <td>{{ $request->reason }}</td>
                                        <td>
                                            @if ($request->front_id_image)
                                                <img src="{{ Storage::url($request->front_id_image) }}" alt="CMND/CCCD Trước"
                                                    width="100">
                                            @else
                                                Không có ảnh
                                            @endif
                                        </td>
                                        <td>
                                            @if ($request->back_id_image)
                                                <img src="{{ asset('storage/' . $request->back_id_image) }}"
                                                    alt="CMND/CCCD Sau" width="100">
                                            @else
                                                Không có ảnh
                                            @endif
                                        </td>
                                        <td>
                                            @if ($request->portrait_image)
                                                <img src="{{ asset('storage/' . $request->portrait_image) }}"
                                                    alt="Ảnh chân dung" width="100">
                                            @else
                                                Không có ảnh
                                            @endif
                                        </td>
                                        <td>
                                            @if ($request->is_approve == 'pending')
                                                <span class="badge badge-warning">Đang chờ duyệt</span>
                                            @elseif($request->is_approve == 'accepted')
                                                <span class="badge badge-success" style="background-color: rgb(127, 253, 65)">Đã
                                                    chấp
                                                    nhận</span>
                                            @elseif($request->is_approve == 'rejected')
                                                <span class="badge badge-danger" style="background-color: red">Đã từ chối</span>
                                            @endif
                                            {{-- @if ($request->is_approve == 'pending')
                                                <span class="badge badge-warning">Đang chờ duyệt</span>
                                            @elseif($request->is_approve == 'accepted')
                                                <span class="badge badge-success">Đã chấp nhận</span>
                                            @else
                                                <span class="badge badge-danger" style="background-color: red">Đã từ chối</span>
                                                <!-- Màu đỏ cho từ "Đã từ chối" -->
                                            @endif --}}
                                        </td>
                                        <td>
                                            @if ($request->is_approve == 'pending')
                                                <form action="{{ route('accept_request', $request->id) }}" method="POST"
                                                    class="d-inline-block">
                                                    @csrf
                                                    <button type="submit" class="btn btn-success"
                                                        onclick="return confirm('Bạn có chắc muốn xác nhận?')">Chấp
                                                        nhận</button>
                                                </form>
                                                <form action="{{ route('reject_request', $request->id) }}" method="POST"
                                                    class="d-inline-block mt-1">
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger"
                                                        onclick="return confirm('Bạn có chắc muốn từ chối?')">Từ chối</button>
                                                </form>
                                            @else
                                                <span class="text-muted">Đã hoàn thành</span>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    @else
        <div class="alert alert-warning">
            Bạn cần đăng nhập để xem nội dung này.
        </div>
    @endauth
@endsection

@push('scripts')
@endpush
