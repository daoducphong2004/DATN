<script>
    var chapterId = {{ $chapter->id }}
    var bookId = {{ $book->id }}
    var episodeId = {{ $episode->id }}

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
                    const paragraphOffsetTop = paragraph.getBoundingClientRect().top + window
                        .scrollY;
                    const paragraphOffsetLeft = paragraph.getBoundingClientRect().left;
                    const containerOffsetLeft = document.querySelector('.reading-content')
                        .getBoundingClientRect().left;

                    saveBookmark.style.height = `${paragraph.offsetHeight + 28}px`;
                    saveBookmark.style.top = `${paragraphOffsetTop}px`;
                    saveBookmark.style.right = `${containerOffsetLeft - paragraphOffsetLeft}px`;
                    saveBookmark.style.display = 'block';
                } else {
                    document.getElementById('bookmark_top').classList.toggle('on');
                    document.getElementById('rd-side_icon').classList.toggle('show');
                }
                bookmarkData.line_id = index + 1;
                bookmarkData.book_id = {{ $book->id }};
                bookmarkData.chapter_id = {{ $chapter->id }};

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
                console.log('Data being sent:', bookmarkData); // Hiển thị dữ liệu bookmarkData

                fetch('/chapter/bookmark', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')
                                .getAttribute('content')
                        },
                        body: JSON.stringify(bookmarkData)
                    })
                    .then(response => {
                        if (!response.ok) throw new Error(`HTTP error! Status: ${response.status}`);
                        return response.json();
                    })
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

    // Hàm lấy bookmarks và hiển thị
    function fetchAndDisplayBookmarks(chapterId) {
        fetch(`/chapter/${chapterId}/bookmarks`, {
                method: 'GET',
                headers: {
                    'Content-Type': 'application/json',
                    'Authorization': `Bearer ${token}` // Thêm token nếu có
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'success') {
                    console.log('Bookmarks:', data.bookmarks);
                    displayBookmarks(data.bookmarks);
                } else {
                    console.error('Tải danh sáchbookmarks thất bại');
                }
            })
            .catch(error => console.error('Error:', error));
    }

    // Hàm hiển thị bookmarks
    function displayBookmarks(bookmarks) {
        const bookmarkList = document.querySelector('#bookmarks_list');
        bookmarkList.innerHTML = ''; // Xóa nội dung cũ

        const emptyMessage = document.getElementById('empty_message');

        if (bookmarks.length === 0) {
            if (emptyMessage) {
                emptyMessage.style.display = 'block';
            }
            return;
        }

        if (emptyMessage) {
            emptyMessage.style.display = 'none';
        }

        bookmarks.forEach(bookmark => {
            const listItem = document.createElement('li');
            listItem.dataset.line = bookmark.line_id;
            listItem.dataset.item = bookmark.id;;

            // Lấy nội dung của đoạn văn có id tương ứng
            const paragraph = document.querySelector(`#chapter-content p[id="${bookmark.line_id}"]`);
            const paragraphContent = paragraph ? paragraph.innerText : '';

            listItem.innerHTML = `
            <span class="pos_bookmark">Đoạn thứ ${bookmark.line_id}<small style="display: block">${paragraphContent}</small></span>
            <span data-item="${bookmark.id}" class="del_bookmark remove_bookmark">
                <i class="fas fa-times"></i>
            </span>
        `;
            // Thêm sự kiện xóa bookmark
            listItem.querySelector('.remove_bookmark').addEventListener('click', () => {
                deleteBookmark(bookmark.id);
            });
            bookmarkList.appendChild(listItem);
        });
    }


    // Hàm xóa bookmark
    function deleteBookmark(bookmarkId) {
        fetch(`/chapter/bookmark/${bookmarkId}`, {
                method: 'DELETE',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}' // Sử dụng token từ PHP
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'success') {
                    document.querySelector(`li[data-item="${bookmarkId}"]`).remove();
                    alert(data.message);
                } else {
                    alert('Xóa bookmark thất bại');
                }
            })
            .catch(error => console.error('Error:', error));
    }

    // Gọi hàm fetchAndDisplayBookmarks khi tải trang hoặc khi cần
    fetchAndDisplayBookmarks(chapterId);
</script>
