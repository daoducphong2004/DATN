@extends('admin.layouts.default')

@section('title')
    @parent
    Danh sách bình luận chap
@endsection

@push('styles')
@endpush

@section('content')
    @if (session('message'))
        <div class="alert alert-primary" role="alert">
            {{ session('message') }}
        </div>
    @endif

    {{-- <div class="p-4" style="min-height: 800px;">
        <h2 class="text-primary mb-4">Danh Sách Bình Luận</h2>
        <table id="list-comment" class="table">
            <thead>
                <tr>
                    <th>Người Bình Luận</th>
                    <th>Nội Dung</th>
                    <th>Ngày Bình Luận</th>
                    <th>Hành Động</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <a class="btn btn-info" href="">Chi tiết</a>
                        <a class="btn btn-danger" href="" onclick="return confirmDelete()">Xoá</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div> --}}

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h5 class="card-title mb-0 flex-grow-1">Danh Sách Bình Luận Chap</h5>
                </div>
                <div class="card-body">
                    <table id="example" class="table table-bordered dt-responsive table-striped align-middle"
                        style="width:100%">
                        <thead>
                            <tr>
                                <th>Người Bình Luận</th>
                                <th>Nội Dung</th>
                                <th>Ngày Bình Luận</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach ($comments as $comment) --}}
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <a class="btn btn-info" href="">Chi tiết</a>
                                    <a class="btn btn-danger" href="" onclick="return confirmDelete()">Xoá</a>
                                </td>
                            </tr>
                            {{-- @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!--end col-->
    </div><!--end row-->
@endsection

@push('scripts')
@endpush
