@include('stories.iframe.partials.header')

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
            <span class="block small" style="color: orange">Lưu ý: Click chuột trái (hoặc chạm trên di động) vào mục
                muốn chỉnh sửa để bật Menu</span>
            <a class="li-link" href="{{ route('story.show', $book->id) }}" target="_blank"><i
                    class="fas fa-external-link-alt"></i></a>
            <span class="series_name" data-item="{{ $book->id }}">{{ $book->title }}</span>
        </p>
        <ul class="tree">
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

    <script src="/livewire/livewire.js?id=f121a5df" data-csrf="1s68PBJKsMIU4nn1Wn9P2EbTNQaf2eWqi4pV2RqT"
        data-update-uri="/livewire/update" data-navigate-once="true"></script>
</body>

</html>
