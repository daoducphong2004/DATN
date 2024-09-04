@extends('stories.partials.master')
@section('content')
    <div class="wrapper container-fluid">
        <div class="visible-xs-block visible-sm-block"
            style="
        position: absolute;
        top: 70px;
        left: 0;
        z-index: 10000;
        padding: 10px;
        border: 2px solid #de2222;
        border-radius: 2px;
        background-color: #f5f5f5;"
            id="action-tree-toggle">
            Click để bật/tắt khung Quản lý
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3 hidden-xs hidden-sm" id="action-tree"
            style="border-right: 1px solid #ccc; padding: 0">
            <iframe name="nav" src="{{ route('storytree', $book->id) }}"></iframe>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-9" style="padding: 0 0px">
            <iframe name="action" src="{{ route('storyinformation', $book->id) }}"></iframe>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#action-tree-toggle').on('click', function() {
                $('#action-tree').toggleClass('hidden-xs hidden-sm');
            });

            if (/iPhone|iPod|iPad/.test(navigator.userAgent)) {
                $('iframe').parent().css({
                    width: '100%',
                    height: '100%',
                    overflow: 'auto',
                    '-webkit-overflow-scrolling': 'touch'
                });
            }
        });
    </script>
@endsection
