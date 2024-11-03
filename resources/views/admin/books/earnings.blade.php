@extends('admin.layouts.default')

@section('content')
<main id="mainpart" class="project-page py-8">
    <div class="container mx-auto mt-5">
        <h1 class="text-3xl font-bold text-center mb-6">Thu nhập từ truyện: {{ $book->title }}</h1>

        <p>Tổng thu nhập: {{ number_format($book->totalEarnings(), 0, ',', '.') }} VNĐ</p>
    </div>
</main>
@endsection
