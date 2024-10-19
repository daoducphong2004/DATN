@extends('story.layout.master')


@section('content')
    <div class="page-top-group ">
        <a href="/thao-luan/2591">
            <div class="index-background d-none d-lg-block" style="background-image: url('/images/banners/fbg_d.jpg')"></div>
            <div class="index-background d-lg-none"
                style="background-image: url('/images/banners/fbg_m.jpg'); background-size: cover"></div>
        </a>
    </div>
    <main id="mainpart" class="project-page">
        <div class="container">
        </div>
        <div class="container">
            <div class="row d-block clearfix">
                <div id="rd-sidebar" class="col-12 col-lg-3 float-right">
                    <div class="row top-group">
                        <div class="col-12 no-push push-3-m col-md-6 no-push-l col-lg-12">
                            <section class="series-users">
                                <main>
                                    <div class="series-owner group-mem py-3 text-center">
                                        <span class="series-owner_name"><a>Truyện sáng tác</a></span>
                                    </div>
                                    <img width="100%" height="50px"
                                    src="{{!empty($book->book_path) ? $book->book_path : 'https://m.media-amazon.com/images/I/712pj+kPziL._AC_UF1000,1000_QL80_.jpg'}}"
                                    alt="{{$book->book_path}}">
                                    <div class="fantrans-section">
                                        <div class="fantrans-name justify-content-center d-flex align-items-center">
                                            <div class="text-base text-yellow-400 pe-2">
                                                <i class="fas fa-star"></i>
                                            </div> {{ number_format($averageRating, 2) }}/5 - {{$ratingCount}} đánh giá</div>
                                        </div>
                                    <div class="owner-donate" style="padding: 0">
                                        <!-- <span class="donate-intro">Bạn muốn tiến độ đều hơn ?</span>
                                                                                                            <span class="button button-red" onclick="alert('Chức năng đang được hoàn thiện')">Hãy Ủng hộ !!</span> -->
                                    </div>
                                </main>
                            </section>
                        </div>
                    </div>



                    <section id='list-vol' class="none list_vol-section">
                        <div class="list-volume-wrapper basic-section">
                            <header class="sect-header"><span class="sect-title">Mục lục</span></header>
                            <span class="list-vol_off">
                                <i class="fas fa-times"></i>
                            </span>
                            <ol class="list-volume unstyled no-margin no-padding">

                            </ol>
                        </div>
                    </section>
                </div>
                <div class="col-12 col-lg-9 float-left">
                    @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if(Auth::check())
            <form action="{{ route('rating.submit', $book->slug) }}" method="POST">
                @csrf

                <div class="mb-3 d-flex align-items-center">
                    <label for="rating" class="form-label pr-3">Số sao bạn đánh giá:</label>
                    <div class="rating mb-2 d-flex align-items-center" id="rating-stars">
                        @for ($i = 0; $i < 5; $i++)
                            <div class="text-base">
                                <input type="radio" id="star{{ $i + 1 }}" name="rating" value="{{ $i + 1 }}" class="rating-input">
                                <label for="star{{ $i + 1 }}" class="fas fa-star rating-label"></label>
                            </div>
                        @endfor
                    </div>
                </div>
                @error('rating')
                    <div class="text-danger">{{ $message }}</div>
                @enderror

                <div class="mb-3">
                    <textarea id="LN_Series_Summary" name="comment" class="form-control w-100" rows="4" placeholder="Viết nhận xét của bạn..."></textarea>
                    @error('comment')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary btn-small">Đăng đánh giá</button>
            </form>
        @endif
                    <div style="text-align: center; margin: 0 auto 10px auto;">
                    </div>

                    <section id="series-reviews" class="basic-section">
                        <header class="sect-header tab-list">
                            <span class="sect-title tab-title" data-tab-index="1">Đánh giá truyện - {{!empty($book) ? $book->title : ''}}</span></span>
                        </header>

                        <div class="overflow-hidden shadow">
                            <ul role="list" class="">
                                @foreach ($ratings as $item)
                                    <li class="border-bottom pb-3">
                                        <a href=""
                                            class="block hover:bg-gray-50 dark:hover:!bg-zinc-700">
                                            <div class="px-4 py-4 sm:px-6">
                                                <div class="flex items-center justify-between">
                                                    <p class="truncate text-sm font-bold text-indigo-600 dark:text-white">
                                                        {{!empty($item->user->full_name) ? $item->user->full_name : $item->user->username}}</p>
                                                    <div class="ml-2 flex flex-shrink-0">
                                                        <div class="d-flex justify-content-around">
                                                            @for ($i=0; $i<$item->rating; $i++)
                                                                <div class="text-base text-yellow-400">
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                            @endfor
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-2 sm:flex sm:justify-between">
                                                    <div class="sm:flex">
                                                        <p class="flex items-center text-sm text-gray-500 dark:text-white">
                                                            <svg class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor"
                                                                aria-hidden="true">
                                                                <path fill-rule="evenodd"
                                                                    d="M10 2c-2.236 0-4.43.18-6.57.524C1.993 2.755 1 4.014 1 5.426v5.148c0 1.413.993 2.67 2.43 2.902.848.137 1.705.248 2.57.331v3.443a.75.75 0 001.28.53l3.58-3.579a.78.78 0 01.527-.224 41.202 41.202 0 005.183-.5c1.437-.232 2.43-1.49 2.43-2.903V5.426c0-1.413-.993-2.67-2.43-2.902A41.289 41.289 0 0010 2zm0 7a1 1 0 100-2 1 1 0 000 2zM8 8a1 1 0 11-2 0 1 1 0 012 0zm5 1a1 1 0 100-2 1 1 0 000 2z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                            {{!empty($item->comment) ? $item->comment : 'Không có nội dung'}}
                                                        </p>
                                                    </div>
                                                    <div
                                                        class="mt-2 flex items-center text-sm text-gray-500 sm:mt-0 dark:text-white">
                                                        <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400"
                                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                            <path fill-rule="evenodd"
                                                                d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                        <p>
                                                            <time class="topic-time timeago" title="27-08-2024 12:22:58"
                                                                datetime="{{$item->created_at}}"></time>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <form action="{{ route('rating.toggleLike', $item->id) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="ml-5"><i class="fa fa-thumbs-up"></i> <span class="ml-1">{{ $item->likes->count() }} người đồng ý</span></button>
                                        </form>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>
@endsection
