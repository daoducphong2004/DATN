<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="NoIndex, NoFollow">
    <title>Bảng điều khiển</title>

    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app_dark.css') }}" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css"
        integrity="sha256-BtbhCIbtfeVWGsqxk1vOHEYXS6qcvQvLMZqjtpWUEx8=" crossorigin="anonymous" />

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <link href="{{ asset('css/action.css?t=3') }}" rel="stylesheet">
</head>

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

    <style>
        body {
            overflow-x: hidden;
        }

        div#actiontree {
            float: left;
            font-family: Arial;
            font-size: 15px;
            margin-top: 10px;
            margin-left: 25px;
        }

        ul {
            list-style: none;
        }

        p.root {
            font-weight: bold;
            color: #369;
            font-size: 18px;
        }

        .tree,
        .tree ul {
            margin: 0 0 0 1em;
            /* indentation */
            padding: 0;
            list-style: none;
            color: #369;
            position: relative;
        }

        .tree ul {
            margin-left: .5em
        }

        /* (indentation/2) */

        .tree:before,
        .tree ul:before {
            content: "";
            display: block;
            width: 0;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            border-left: 1px solid;
        }

        .tree li {
            margin: 0;
            padding: 0 1.5em;
            /* indentation + .5em */
            padding-bottom: 0.5em;
            line-height: 1.675em;
            /* default list item's `line-height` */
            font-weight: bold;
            position: relative;
            margin-top: 10px;
        }

        .tree li:before {
            content: "";
            display: block;
            width: 10px;
            /* same with indentation */
            height: 0;
            border-top: 1px solid;
            margin-top: -1px;
            /* border top width */
            position: absolute;
            top: 1em;
            /* (line-height/2) */
            left: 0;
        }

        .tree li:last-child:before {
            background: white;
            /* same with body background */
            height: auto;
            top: 1em;
            /* (line-height/2) */
            bottom: 0;
        }

        ul.menu {
            display: none;
            position: absolute;
            background: white;
            z-index: 99;
            padding: 8px 0;
            width: 160px;
            border: solid 1px #dfdfdf;
            box-shadow: 1px 1px 2px #cfcfcf;
        }

        ul.menu li {
            padding: 4px 12px;
            color: #0066AA;
            font-family: Arial;
            font-size: 15px;
            cursor: pointer;
        }

        ul.menu li:hover {
            color: white !important;
            background: #0066AA;
        }

        .sep {
            background: initial !important;
            cursor: initial !important;
            padding: 0 !important;
            font-size: 10px !important;
        }

        #actiontree img {
            width: 10px;
            height: 10px;
        }

        .book-name,
        .chapter-name {
            cursor: context-menu;
            line-height:
        }

        .book-name:hover,
        .chapter-name:hover {
            opacity: 0.6;
        }

        .book-name.current,
        .chapter-name.current {
            color: red;
        }

        .book-status,
        .li-link {
            margin-right: 6px;
            font-size: 18px;
            color: black;
            cursor: pointer;
        }

        span.series_name {
            cursor: context-menu;
        }
    </style>

    <div id="actiontree">
        <p class="root">
            <span class="block small" style="color: orange">Lưu ý: Click chuột trái (hoặc chạm trên di động) vào mục
                muốn chỉnh sửa để bật Menu</span>
            <a class="li-link" href="/truyen/19025-tesst-123" target="_blank"><i
                    class="fas fa-external-link-alt"></i></a>
            <span class="series_name" data-item="19025">tesst 123</span>
        </p>
        <ul class="tree">
        </ul>
        <div style="width: 1px; height: 170px"></div>
    </div>

    <ul id="series" class="menu">
        <li>Sửa truyện</li>

        <li class="sep">&nbsp;</li>
        <li>Chuyển quyền</li>
        <li>Thêm quyền</li>

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

    <script>
        var smallWidth = $(parent.window).width() < 992;

        function openLink(frameLink, frameName, pushPath) {
            window.open(frameLink, frameName);

            if (frameName != '_parent') {
                parent.$('#action-tree').addClass('hidden-xs hidden-sm');
            }

            if (pushPath) {
                parent.history.pushState({}, '', parent.location.pathname + '?' + pushPath);
            }
        }

        function closeAllMenus() {
            var menus = document.getElementsByClassName('menu');

            for (var i = 0; i < menus.length; i++) {
                menus[i].style.display = 'none';
            }
        }

        function prepareContextMenu(type, event) {
            event.stopPropagation();
            event.preventDefault();

            closeAllMenus();

            var element = event.target;
            var menu = $('#' + type);
            var chil = menu.children();

            $('span').removeClass('current');
            $(element).addClass('current');

            for (var i = 0; i < chil.length; i++) {
                var child = chil[i];
                var id = element.getAttribute('data-item');

                switch (child.innerText) {
                    case 'Sửa truyện':
                        child.onclick = () => openLink(
                            '{{route('storyinformation')}}',
                            'action',
                            'action=editseries'
                        );
                        break;
                    case 'Chuyển quyền':
                        child.onclick = () => openLink(
                            'https://docln.net/action/series/19025/transfermembers',
                            '_parent'
                        );
                        break;
                    case 'Thêm quyền':
                        child.onclick = () => openLink(
                            'https://docln.net/action/series/19025/sharemembers?navbar=0',
                            'action',
                            'action=shareseries'
                        );
                        break;
                    case 'Xóa truyện':
                        child.onclick = () => openLink(
                            'https://docln.net/action/series/19025/delete',
                            '_parent'
                        );
                        break;
                    case 'Sắp xếp tập':
                        child.onclick = () => openLink(
                            'https://docln.net/action/series/19025/order?navbar=0',
                            'action',
                            'action=orderbook'
                        );
                        break;
                    case 'Thêm tập':
                        child.onclick = () => openLink(
                            '{{route('storyepisode')}}',
                            'action',
                            'action=createbook'
                        );
                        break;
                    case 'Sửa tập':
                        child.onclick = () => openLink(
                            'https://docln.net/action/book/' + id + '/edit?navbar=0',
                            'action',
                            'book_id=' + id + '&action=editbook'
                        );
                        break;
                    case 'Xóa tập':
                        child.onclick = () => openLink(
                            'https://docln.net/action/book/' + id + '/delete?navbar=0',
                            'action',
                            'book_id=' + id + '&action=deletebook'
                        );
                        break;
                    case 'Xóa nhiều chương':
                        child.onclick = () => openLink(
                            'https://docln.net/action/book/' + id + '/delete-chapters?navbar=0',
                            'action',
                            'book_id=' + id + '&action=book.manage.delete_chapters'
                        );
                        break;
                    case 'Sắp xếp chương':
                        child.onclick = () => openLink(
                            'https://docln.net/action/book/' + id + '/order?navbar=0',
                            'action',
                            'book_id=' + id + '&action=orderchapter'
                        );
                        break;
                    case 'Thêm chương':
                        child.onclick = () => openLink(
                            'https://docln.net/action/chapter/create/book=' + id + '?navbar=0',
                            'action',
                            'book_id=' + id + '&action=createchapter'
                        );
                        break;
                    case 'Sửa chương':
                        child.onclick = () => openLink(
                            'https://docln.net/action/chapter/' + id + '/edit?navbar=0',
                            'action',
                            'chapter_id=' + id + '&action=editchapter'
                        );
                        break;
                    case 'Xóa chương':
                        child.onclick = () => openLink(
                            'https://docln.net/action/chapter/' + id + '/delete?navbar=0',
                            'action',
                            'chapter_id=' + id + '&action=deletechapter'
                        );
                        break;
                }
            }

            menu.css({
                display: 'block',
                position: 'absolute',
                left: (event.pageX + 20 > (menuLeft = document.body.clientWidth - menu.width()) ? menuLeft : event
                    .pageX + 20) + 'px',
                top: event.pageY + 'px'
            });

            return false;
        }

        var home = document.getElementsByClassName('series_name')[0];
        var book = document.getElementsByClassName('level1');
        var chap = document.getElementsByClassName('level2');

        var menuEvent = 'click';

        home.addEventListener(menuEvent, function(event) {
            prepareContextMenu('series', event);
        });

        for (var i = 0; i < book.length; i++) {
            book[i].addEventListener(menuEvent, function(event) {
                prepareContextMenu('book', event);
            });
        }

        for (var i = 0; i < chap.length; i++) {
            chap[i].addEventListener(menuEvent, function(event) {
                prepareContextMenu('chapter', event);
            });
        }

        document.addEventListener('click', function(event) {
            closeAllMenus();
        })

        $(document).ready(function() {
            $('.book-status').on('click', function(event) {
                event.stopPropagation();
                $(this).html($(this).find('.fa-minus-square').length > 0 ?
                    '<i class="fas fa-plus-square"></i>' : '<i class="fas fa-minus-square"></i>');
                $(this).nextAll('ul').toggleClass('show hide');
            });
        });
    </script>




    <script src="/livewire/livewire.js?id=f121a5df" data-csrf="1s68PBJKsMIU4nn1Wn9P2EbTNQaf2eWqi4pV2RqT"
        data-update-uri="/livewire/update" data-navigate-once="true"></script>
</body>

</html>
