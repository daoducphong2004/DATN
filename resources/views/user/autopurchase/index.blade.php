@extends('home.layout.master')

@section('content')
@include('partials.banner')
<div class="container">
    <h1>Danh Sách Truyện Đã Đăng Ký Mua Tự Động</h1>

    @if($autoPurchases->isEmpty())
        <p>Chưa có truyện nào được mua tự động.</p>
    @else
        <ul>
            @foreach($autoPurchases as $purchase)
                <li>
                    <strong>{{ $purchase->book->title }}</strong> -
                    {{ $purchase->book->author }}
                    (Trạng thái: {{ $purchase->status }})
                </li>
            @endforeach
        </ul>
        <div class="pagination">
            {{ $autoPurchases->links() }}
        </div>

    @endif
</div>
@endsection
