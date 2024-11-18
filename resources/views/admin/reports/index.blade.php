@extends('admin.layouts.default')

@section('title')
    @parent
    Danh sách truyện
@endsection

@push('styles')
    <style>
        .text-success {
            color: #28a745;
            /* Màu xanh lá */
            font-weight: bold;
        }

        .text-warning {
            color: #ffc107;
            /* Màu vàng */
            font-weight: bold;
        }

        .text-danger {
            color: #dc3545;
            /* Màu đỏ */
            font-weight: bold;
        }

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
    <div class="p-4" style="min-height: 800px;">
        @if (session('message'))
            <div class="alert alert-primary" role="alert">
                {{ session('message') }}
            </div>
        @endif
        <h2 class="text-primary mb-4">Danh Sách Báo Cáo</h2>
        {{-- <a href="{{ route('admin_stories_trashed') }}" class="btn btn-secondary">
            <i class="fa fa-trash"></i> Thùng rác
        </a> --}}
        <table id="list-report" class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Truyện bị báo cáo</th>
                    <th>Người báo cáo</th>
                    <th>Lý do</th>
                    <th>Mô tả</th>
                    <th>Trạng thái</th>
                    <th>Xử lý</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reports as $report)
                    <tr>
                        <td>{{ $report->id }}</td>
                        <!-- Hiển thị tên sách bị báo cáo -->
                        <td>{{ $report->book->title }} (ID:{{ $report->book->id }})</td>
                        <!-- Hiển thị tên người báo cáo -->
                        <td>{{ $report->user->username }} (ID:{{ $report->user->id }})</td>
                        <td>{{ implode(', ', json_decode($report->reason, true) ?? []) }}</td>
                        <td>{{ $report->description }}</td>
                        {{-- <td>{{ $report->status }}</td> --}}
                        <td
                            class="{{ $report->status === 'Đã duyệt' ? 'text-success' : ($report->status === 'Chờ duyệt' ? 'text-warning' : 'text-danger') }}">
                            {{ $report->status }}
                        </td>
                        <td>
                            <!-- Nút Đồng ý -->
                            <form action="{{ route('reports.approve', $report->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('PATCH')
                                <button class="btn btn-info" type="submit">Đồng ý</button>
                            </form>

                            <!-- Nút Từ chối -->
                            <form action="{{ route('reports.reject', $report->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('PATCH')
                                <button class="btn btn-danger" type="submit">Từ chối</button>
                            </form>

                            <!-- Nút Xem xét lại -->
                            <form action="{{ route('reports.review', $report->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('PATCH')
                                <button class="btn btn-warning" type="submit">Chờ duyệt</button>
                            </form>
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
            jQuery('#list-report').DataTable();
        });
    </script>
@endpush
