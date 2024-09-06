@extends('stories.partials.master')
@section('content')

    <body data-theme="light">

        <script>
            $(document).ready(function() {


                $('ul.hide').each(function() {
                    if ($(this).find('li').length == 0) $(this).prev().prev().prev().hide();
                });

                $('ul.show').each(function() {
                    if ($(this).find('li').length == 0) $(this).prev().prev().prev().hide();
                });
            });
        </script>

        @include('stories.iframe.partials.styleTree')

        <div id="actiontree">
            <p class="root">
                <span class="block small" style="color: orange">Lưu ý: Click chuột trái (hoặc chạm trên di động) vào mục muốn
                    chỉnh sửa để bật Menu</span>
                <a class="li-link" href="{{ route('story.show', $book->id) }}" target="_blank"><i
                        class="fas fa-external-link-alt"></i></a>
                <span class="series_name" data-item="{{ $book->id }}">{{ $book->title }}</span>
            </p>
            <ul class="tree">
                @foreach ($book->episodes as $item)
                    <li>

                        <span class="book-status"><i class="fas fa-plus-square"></i></span>
                        <a class="li-link" href="{{ route('story.show', $book->id) }}" target="_blank"><i
                                class="fas fa-external-link-alt"></i></a>
                        <span class="book-name level1" id="book_{{ $item->id }}"
                            data-item="{{ $item->id }}">{{ $item->title }}</span>
                        {{-- {{ dd($item->chapters()->get()); }} --}}
                        @if (!$item->chapters()->get()->isEmpty())
                            <ul class="hide">
                                @foreach ($item->chapters()->get() as $chapter)
                                    <li>
                                        <a class="li-link" href="{{ route('chapter.show', $chapter->id) }}"
                                            target="_blank"><i class="fas fa-external-link-alt"></i></a>
                                        <span class="chapter-name level2" id="chapter_{{ $chapter->id }}"
                                            data-item="{{ $chapter->id }}">{{ $chapter->title }}</span>
                                    </li>
                                @endforeach

                            </ul>
                        @endif

                    </li>
                @endforeach



            </ul>
            <div style="width: 1px; height: 170px"></div>
        </div>

        <ul id="series" class="menu">
            <li>Sửa truyện</li>
            {{--
        <li class="sep">&nbsp;</li>
        <li>Chuyển quyền</li>
        <li>Thêm quyền</li> --}}

            <li class="sep">&nbsp;</li>
            <li style="color: red">Xóa truyện</li>

            <li class="sep">&nbsp;</li>
            <li>Sắp xếp tập</li>
            <li>Thêm tập</li>
        </ul>

        <ul id="book" class="menu">
            <li>Sửa tập</li>

            <li class="sep">&nbsp;</li>

            <li class="sep">&nbsp;</li>
            <li>Sắp xếp chương</li>
            <li>Thêm chương</li>
        </ul>

        <ul id="chapter" class="menu">
            <li>Sửa chương</li>

            <li class="sep">&nbsp;</li>
            <li style="color: red">Xóa chương</li>
        </ul>

        @include('stories.iframe.partials.scriptTree')
    @endsection
