<script>
    var chapterId = {{ $chapter->id }}
    var bookId = {{ $book->id }}
    var episodeId = {{ $episode->id }}
    Array.from(
            document.querySelectorAll(
                '.reading-content p, .reading-content h1, .reading-content h2, .reading-content h3, .reading-content h4, .reading-content ul li'
            )
        ).slice(3) // Bỏ qua 3 phần tử đầu tiên
        .forEach((element, index) => {
            const uniqueId = `bookmark-${index + 1 }`; // Cộng thêm 3 vào index để giữ đúng số thứ tự
            element.id = uniqueId; // Thêm thuộc tính id cho phần tử
        });



    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.del_bookmark').forEach(item => {
            item.addEventListener('click', function() {
                const bookmarkId = this.parentNode.dataset.item; // Lấy ID duy nhất của bookmark
                const element = document.getElementById(bookmarkId); // Tìm phần tử tương ứng

                if (element) {
                    element.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });


        // Logic toast thông báo
        var toast = document.getElementById('toast-message');
        if (toast) {
            toast.classList.add('show');
            setTimeout(function() {
                toast.classList.remove('show');
            }, 3000);
        }

        const saveBookmark = document.querySelector('.save_bookmark');
        const bookmarkData = {};

        Array.from(
            document.querySelectorAll(
                '.reading-content p, .reading-content h1, .reading-content h2, .reading-content h3, .reading-content h4, .reading-content ul li'
            )
        ).slice(3)
        .forEach((paragraph, index) => {
            paragraph.addEventListener('click', function() {
                if (window.innerWidth > 979) {
                    const paragraphOffsetTop = paragraph.getBoundingClientRect().top + window
                        .scrollY;
                    const paragraphOffsetLeft = paragraph.getBoundingClientRect().left;
                    const containerOffsetLeft = document.querySelector('.reading-content')
                        .getBoundingClientRect().left;
                    const bookmarkWidth = saveBookmark.offsetWidth;

                    // Tính toán vị trí của saveBookmark
                    let bookmarkRight = containerOffsetLeft - paragraphOffsetLeft;

                    // Kiểm tra nếu bookmark tràn ra ngoài màn hình thì điều chỉnh lại
                    if (bookmarkRight + bookmarkWidth > window.innerWidth) {
                        bookmarkRight = window.innerWidth - bookmarkWidth -
                            10; // Dịch vào 10px nếu bị tràn
                    }

                    // Cập nhật vị trí của saveBookmark
                    saveBookmark.style.height = `${paragraph.offsetHeight + 28}px`;
                    saveBookmark.style.top = `${paragraphOffsetTop}px`;
                    saveBookmark.style.right = `-15px`;
                    //Sau sẽ làm lại tính logic vị trí bookmark right
                    saveBookmark.style.display = 'block';
                } else {
                    document.getElementById('bookmark_top').classList.toggle('on');
                    document.getElementById('rd-side_icon').classList.toggle('show');
                }

                bookmarkData.line_id = index + 1;
                bookmarkData.book_id = {{ $book->id }};
                bookmarkData.chapter_id = {{ $chapter->id }};
                bookmarkData.bookmark_id =
                    `bookmark-${index + 1}`; // Lưu ID duy nhất cho bookmark
            });
        });


        var isLoggedIn = @json(Auth::check());

        // Lưu bookmark
        document.querySelector('.save_bookmark').addEventListener('click', function() {
            if (!isLoggedIn) {
                alert("Bạn phải đăng nhập để sử dụng bookmark");
                return;
            }

            if (window.innerWidth > 979 && bookmarkData.line_id > 0) {
                console.log('Dữ liệu được gửi:', bookmarkData); // Hiển thị dữ liệu bookmarkData

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
                    .catch(error => console.error('Lỗi:', error));
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
