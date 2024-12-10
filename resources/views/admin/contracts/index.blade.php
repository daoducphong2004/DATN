<!-- resources/views/contracts/index.blade.php -->
@extends('admin.layouts.default')

@section('title')
    @parent
    Danh sách hợp đồng
@endsection

@push('styles')
@endpush
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h5 class="card-title mb-0 flex-grow-1">Danh Sách Hợp Đồng</h5>
                    <div>
                        <a href="{{ route('contracts-manage.create') }}" class="btn btn-secondary">
                            <i class="ri-add-circle-fill"></i> Tạo hợp đồng mới
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <table id="example" class="table table-bordered dt-responsive table-striped align-middle"
                        style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Mã hợp đồng</th>
                                <th>Tác giả</th>
                                <th>Ngày bắt đầu</th>
                                <th>Ngày kết thúc</th>
                                <th>Ảnh hợp đồng</th>
                                <th>Trạng Thái</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contracts as $contract)
                                <tr>
                                    <td>{{ $contract->id }}</td>
                                    <td>{{ $contract->contract_code }}</td>
                                    <td>{{ $contract->user->username }}</td>
                                    <td>{{ $contract->start_date }}</td>
                                    <td>{{ $contract->end_date }}</td>
                                    <td>
                                        @if ($contract->contract_image)
                                            <img src="{{ asset(Storage::url($contract->contract_image)) }}"
                                                style="max-width: 200px;" alt="{{ $contract->contract_code }}">
                                        @else
                                            Chưa cập nhật ảnh
                                        @endif
                                    </td>
                                    <td>{{ $contract->status }}</td>

                                    <td>
                                        <a href="{{ route('contracts-manage.show', $contract->id) }}"
                                            class="btn btn-info btn-sm">Xem</a>
                                        <a href="{{ route('contracts-manage.edit', $contract->id) }}"
                                            class="btn btn-warning btn-sm">Sửa</a>
                                        <a href="{{ route('Letter.create') }}?receiver={{ $contract->user->username }}"
                                            class="btn btn-primary btn-sm">
                                            Trả lời
                                        </a>
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
@endpush
