<!-- resources/views/contracts/index.blade.php -->
@extends('admin.layouts.default')

@section('title')
    @parent
    Danh sách hợp đồng
@endsection

@push('styles')
    <style>
        .table th,
        .table td {
            vertical-align: middle !important;
            text-align: center;
        }

        .table th {
            font-size: 1.4rem;
            font-weight: 600;
        }

        .table td {
            font-size: 1.2rem;
        }

        .table img {
            max-width: 100%;
            height: auto;
        }

        .btn {
            margin: 2px;
        }
    </style>
@endpush
@section('content')
    <div class="container">
        <h2 class="text-primary mb-4">Danh Sách Hợp Đồng</h2>
        <a href="{{ route('contracts-manage.create') }}" class="btn btn-primary mb-3">Tạo Hợp Đồng Mới</a>
        <table id="list-contract" class="table">
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
                        <td><img src="{{ asset(Storage::url( $contract->contract_image)) }}" style="max-width: 200px;" alt="{{ $contract->contract_code }}"></td>
                        <td>{{ $contract->end_date }}</td>
                        <td>{{ $contract->status }}</td>

                        <td>
                            <a href="{{ route('contracts-manage.show',$contract->id) }}" class="btn btn-info btn-sm">Xem</a>
                            <a href="{{ route('contracts-manage.edit', $contract->id) }}" class="btn btn-warning btn-sm">Sửa</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@push('scripts')
<script>
    jQuery(document).ready(function() {
        console.log("jQuery version:", jQuery.fn.jquery);
        jQuery('#list-contract').DataTable();
    });
</script>
@endpush