@extends('stories.partials.master')

@section('content')

<body data-theme="light">

    <script>
        $(document).ready(function () {
            $('ul.hide').each(function () {
                if ($(this).find('li').length == 0) $(this).prev().prev().prev().hide();
            });

            $('ul.show').each(function () {
                if ($(this).find('li').length == 0) $(this).prev().prev().prev().hide();
            });
        });
    </script>

    @include('stories.iframe.partials.styleTree')

        <div id="actiontree">
            <p class="root">
                <span class="block small" style="color: orange">Lưu ý: Click chuột trái (hoặc chạm trên di động) vào mục muốn
                    chỉnh sửa để bật Menu</span>
                <a class="li-link" href="{{ route('truyen.truyen', $book->slug) }}" target="_blank"><i
                        class="fas fa-external-link-alt"></i></a>
                <span class="series_name" data-item="{{ $book->id }}">{{ $book->title }}</span>
            </p>
            <ul class="tree">
                @foreach ($book->episodes->sortBy('order') as $item)
                <li>
                    <span class="book-status"><i class="fas fa-plus-square"></i></span>
                    <a class="li-link" href="{{ route('truyen.tap', [$book->slug, $item->slug]) }}" target="_blank">
                        <i class="fas fa-external-link-alt"></i>
                    </a>
                    <span class="book-name level1" id="book_{{ $item->id }}" data-item="{{ $item->id }}">
                        {{ $item->title }}
                    </span>
                    
                    @if (!$item->chapters()->get()->isEmpty())
                        <ul class="hide">
                            @foreach ($item->chapters()->orderBy('order')->get() as $chapter)
                                <li>
                                    <a class="li-link" href="{{ route('truyen.chuong', [$book->slug, $chapter->slug]) }}" target="_blank">
                                        <i class="fas fa-external-link-alt"></i>
                                    </a>
                                    <span class="chapter-name level2" id="chapter_{{ $chapter->id }}" data-item="{{ $chapter->id }}">
                                        {{ $chapter->title }}
                                    </span>
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
        <li class="sep">&nbsp;</li>
        <li id="share-access-btn">Thêm quyền</li>
        <li class="sep">&nbsp;</li>
        <li style="color: red">Xóa truyện</li>
        <li class="sep">&nbsp;</li>
        <li>Sắp xếp tập</li>
        <li>Thêm tập</li>
    </ul>

    <ul id="book" class="menu">
        <li>Sửa tập</li>
        <li class="sep">&nbsp;</li>
        <li style="color: red">Xóa tập</li>
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

    <!-- Modal for sharing access -->
    <div id="shareAccessModal" class="modal">
        <div class="modal-content">
            <h2>Thêm quyền chỉnh sửa</h2>
            <form id="shareAccessForm">
                <label for="user_id">Chọn người dùng để chia sẻ quyền:</label>
                <input type="text" name="user_id" placeholder="Nhập ID người dùng" required>
                <button type="submit">Thêm quyền</button>
            </form>
        </div>
    </div>

   
    <!-- Modal for sharing chapter -->
    <div id="shareChapterModal" class="modal">
        <div class="modal-content">
            <h2>Chia sẻ chương</h2>
            <form id="shareChapterForm">
                <label for="user_id">Chọn người dùng để chia sẻ chương:</label>
                <input type="text" name="user_id" placeholder="Nhập ID người dùng" required>
                <button type="submit">Chia sẻ chương</button>
            </form>
        </div>
    </div>

</body>

@endsection
