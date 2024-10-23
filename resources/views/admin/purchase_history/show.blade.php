@extends('admin.layouts.default')

@section('title')
    @parent
    Danh sách tài khoản đã mua truyện
@endsection

@push('styles')
@endpush

@section('content')
<div class="container">
    <h1>Chương Đã Mua Của Tài Khoản: {{ $user->username }}</h1>

    @if($purchasedChapters->isEmpty())
        <p>Người dùng này chưa mua chương nào.</p>
    @else
        <table class="table">
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
@endpush
