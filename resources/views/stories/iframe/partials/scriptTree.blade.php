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

        var id = element.getAttribute('data-item');

        for (var i = 0; i < chil.length; i++) {
            var child = chil[i];

            switch (child.innerText) {
                case 'Sửa truyện':
                    child.onclick = () => openLink(
                        '{{ route('storyinformation', $book->id) }}',
                        'action',
                        'action=editseries'
                    );
                    break;
                case 'Xóa truyện':
                    child.onclick = () => {
                        if (confirm('Bạn có chắc muốn xóa truyện này không?')) {
                            $.ajax({
                                url: '{{ route('story.destroy', $book->id) }}',
                                type: 'DELETE',
                                data: {
                                    _token: '{{ csrf_token() }}'
                                },
                                success: function(result) {
                                    alert('Truyện đã được xóa thành công!');
                                    window.location.reload();
                                },
                                error: function(xhr) {
                                    alert('Xóa truyện thất bại. Vui lòng thử lại.');
                                }
                            });
                        }
                    };
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
                        '{{ route('storyepisode',$book->id) }}',
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
                    // Use the correct `id` of the selected episode here
                    child.onclick = () => openLink(
                        '{{ route('storychapter', ':id') }}'.replace(':id', id),
                        'action',
                        'book_id=' + id + '&action=createchapter'
                    );
                    break;
                case 'Sửa chương':
                    child.onclick = () => openLink(
                        '{{ route('chapter.edit',':id') }}'.replace(':id', id) ,
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
