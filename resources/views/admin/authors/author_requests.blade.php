@extends('admin.layouts.default')

@section('title')
    @parent
    Danh sách yêu cầu quyền tác giả
@endsection

@section('content')
<div class="p-4" style="min-height: 800px;">
    <h2 class="text-primary mb-4">Danh sách yêu cầu quyền tác giả</h2>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @elseif(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <table class="table table-bordered">
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
                <th>Trạng thái</th>  <!-- Trường trạng thái được đưa lên trước -->
                <th>Thao tác</th>     <!-- Trường thao tác ở cuối -->
            </tr>
        </thead>
        <tbody>
            @foreach($requests as $request)
            <tr>
                <td>{{ $request->user->username }}</td>
                <td>{{ $request->phone }}</td>
                <td>{{ $request->user->email }}</td>
                <td>{{ $request->user->role->name }}</td>
                <td>{{ $request->reason }}</td>
                <td>
                    @if($request->front_id_image)
                        <img src="{{ Storage::url($request->front_id_image) }}" alt="CMND/CCCD Trước" width="100">
                    @else
                        Không có ảnh
                    @endif
                </td>
                <td>
                    @if($request->back_id_image)
                        <img src="{{ asset('storage/' . $request->back_id_image) }}" alt="CMND/CCCD Sau" width="100">
                    @else
                        Không có ảnh
                    @endif
                </td>
                <td>
                    @if($request->portrait_image)
                        <img src="{{ asset('storage/' . $request->portrait_image) }}" alt="Ảnh chân dung" width="100">
                    @else
                        Không có ảnh
                    @endif
                </td>                
                <td>
                    @if($request->status == 'pending')
                        <span class="badge badge-warning">Đang chờ duyệt</span>
                    @elseif($request->status == 'accepted')
                        <span class="badge badge-success">Đã chấp nhận</span>
                    @else
                        <span class="badge badge-danger" style="background-color: red">Đã từ chối</span>  <!-- Màu đỏ cho từ "Đã từ chối" -->
                    @endif
                </td>
                <td>
                    @if($request->status == 'pending')
                        <form action="{{ route('admin.accept_request', $request->id) }}" method="POST" class="d-inline-block">
                            @csrf
                            <button type="submit" class="btn btn-success" onclick="return confirm('Xác nhận')">Chấp nhận</button>
                        </form>
                        <form action="{{ route('admin.reject_request', $request->id) }}" method="POST" class="d-inline-block mt-1">
                            @csrf
                            <button type="submit" class="btn btn-danger">Từ chối</button>
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
@endsection
