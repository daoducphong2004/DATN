@extends('admin.layouts.default')
<style>
    .tabs {
        width: 100%;
        /* max-width: 800px; */
        /* margin: 50px auto; */
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 8px;
    }

    .tab-header {
        display: flex;
        border-bottom: 2px solid #ddd;
    }

    .tab-link {
        padding: 10px 20px;
        margin-right: 10px;
        cursor: pointer;
        border: none;
        background-color: #f4f4f4;
        transition: background-color 0.3s ease;
        border-radius: 4px 4px 0 0;
    }

    .tab-link.active {
        background-color: #ddd;
    }

    .tab-link:hover {
        background-color: #ccc;
    }

    .tab-content {
        padding: 20px;
    }

    .tab-pane {
        display: none;
    }

    .tab-pane.active {
        display: block;
    }

    h2 {
        color: #333;
    }

    .my-books-grid {
        display: flex;
        flex-wrap: wrap;
        gap: 15px;
    }

    .popular-thumb-item {
        width: 200px;
        /* hoặc kích thước tùy ý */
        text-align: center;
    }

    .thumb-wrapper {
        position: relative;
    }

    .img-in-ratio {
        background-size: cover;
        background-position: center;
        width: 100%;
        padding-top: 150%;
        /* Điều chỉnh tỷ lệ hình ảnh */
    }
</style>
@section('content')
    <div class="container">
        <div class="tabs">
            <div class="tab-header">
                <button class="tab-link active" onclick="openTab(event, 'reference')">Truyện Của {{ $user->username }}</button>
                <button class="tab-link" onclick="openTab(event, 'other')">Truyện {{ $user->username }} Tham Gia</button>
            </div>
            <div class="tab-content">
                <div id="reference" class="tab-pane active">
                    <h2>Truyện Của {{ $user->username }}</h2>
                    <div class="row">
                        @foreach ($mybooks as $item)
                            <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_{{ $item->id }}">

                                    <a href="{{ route('admin.detailstoryauthor', [$user->id,$item->id]) }}"
                                        title="{{ $item->episodes->last()->latestChapter->title ?? 'Chưa có chương truyện' }}">
                                        <div class="a6-ratio">
                                            <div class="content img-in-ratio lazyload"
                                                style="background-image: url('{{ !empty($item->book_path) ? asset(Storage::url($item->book_path)) : asset('img/noava.png') }}');">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="thumb_attr series-title">
                                    <a href="{{ route('admin.detailstoryauthor', [$user->id,$item->id]) }}"
                                        title="{{ $item->title }}">{{ $item->title }}</a>
                                </div>
                            </div>
                          
                        @endforeach
                    </div>
                    {{ $mybooks->links() }}
                </div>
                <div id="other" class="tab-pane">
                    <h2>Truyện {{ $user->username }} Tham Gia</h2>
                    <div class="row">
                        @foreach ($bookshare as $item)
                            <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_{{ $item->id }}">

                                    <a href="{{ route('admin.detailstoryauthor', [$user->id,$item->id]) }}"
                                        title="{{ $item->episodes->last()->latestChapter->title ?? 'Chưa có chương truyện' }}">
                                        <div class="a6-ratio">
                                            <div class="content img-in-ratio lazyload"
                                                style="background-image: url('{{ !empty($item->book_path) ? asset(Storage::url($item->book_path)) : asset('img/noava.png') }}');">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="thumb_attr series-title">
                                    <a href="{{ route('admin.detailstoryauthor',  [$user->id,$item->id]) }}"
                                        title="{{ $item->title }}">{{ $item->title }}</a>
                                </div>
                            </div>
                          
                        @endforeach
                    </div>
                    {{ $bookshare->links() }}
                </div>
            </div>
        </div>
    </div>
    <script>
        function openTab(event, tabName) {
            // Hide all tab content
            var tabPanes = document.querySelectorAll('.tab-pane');
            tabPanes.forEach(function(pane) {
                pane.classList.remove('active');
            });

            // Remove active class from all tab links
            var tabLinks = document.querySelectorAll('.tab-link');
            tabLinks.forEach(function(link) {
                link.classList.remove('active');
            });

            // Show the selected tab content
            document.getElementById(tabName).classList.add('active');

            // Add active class to the clicked tab link
            event.currentTarget.classList.add('active');
        }
    </script>
@endsection
