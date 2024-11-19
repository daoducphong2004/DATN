@extends('home.layout.master')
@section('content')
    <div class="page-top-group  at-index ">
        @include('partials.banner')
    </div>

    <main
        wire:snapshot="{&quot;data&quot;:{&quot;paginators&quot;:[{&quot;page&quot;:1},{&quot;s&quot;:&quot;arr&quot;}]},&quot;memo&quot;:{&quot;id&quot;:&quot;Wp05RFHWcU5EW5cFuwE8&quot;,&quot;name&quot;:&quot;pub.user.read-history&quot;,&quot;path&quot;:&quot;lich-su-doc&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;children&quot;:[],&quot;scripts&quot;:[],&quot;assets&quot;:[],&quot;errors&quot;:[],&quot;locale&quot;:&quot;vi&quot;},&quot;checksum&quot;:&quot;8849d6a7aec80c7dc5f011de50c0311fce2a8aa27fdefbec083161a005bd08ad&quot;}"
        wire:effects="{&quot;url&quot;:{&quot;paginators.page&quot;:{&quot;as&quot;:&quot;page&quot;,&quot;use&quot;:&quot;push&quot;,&quot;alwaysShow&quot;:false,&quot;except&quot;:null}}}"
        wire:id="Wp05RFHWcU5EW5cFuwE8" id="mainpart" class="browserpage" style="min-height: 212px;">
        <header class="page-title">
            <div class="page-name_wrapper">
                <div class="container">
                    <span class="page-name"><i class="fas fa-circle"></i>Truyện đã đọc</span>
                </div>
            </div>
        </header>

        <div style="text-align: center; margin: 0 auto 10px auto;">
        </div>

        <div class="container">
            <section class="browse-section">
                <main class="sect-body row">
                    @if(Auth::check())
                        {{-- Display reading history for logged-in users --}}
                        @foreach($readingHistories as $history)
                            @php
                                $book = $history->book;
                                $chapter = $history->chapter;
                            @endphp
                            <div class="thumb-item-flow col-4 col-lg-2">
                                <div class="thumb-wrapper">
                                    <a class="link at-cover" href="{{ route('truyen.truyen', ['slug' => $book->slug ?? '']) }}" title="{{ $book->title ?? '' }}">
                                        <div class="a6-ratio">
                                            <div class="content img-in-ratio"
                                                 style="background-image: url('{{ asset(Storage::url($book->book_path ?? 'default/path/to/image.jpg')) }}')">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="thumb-detail">
                                        <div class="thumb_attr chapter-title" title="{{ $chapter->title ?? '' }}">
                                            <a href="{{ route('truyen.chuong', ['slug' => $book->slug ?? '', 'chapter_slug' => $chapter->slug ?? '']) }}" title="{{ $chapter->title ?? '' }}">
                                                {{ $chapter->title ?? '' }}
                                            </a>
                                        </div>
                                        <div class="thumb_attr volume-title"><a href="#">{{ $book->title ?? '' }}</a></div>
                                        <div class="thumb_title text-center pad-top-10" style="cursor: pointer">
                                            <i class="fas fa-times"></i> Xóa
                                        </div>
                                    </div>
                                </div>
                                <div class="thumb_attr series-title"><a href="#" title="{{ $book->title ?? '' }}">{{ $book->title ?? '' }}</a></div>
                            </div>
                        @endforeach
                    @else
                        {{-- Display reading history for guest users --}}
                        @foreach($readingHistories as $history)
                        @php
                            $book = $history['book'];
                            $chapter = $history['chapter'];
                        @endphp
                        <div class="thumb-item-flow col-4 col-lg-2">
                            <div class="thumb-wrapper">
                                <a class="link at-cover" href="{{ route('truyen.truyen', ['slug' => $book->slug ?? '']) }}" title="{{ $book->title ?? '' }}">
                                    <div class="a6-ratio">
                                        <div class="content img-in-ratio"
                                             style="background-image: url('{{ asset(Storage::url($book->book_path ?? 'default/path/to/image.jpg')) }}')">
                                        </div>
                                    </div>
                                </a>
                                <div class="thumb-detail">
                                    <div class="thumb_attr chapter-title" title="{{ $chapter->title ?? '' }}">
                                        <a href="{{ route('truyen.chuong', ['slug' => $book->slug ?? '', 'chapter_slug' => $chapter->slug ?? '']) }}" title="{{ $chapter->title ?? '' }}">
                                            {{ $chapter->title ?? '' }}
                                        </a>
                                    </div>
                                    <div class="thumb_attr volume-title">
                                        <a href="{{ route('truyen.tap', ['slug' => $book->slug ?? '','episode_slug'=> $chapter->episode->slug ??'']) }}">{{ $chapter->episode->title ?? '' }}</a>
                                    </div>
                                    <div class="thumb_title text-center pad-top-10" style="cursor: pointer">
                                        <i class="fas fa-times"></i> Xóa
                                    </div>
                                </div>
                            </div>
                            <div class="thumb_attr series-title">
                                <a href="{{ route('truyen.truyen', ['slug' => $book->slug ?? '']) }}" title="{{ $book->title ?? '' }}">
                                    {{ $book->title ?? '' }}
                                </a>
                            </div>
                        </div>
                    @endforeach

                    @endif
                </main>
            </section>
        </div>





    </main>
@endsection
