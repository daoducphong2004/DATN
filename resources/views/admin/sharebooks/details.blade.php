@extends('admin.layouts.default')
@section('title')
    Chi tiết đồng tác giả - {{ $book->title }} - Cổng Light Novel - Đọc Light Novel
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h5 class="card-title mb-0 flex-grow-1">Chi tiết đồng tác giả - {{ $book->title }}
                        <br><br>
                        <a href="{{ route('admin.sharebooks.index') }}" class="btn btn-info">Quay lại</a>
                    </h5>
                    @if (session('message'))
                        <div class="alert alert-primary" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif
                </div>
                <div class="card-body">
                    <table id="example" class="table table-bordered dt-responsive table-striped align-middle"
                        style="width:100%">
                        <thead>
                            <tr>
                                <th>Tên tác giả</th>
                                <th>Email</th>
                                <th>Ngày thêm</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sharedBooks as $sharedBook)
                                <tr>
                                    <td>{{ $sharedBook->user->username }}</td>
                                    <td>{{ $sharedBook->user->email }}</td>
                                    <td>{{ $sharedBook->created_at }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!--end col-->
    </div><!--end row-->
@endsection
