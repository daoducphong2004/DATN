@extends('home.layout.master')
@section('content')
    <div class="page-top-group  at-index ">
        @include('partials.banner')
    </div>
    <main id="mainpart" class="fantrans-page">
        <header class="page-title">
            <div class="page-name_wrapper">
                <div class="container">
                    <span class="page-name"><i class="fas fa-circle"></i>Nhóm dịch: {{ $group->name }}</span>
                </div>
            </div>
        </header>

        <div class="container clear">
            <section class="basic-section">
                <header class="sect-header">
                    <span class="sect-title">Giới thiệu</span>
                </header>
                <main class="sect-body">
                    {!! $group->description !!}
                </main>
            </section>
            <section class="showcase-list">
                <div class="row">
                    @php
                        use Carbon\Carbon;
                        use Carbon\CarbonInterval;
                        use Illuminate\Support\Facades\App;

                        App::setLocale('vi'); // Set language to Vietnamese
                        CarbonInterval::setLocale('vi'); // Set language for CarbonInterval
                    @endphp

                    @foreach ($group->books->where('Is_Inspect', 1) as $book)
                        @php
                            $updatedAt = Carbon::parse($book->updated_at); // Parse updated_at for each book
                        @endphp
                        <div class="col-12 col-md-6 col-xl-4">

                            <div class="showcase-item">
                                <div class="row">
                                    <div class="series-cover col-4">
                                        <div class="a6-ratio">
                                            <div class="content img-in-ratio"
                                                style="background-image: url({{ asset(Storage::url($book->book_path)) }})">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <div class="series-info">
                                            <div class="series-type-wrapper">
                                                <small class="series-type type-translation">
                                                    {{ $book->type == 1 ? 'Truyện dịch' : ($book->type == 2 ? 'Truyện Convert' : ($book->type == 3 ? 'Truyện sáng tác' : 'Loại truyện không xác định')) }}</small>
                                            </div>
                                            <h5 class="series-name"><a
                                                    href="{{ route('truyen.truyen', $book->slug) }}">{{ $book->title }}</a>
                                            </h5>
                                        </div>
                                        <div class="series-status">
                                            <div class="status-item">
                                                <span class="status-name">Tình trạng:</span>
                                                <span
                                                    class="status-value">{{ $book->status == 1 ? 'Đang tiến hành' : ($book->status == 2 ? 'Tạm ngưng' : ($book->status == 3 ? 'Đã Hoàn Thành' : 'Loại truyện không xác định')) }}</span>
                                            </div>

                                            <div class="status-item">
                                                <span class="status-name">Thời gian tạo:</span>
                                                <span class="status-value">
                                                    <time class="timeago" title="{{ $updatedAt->format('d/m/Y H:i:s') }}"
                                                        datetime="{{ $updatedAt->toIso8601String() }}">
                                                        {{ $updatedAt->diffForHumans() }}
                                                    </time>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </section>
        </div>
    </main>
@endsection
