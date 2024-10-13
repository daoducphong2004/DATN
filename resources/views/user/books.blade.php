@extends('layouts.app')

@section('content')
<div class="col-12 col-md-12 col-lg-9 col-xl-9">
    <section class="profile-showcase">
        <header>
            <span class="number">{{ $userBooks->count() }}</span>
            <span class="showcase-title">Truyện đã đăng</span>
        </header>
        <div class="row">
            @forelse ($userBooks as $book)
                <div class="col-12 col-md-6">
                    <div class="showcase-item">
                        <div class="row">
                            <div class="series-cover col-4">
                                <div class="a6-ratio">
                                    <div class="content img-in-ratio"
                                         style="background-image: url('{{ $book->cover_url ?? 'https://via.placeholder.com/215' }}')">
                                    </div>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="series-info">
                                    <div class="series-type-wrapper">
                                        <small class="series-type type-translation">{{ $book->type }}</small>
                                    </div>
                                    <h5 class="series-name text-base font-bold">
                                        <a href="{{ route('truyen.truyen', $book->slug) }}">{{ $book->title }}</a>
                                    </h5>
                                </div>
                                <div class="series-status">
                                    <div class="status-item">
                                        <span class="status-name">Tình trạng:</span>
                                        <span class="status-value">{{ $book->status }}</span>
                                    </div>
                                    <div class="status-item">
                                        <span class="status-name">Lần cuối:</span>
                                        <span class="status-value">
                                            <time class="timeago" datetime="{{ $book->updated_at }}">{{ $book->updated_at->diffForHumans() }}</time>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <p>Không có truyện nào được đăng.</p>
            @endforelse
        </div>
    </section>

    <section class="profile-showcase">
        <header>
            <span class="number">{{ $sharedBooks->count() }}</span>
            <span class="showcase-title">Truyện đang tham gia</span>
        </header>
        <div class="row">
            @forelse ($sharedBooks as $book)
                <div class="col-12 col-md-6">
                    <div class="showcase-item">
                        <div class="row flex">
                            <div class="series-cover col-4">
                                <div class="a6-ratio">
                                    <div class="content img-in-ratio"
                                         style="background-image: url('{{ $book->cover_url ?? 'https://via.placeholder.com/215' }}')">
                                    </div>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="series-info">
                                    <div class="series-type-wrapper">
                                        <small class="series-type type-translation">{{ $book->type }}</small>
                                    </div>
                                    <h5 class="series-name text-base font-bold">
                                        <a href="{{ route('truyen.truyen', $book->slug) }}">{{ $book->title }}</a>
                                    </h5>
                                </div>
                                <div class="series-status">
                                    <div class="status-item">
                                        <span class="status-name">Tình trạng:</span>
                                        <span class="status-value">{{ $book->status }}</span>
                                    </div>
                                    <div class="status-item">
                                        <span class="status-name">Lần cuối:</span>
                                        <span class="status-value">
                                            <time class="timeago" datetime="{{ $book->updated_at }}">{{ $book->updated_at->diffForHumans() }}</time>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <p>Không có truyện nào được chia sẻ.</p>
            @endforelse
        </div>
    </section>
</div>
@endsection
