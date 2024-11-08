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
        <h2 class="text-primary mb-4">Danh Sách Tài Khoản Đã Mua Chương</h2>
        <table id="purchase-history" class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>User Name</th>
                    <th>Email</th>
                    <th>Số Chương Đã Mua</th>
                    <th>Chi Tiết</th> <!-- Thêm cột chi tiết -->
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>
                            <a href="{{ route('detailPurchaseUser', $user->id) }}">
                                {{ $user->username }}
                            </a>
                        </td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->purchased_stories_count }}</td>
                        <td>
                            <a href="{{ route('detailPurchaseUser', $user->id) }}" class="btn btn-info">Xem Chi Tiết</a>
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
            jQuery('#purchase-history').DataTable();
        });
    </script>
@endpush
