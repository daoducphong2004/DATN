@extends('home.layout.master')
@section('title')
    Truyện đã mua - Cổng Light Novel - Đọc Light Novel
@endsection
@section('content')
<main id="mainpart" class="project-page py-8">
    <div class="container mx-auto mt-5">
        <h1 class="text-3xl font-bold text-center mb-6">Truyện Đã Mua</h1>

        @if ($purchasedBooks->isEmpty())
            <div class="alert alert-info bg-blue-100 border border-blue-400 text-blue-700 px-4 py-3 rounded relative mb-4">
                Bạn chưa mua truyện nào.
            </div>
        @else
            <div class="grid grid-cols-4 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4">
                @foreach ($purchasedBooks as $book)
                    <div class="bg-white border border-gray-200 rounded-lg shadow-md overflow-hidden transform hover:-translate-y-1 hover:shadow-lg transition duration-300 ease-in-out">
                        <img class="w-full h-32 object-cover" src="{{ asset(Storage::url($book->book_path)) }}" alt="{{ $book->title }}">
                        <div class="p-3">
                            <h2 class="font-semibold text-sm text-gray-800 truncate">{{ $book->title }}</h2>
                            <p class="text-gray-600 text-xs mt-1 mb-2 truncate">
                                {!! Str::limit($book->description, 50) !!}
                            </p>
                            <div class="text-center">
                                <a href="{{ route('truyen.truyen', $book->slug) }}" class="inline-block bg-indigo-600 text-white text-xs font-bold py-1 px-2 rounded-full hover:bg-indigo-800 transition-colors duration-200">
                                    Xem chi tiết
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</main>
@endsection
