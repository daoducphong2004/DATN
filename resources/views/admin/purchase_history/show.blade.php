@extends('admin.layouts.default')

@section('title')
    @parent
    Danh sách tài khoản đã mua truyện
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
        <h2 class="text-primary mb-4">Chương Đã Mua Của Tài Khoản: {{ $user->username }}</h2>

        @if ($purchasedChapters->isEmpty())
            <p>Người dùng này chưa mua chương nào.</p>
        @else
            <table id="show-purchase-history" class="table">
                <thead>
                    <tr>
                        <th>ID Chương</th>
                        <th>Tiêu Đề Chương</th>
                        <th>Tập</th>
                        <th>Truyện</th>
                        <th>Ngày Mua</th>
                        <th>Giá</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($purchasedChapters as $purchase)
                        <tr>
                            <td>{{ $purchase->chapter->id }}</td>
                            <td>{{ $purchase->chapter->title }}</td>
                            <td>{{ $purchase->chapter->episode->title }}</td>
                            <td>{{ $purchase->chapter->episode->book->title }}</td>
                            <td>{{ $purchase->purchase_date }}</td>
                            <td>{{ $purchase->price }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection

@push('scripts')
    <script>
        jQuery(document).ready(function() {
            console.log("jQuery version:", jQuery.fn.jquery);
            jQuery('#show-purchase-history').DataTable();
        });
    </script>
@endpush
