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
                        '{{ route('story.edit', $book->id) }}',
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
                                headers: {
                                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
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
                        '{{ route('storyepisode', $book->id) }}',
                        'action',
                        'action=createbook'
                    );
                    break;
                case 'Sửa tập':
                    child.onclick = () => openLink(
                        '{{ route('episode.edit', ':id') }}'.replace(':id', id),
                        'action',
                        'episode_id=' + id + '&action=editepisode'
                    );

                    break;
                case 'Xóa tập':
                    child.onclick = () => {
                        if (confirm(
                                'Bạn có chắc muốn xóa tập này không? Khi xóa tập này sẽ mất hết chương truyện! vui lòng cân nhắc kỹ!'
                            )) {
                            $.ajax({
                                url: '{{ route('episode.destroy', ':id') }}'.replace(':id', id),
                                type: 'DELETE',
                                data: {
                                    _token: '{{ csrf_token() }}'
                                },
                                success: function(result) {
                                    if (result.success) {
                                        alert(result.message);
                                        window.location.reload();
                                    } else {
                                        alert(result.message);
                                    }
                                },
                                error: function(xhr) {
                                    alert('Xóa tập thất bại. Vui lòng thử lại.');
                                }
                            });
                        }
                    };
                    break;
                case 'Xóa nhiều chương':
                    child.onclick = () => openLink(
                        'https://docln.net/action/book/' + id + '/delete-chapters?navbar=0',
                        'action',
                        'episode_id=' + id + '&action=episode.manage.delete_chapters'
                    );
                    break;
                case 'Sắp xếp chương':
                    child.onclick = () => openLink(
                        'https://docln.net/action/episode/' + id + '/order?navbar=0',
                        'action',
                        'episode_id=' + id + '&action=orderchapter'

                    );
                    break;
                case 'Thêm chương':
                    // Use the correct `id` of the selected episode here
                    child.onclick = () => openLink(
                        '{{ route('storychapter', ':id') }}'.replace(':id', id),
                        'action',
                        'episode_id=' + id + '&action=createchapter'
                    );
                    break;
                case 'Sửa chương':
                    child.onclick = () => openLink(
                        '{{ route('chapter.edit', ':id') }}'.replace(':id', id),
                        'action',
                        'chapter_id=' + id + '&action=editchapter'
                    );
                    break;
                case 'Xóa chương':
                    child.onclick = () => {
                        if (confirm('Bạn có chắc muốn xóa truyện này không?')) {
                            $.ajax({
                                url: '{{ route('chapter.destroy', ':id') }}'.replace(':id', id),
                                type: 'DELETE',
                                data: {
                                    _token: '{{ csrf_token() }}'
                                },
                                success: function(result) {
                                    alert('Chapter đã được xóa thành công!');
                                    window.location.reload();
                                },
                                error: function(xhr) {
                                    alert('Xóa chapter thất bại. Vui lòng thử lại.');
                                }
                            });
                        }
                    };
                    break;
                    // New cases for sharing access and transferring ownership
                case 'Thêm quyền':
                    child.onclick = () => openLink(
                        '{{ route('book.shareList', ':id') }}'.replace(':id', id),
                        'action',
                        'chapter_id=' + id + '&action=editchapter'
                    );
                    break;
                case 'Chuyển quyền':
                    child.onclick = () => {
                        document.getElementById('transferOwnershipModal').style.display = 'block';
                    };
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
    // Close modals when clicking outside of them
    window.onclick = function(event) {
        var shareModal = document.getElementById('shareAccessModal');
        var transferModal = document.getElementById('transferOwnershipModal');
        if (event.target == shareModal) {
            shareModal.style.display = 'none';
        } else if (event.target == transferModal) {
            transferModal.style.display = 'none';
        }
    };

    document.addEventListener('DOMContentLoaded', function() {
        // Handle form submissions
        document.getElementById('shareAccessForm').onsubmit = function(event) {
            event.preventDefault();

            // Get the user_id to share access with
            var userId = document.querySelector('#shareAccessForm input[name="user_id"]').value;

            // Send AJAX request to share access
            $.ajax({
                url: '{{ route('book.shareAccess', $book->id) }}',
                type: 'POST',
                data: {
                    user_id: userId,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    alert('Quyền chỉnh sửa đã được chia sẻ.');
                    document.getElementById('shareAccessModal').style.display = 'none';
                },
                error: function(xhr) {
                    alert('Có lỗi xảy ra. Vui lòng thử lại.');
                }
            });
        };

        document.getElementById('transferOwnershipForm').onsubmit = function(event) {
            event.preventDefault();

            // Get the new owner ID
            var newOwnerId = document.querySelector('#transferOwnershipForm input[name="new_owner_id"]')
                .value;

            // Send AJAX request to transfer ownership
            $.ajax({
                url: '{{ route('book.transferOwnership', $book->id) }}',
                type: 'POST',
                data: {
                    new_owner_id: newOwnerId,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    alert('Quyền sở hữu đã được chuyển.');
                    document.getElementById('transferOwnershipModal').style.display = 'none';
                    window.location.reload();
                },
                error: function(xhr) {
                    alert('Có lỗi xảy ra. Vui lòng thử lại.');
                }
            });
        };
    });
</script>
