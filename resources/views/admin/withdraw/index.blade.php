@extends('admin.layouts.default')
@section('title')
    Danh sách yêu cầu rút tiền - Cổng Light Novel - Đọc Light Novel
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h5 class="card-title mb-0 flex-grow-1">Danh Sách Yêu Cầu Rút Tiền</h5>
                    <a href="{{ route('admin.withdraw.history') }}" class="btn btn-primary">Lịch Sử</a>
                </div>
                <div class="card-body">
                    <table id="example" class="table table-bordered dt-responsive table-striped align-middle"
                        style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Người dùng</th>
                                <th>Số tiền</th>
                                <th>Trạng thái</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($withdrawRequests as $request)
                                <tr>
                                    <td>{{ $request->id }}</td>
                                    <td>{{ $request->user->username }}</td>
                                    <td>{{ $request->amount }}</td>
                                    <td>{{ $request->status }}</td>
                                    <td>

                                        <div class="btn-action" style="display: flex; gap: 5px;">
                                            @if ($request->status === 'pending')
                                                <form action="{{ route('admin.withdraw.update', $request->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    <select name="status" class="form-select">
                                                        <option value="pending" selected>Pending</option>
                                                        <option value="approved">Approved</option>
                                                        <option value="rejected">Rejected</option>
                                                    </select>
                                                    <textarea name="note" placeholder="Ghi chú" class="form-control">{{ $request->note }}</textarea>
                                                    <button class="btn btn-primary" type="submit">Cập nhật</button>
                                                </form>
                                            @else
                                                <span>{{ ucfirst($request->status) }}</span>
                                                <p>Ghi chú: {{ $request->note }}</p>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            @include('layouts.TinyMCEscriptNoImport')
                        </tbody>
                    </table>
                </div>
                <div class="text-center" style="padding: 10px">
                    <div id="pagination">
                        {{ $withdrawRequests->links() }}
                    </div>
                </div>
            </div>
        </div><!--end col-->
    </div><!--end row-->
@endsection
