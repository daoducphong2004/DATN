@extends('admin.layouts.default')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h5 class="card-title mb-0 flex-grow-1">Lịch sử rút tiền</h5>
                    <a href="{{ route('admin.withdraw.index') }}" class="btn btn-primary">Quay Lại</a>
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
                                <th>note</th>
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
                                    <span>{{ ucfirst($request->status) }}</span>
                                    <br>
                                    <p>Ghi chú: {{ $request->note }}</p>
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
