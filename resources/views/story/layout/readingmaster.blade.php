<!DOCTYPE html>
<html lang="en">

@include('story.layout.reading.head')
@include('story.partials.css')
@if (session('error'))
    <div id="toast-message" class="toast-message">
        {{ session('error') }}
    </div>
@endif
@if (session('message'))
    <div id="toast-message" class="toast-message success">
        {{ session('message') }}
    </div>
@endif

@if (session('success'))
    <div id="toast-message" class="toast-message success">
        {{ session('success') }}
    </div>
@endif

@include('story.layout.reading.slidebar')

@yield('content')

@include('story.layout.reading.footer')
<script>
document.addEventListener('DOMContentLoaded', function() {
    var toast = document.getElementById('toast-message');
    if (toast) {
        toast.classList.add('show');
        setTimeout(function() {
            toast.classList.remove('show');
        }, 3000);
    }

    const saveBookmark = document.querySelector('.save_bookmark');
    const bookmarkData = {};

    document.querySelectorAll('.reading-content p').forEach((paragraph, index) => {
        paragraph.addEventListener('click', function() {
            if (window.innerWidth > 979) {
                const paragraphOffsetTop = paragraph.getBoundingClientRect().top + window.scrollY;
                const paragraphOffsetLeft = paragraph.getBoundingClientRect().left;
                const containerOffsetLeft = document.querySelector('.reading-content').getBoundingClientRect().left;

                saveBookmark.style.height = `${paragraph.offsetHeight + 28}px`;
                saveBookmark.style.top = `${paragraphOffsetTop}px`;
                saveBookmark.style.right = `${containerOffsetLeft - paragraphOffsetLeft}px`;
                saveBookmark.style.display = 'block';
            } else {
                document.getElementById('bookmark_top').classList.toggle('on');
                document.getElementById('rd-side_icon').classList.toggle('show');
            }
            bookmarkData.line_id = index + 1;
        });
    });

    var isLoggedIn = @json(Auth::check());

    // Save bookmark
    document.querySelector('.save_bookmark').addEventListener('click', function() {
        if (!isLoggedIn) {
            alert("Bạn phải đăng nhập để sử dụng bookmark");
            return;
        }

        if (window.innerWidth > 979 && bookmarkData.line_id > 0) {
            fetch('/chapter/bookmark', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(bookmarkData)
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'success') {
                    const bookmarkList = document.querySelector('ul#bookmarks_list');
                    const listItem = document.createElement('li');
                    listItem.dataset.line = data.line_id;
                    listItem.innerHTML = `
                        <span class="pos_bookmark">Đoạn thứ ${data.line_id}</span>
                        <span data-item="${data.bookmark_id}" class="del_bookmark remove_bookmark">
                            <i class="fas fa-times"></i>
                        </span>`;
                    bookmarkList.appendChild(listItem);
                    alert(`Bạn đã lưu bookmark thành công đoạn thứ ${data.line_id}`);
                } else {
                    alert(data.message);
                }
            })
            .catch(error => console.error('Error:', error));
        }
    });

    // Delete bookmark
    document.querySelector('ul#bookmarks_list').addEventListener('click', function(event) {
        if (event.target.classList.contains('remove_bookmark')) {
            const bookmarkId = event.target.getAttribute('data-item');
            fetch(`/chapter/bookmark/${bookmarkId}`, {
                method: 'DELETE',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-Token': '{{ csrf_token() }}'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'success') {
                    event.target.closest('li').remove();
                    alert('Bookmark đã được xóa');
                } else {
                    alert(data.message);
                }
            })
            .catch(error => console.error('Error:', error));
        }
    });
});

</script>

</html>
