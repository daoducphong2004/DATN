@extends('admin.layouts.default')

@section('title')
    @parent
    Danh sách tài khoản đã mua truyện
@endsection

@push('styles')
@endpush

@section('content')
<div class="container">
    <h1>Danh Sách Tài Khoản Đã Mua Chương</h1>
    <table class="table">
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
@endpush
