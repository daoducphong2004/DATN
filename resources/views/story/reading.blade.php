@extends('story.layout.readingmaster')
@section('title')
    Đọc "{{ $chapter->book->title }}"
@endsection
@section('content')
    @include('story.partials.noti')

    <div class="container">
        <div class="row">
            <div class="reading-content col-12 col-lg-10 offset-lg-1" style="word-wrap: break-word;">
                <div id="bookmark_top" class="block d-lg-none"><i class="fas fa-bookmark"></i></div>
                <span class="save_bookmark" style="position: absolute; top: 9999px; display: none"><i
                        class="fas fa-bookmark"></i></span>
                <div class="title-top" style="padding-top: 20px">
                    <h2 class="title-item text-xl font-bold" align="center">{{ $episode->title }}</h2>
                    <h4 class="title-item text-base font-bold" align="center">{{ $chapter->title }}</h4>
                    <h6 class="title-item font-bold" align="center">
                        <a href="#chapter-comments" style="text-decoration: underline">{{ $CountComment }} Bình luận</a> -
                        Độ dài: <span id="chapter-word-count"></span> từ - Cập nhật:
                        <time class="topic-time timeago" title="{{ $chapter->updated_at->format('d-m-Y H:i:s') }}"
                            datetime="{{ $chapter->updated_at->toIso8601String() }}"></time>
                    </h6>
                </div>
                <!-- Modal mua chương -->
                <div id="purchaseModal" class="modal" style="display:none;">
                    <div class="modal-content">
                        <span class="close" onclick="closeModal()">&times;</span>
                        <h2 id="modalTitle"></h2>
                        <p>Giá: <span id="chapterPrice"></span> coin</p>
                        <a id="confirmPurchaseButton" href="" class="btn btn-success">Xác nhận mua</a>
                    </div>
                </div>

                <div style="text-align: center; margin: 20px auto -20px auto;">
                    <!-- Bạn có thể thêm nội dung quảng cáo hoặc hình ảnh ở đây -->
                </div>

                <!-- Chỉ hiển thị nội dung chương từ API -->
                <div id="chapter-content" class="long-text no-select text-justify"
                    style="font-family:'Nunito', 'Times New Roman', Georgia, serif;">
                    <!-- Nội dung sẽ được thay thế qua API -->
                </div>

                <div id='purchase-chapter' style="text-align: center; margin: 20px auto 10px auto;">

                </div>

                <div id="notification" class="alert alert-info" style="display: none;">
                    <span id="notificationMessage"></span>
                    <button type="button" class="close" onclick="closeNotification()">&times;</button>
                </div>

                <section class="rd-basic_icon row">
                    <!-- Previous Chapter Link -->
                    <a href="{{ $chapter->previousChapter() ? route('truyen.chuong', ['slug' => $book->slug, 'chapter_slug' => $chapter->previousChapter()->slug]) : '#' }}"
                        class="dark:text-black col text-center {{ $chapter->previousChapter() ? '' : 'disabled' }}">
                        <i class="fas fa-backward"></i>
                    </a>

                    <!-- Home Link -->
                    <a href="{{ route('truyen.truyen', $book->slug) }}" class="dark:text-black col text-center">
                        <i class="fas fa-home"></i>
                    </a>

                    <!-- Next Chapter Link -->
                    <a href="{{ $chapter->nextChapter() ? route('truyen.chuong', ['slug' => $book->slug, 'chapter_slug' => $chapter->nextChapter()->slug]) : '#' }}"
                        class="dark:text-black col text-center {{ $chapter->nextChapter() ? '' : 'disabled' }}">
                        <i class="fas fa-forward"></i>
                    </a>
                </section>
            </div>
            <div class="col-12 col-lg-10 offset-lg-1">
                @include('story.layout.reading.comment')
            </div>
        </div>
    </div>
    </main>
    <script>
        $(document).ready(function() {
            let slug = '{{ $book->slug }}'; // Thay bằng giá trị thực tế
            let chapter_slug = '{{ $chapter->slug }}'; // Thay bằng giá trị thực tế

            $.ajax({
                url: `/api/reading/${slug}/${chapter_slug}`,
                method: 'GET',
                success: function(response) {
                    if (response.status === 'success') {
                        const data = response.data;
                        const canViewFullContent = response.data.canViewFullContent;
                        console.log(data)
                        // Hiển thị nội dung chương
                        const content = document.createElement('div'); // Tạo thẻ tạm để xử lý nội dung
                        if (canViewFullContent) {
                            content.innerHTML = data.fullContent;
                        } else {
                            content.innerHTML = data.partialContent;
                            // Đảm bảo rằng phần tử với id 'purchase-chapter' tồn tại
                            const purchaseChapterElement = document.getElementById('purchase-chapter');
                            if (purchaseChapterElement) {
                                purchaseChapterElement.innerHTML = `
                                <div class="buy-chapter mt-4" id="purchase-chapter">
                                <p class="text-red-500">Bạn cần mua chương này để đọc tiếp phần còn lại.</p>
                                <a href="javascript:void(0);" class="purchase-chapter" data-title="{{ $chapter->title }}"
                                data-price="{{ $chapter->price }}"
                                data-url="{{ route('chapter.purchase', [$book->slug, $chapter->id]) }}"
                                onclick="confirmPurchase('{{ $chapter->title }}', '{{ $chapter->price }}', '{{ route('chapter.purchase', [$book->slug, $chapter->id]) }}')">
                                Mua chương với giá {{ $chapter->price }} coin
                                </a>
                                <br>
                                <a href="javascript:void(0);"
                                data-chapter-id="{{ $chapter->id }}"
                                data-chapter-title="{{ $chapter->title }}"
                                data-chapter-price="{{ $chapter->price }}"
                                class="btn btn-secondary mt-2 btn-add-to-cart"
                                style="background-color: #3490dc; color: white; font-weight: bold; padding: 0.5rem 1rem; border-radius: 1rem; border: none;">
                                Thêm vào giỏ hàng
                                </a>
                            </div>
                            `;
                            }
                        }


                        // Gán ID cho từng đoạn văn
                        Array.from(content.children).forEach((element, index) => {
                            const uniqueId = `bookmark-${index + 1}`; // Tạo ID duy nhất
                            element.id = uniqueId; // Gán ID trực tiếp vào phần tử
                        });

                        // Cập nhật nội dung chương với các ID đã gán
                        $('#chapter-content').html(content.innerHTML);

                        // Cập nhật độ dài nội dung chương
                        $('#chapter-word-count').text(data.wordCount);

                        // Sau khi nội dung chương được tải, gán sự kiện click cho từng đoạn văn
                        Array.from(document.querySelectorAll('#chapter-content > *')).forEach((
                            paragraph, index) => {
                            paragraph.addEventListener('click', function() {
                                if (window.innerWidth > 979) {
                                    const paragraphOffsetTop = paragraph
                                        .getBoundingClientRect().top + window.scrollY;
                                    const paragraphOffsetLeft = paragraph
                                        .getBoundingClientRect().left;
                                    const containerOffsetLeft = document.querySelector(
                                            '.reading-content').getBoundingClientRect()
                                        .left;
                                    const bookmarkWidth = saveBookmark.offsetWidth;

                                    // Tính toán vị trí của saveBookmark
                                    let bookmarkRight = containerOffsetLeft -
                                        paragraphOffsetLeft;

                                    // Kiểm tra nếu bookmark tràn ra ngoài màn hình thì điều chỉnh lại
                                    if (bookmarkRight + bookmarkWidth > window
                                        .innerWidth) {
                                        bookmarkRight = window.innerWidth -
                                            bookmarkWidth -
                                            10; // Dịch vào 10px nếu bị tràn
                                    }

                                    // Cập nhật vị trí của saveBookmark
                                    saveBookmark.style.height =
                                        `${paragraph.offsetHeight + 28}px`;
                                    saveBookmark.style.top = `${paragraphOffsetTop}px`;
                                    saveBookmark.style.right = `-15px`;
                                    saveBookmark.style.display = 'block';
                                } else {
                                    document.getElementById('bookmark_top').classList
                                        .toggle('on');
                                    document.getElementById('rd-side_icon').classList
                                        .toggle('show');
                                }

                                bookmarkData.line_id = index + 1;
                                bookmarkData.book_id = {{ $book->id }};
                                bookmarkData.chapter_id = {{ $chapter->id }};
                                bookmarkData.bookmark_id =
                                    `bookmark-${index + 1}`; // Lưu ID duy nhất cho bookmark
                            });
                        });
                        $(document).ready(function() {
                            // Iterate over each bookmark in the list
                            $("#bookmarks_list li").each(function() {
                                var linepr = $(this).data(
                                    "line"); // Get data-line value from the li
                                console.log(
                                    linepr
                                ); // Check if the value is being retrieved properly

                                if (linepr === undefined) {
                                    console.error(
                                        "data-line attribute not found for this item."
                                    );
                                    return;
                                }

                                // Find the corresponding paragraph based on the linepr
                                var element = $(".reading-content p#bookmark-" +
                                    linepr); // Select the element with the matching id

                                if (element.length > 0) {
                                    var preview = element
                                        .text(); // Get the text content of the element
                                    var shortText = preview.trim().substring(0, 30) +
                                        "..."; // Trim and shorten text if too long
                                    $(this).find(".pos_bookmark small").text(
                                        shortText
                                    ); // Update the small element with the short text
                                } else {
                                    console.log(
                                        "Không tìm thấy phần tử với id bookmark-" +
                                        linepr); // Log error if no element is found
                                }
                            });
                        });


                        // Define bookmarkData as an empty object initially
                        const bookmarkData = {};
                        // Lưu bookmark khi click vào save_bookmark
                        const saveBookmark = document.querySelector('.save_bookmark');
                        saveBookmark.addEventListener('click', function() {
                            if (!@json(Auth::check())) {
                                alert("Bạn phải đăng nhập để sử dụng bookmark");
                                return;
                            }

                            if (window.innerWidth > 979 && bookmarkData.line_id > 0) {
                                console.log('Dữ liệu được gửi:',
                                    bookmarkData); // Hiển thị dữ liệu bookmarkData

                                fetch('/chapter/bookmark', {
                                        method: 'POST',
                                        headers: {
                                            'Content-Type': 'application/json',
                                            'X-CSRF-TOKEN': document.querySelector(
                                                'meta[name="csrf-token"]').getAttribute(
                                                'content')
                                        },
                                        body: JSON.stringify(bookmarkData)
                                    })
                                    .then(response => response.json())
                                    .then(data => {
                                        if (data.status === 'success') {
                                            const bookmarkList = document.querySelector(
                                                'ul#bookmarks_list');
                                            const listItem = document.createElement('li');
                                            listItem.dataset.line = data.line_id;
                                            listItem.innerHTML = `
                            <span class="pos_bookmark">Đoạn thứ ${data.line_id}</span>
                            <span data-item="${data.bookmark_id}" class="del_bookmark remove_bookmark">
                                <i class="fas fa-times"></i>
                            </span>`;
                                            bookmarkList.appendChild(listItem);
                                            alert(
                                                `Bạn đã lưu bookmark thành công đoạn thứ ${data.line_id}`
                                            );
                                        } else {
                                            alert(data.message);
                                        }
                                    })
                                    .catch(error => console.error('Lỗi:', error));
                            }
                        });

                        // Xóa bookmark khi click vào icon xóa
                        document.querySelector('ul#bookmarks_list').addEventListener('click', function(
                            event) {
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
                                    .catch(error => console.error('Lỗi:', error));
                            }
                        });

                    } else {
                        $('#chapter-content').html(
                            '<p class="text-danger">Không thể tải nội dung chương.</p>');
                    }
                },

                error: function() {
                    $('#chapter-content').html(
                        '<p class="text-danger">Đã xảy ra lỗi khi tải nội dung chương.</p>');
                }
            });
        });



        function saveReadingHistory(storyId) {
            fetch('/reading-history', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({
                        story_id: storyId
                    })
                })
                .then(response => response.json())
                .then(data => {
                    console.log(data.message);
                });
        }
    </script>
    @include('story.partials.script')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const readButton = document.getElementById("read-chapter");
            const showpopupspeech = document.getElementById("show-popup-speech");
            const popup = document.getElementById("speech-settings");
            const closeButton = document.getElementById("close-popup");
            const voiceSelect = document.getElementById("voice-select");
            const rateRange = document.getElementById("rate-range");
            const pitchRange = document.getElementById("pitch-range");
            const filterInput = document.getElementById("filter-input");
            const rateValue = document.getElementById("rate-value");
            const cancelspeech = document.getElementById("cancel-speech");
            const chapterContent = document.getElementById("chapter-content").innerText;
            const synth = window.speechSynthesis;
            let utterance;

            // Hiển thị popup
            showpopupspeech.addEventListener("click", function() {
                popup.classList.toggle("hidden");
            });

            // Đóng popup
            closeButton.addEventListener("click", function() {
                popup.classList.add("hidden");
            });

            // Cập nhật tốc độ và độ cao
            rateRange.addEventListener("input", function() {
                rateValue.textContent = rateRange.value;
            });

            // Lọc ký tự
            function filterText(text, filterChars) {
                if (!filterChars) return text;
                const regex = new RegExp(`[${filterChars}]`, "g");
                return text.replace(regex, "");
            }

            // Lấy danh sách giọng đọc tiếng Việt
            function populateVoiceList() {
                const voices = synth.getVoices();
                voiceSelect.innerHTML = ""; // Xóa giọng cũ
                voices
                    .filter((voice) => voice.lang.startsWith("vi")) // Lọc giọng tiếng Việt
                    .forEach((voice, index) => {
                        const option = document.createElement("option");
                        option.value = index;
                        option.textContent = `${voice.name} (${voice.lang})`;
                        voiceSelect.appendChild(option);
                    });

                // Hiển thị thông báo nếu không có giọng tiếng Việt
                if (voiceSelect.options.length === 0) {
                    const option = document.createElement("option");
                    option.textContent = "Không tìm thấy giọng đọc tiếng Việt";
                    option.disabled = true;
                    voiceSelect.appendChild(option);
                }
            }

            populateVoiceList();
            synth.onvoiceschanged = populateVoiceList;
            cancelspeech.addEventListener("click", function() {
                synth.cancel();
            })
            // Bắt đầu đọc
            readButton.addEventListener("click", function() {
                // Dừng giọng đọc cũ nếu đang chạy
                if (synth.speaking) {
                    console.log("Dừng giọng đọc cũ...");
                    synth.cancel();
                }

                // Lọc nội dung và tạo giọng đọc
                const filteredText = filterText(chapterContent, filterInput.value);
                const voices = synth.getVoices().filter((voice) => voice.lang.startsWith("vi"));
                const selectedVoiceIndex = voiceSelect.selectedIndex;
                const selectedVoice = voices[selectedVoiceIndex] || voices[0];
                // console.log(chapterContent)
                utterance = new SpeechSynthesisUtterance(filteredText);
                utterance.voice = selectedVoice;
                utterance.lang = "vi-VN";
                utterance.rate = parseFloat(rateRange.value);

                // Sự kiện giọng đọc
                utterance.onstart = () => console.log("Bắt đầu đọc");
                utterance.onend = () => console.log("Đã đọc xong");
                utterance.onerror = (e) => console.error("Lỗi:", e.error);

                synth.speak(utterance);
            });
        });
        document.addEventListener('contextmenu', function(event) {
            event.preventDefault(); // Chặn chuột phải
            alert('Chuột phải đã bị vô hiệu hóa!');
        });

        document.addEventListener('keydown', function(event) {
            if (event.key === 'F12' || event.keyCode === 123) {
                event.preventDefault(); // Chặn F12
                // alert('Phím F12 đã bị vô hiệu hóa!');
            }
        });

        const detectDevTools = function() {
            const threshold = 160; // Kích thước DevTools
            const widthExceeded = window.outerWidth - window.innerWidth > threshold;
            const heightExceeded = window.outerHeight - window.innerHeight > threshold;
            if (widthExceeded || heightExceeded) {
                alert('Vui lòng đóng DevTools để tiếp tục!');
                window.location.reload(); // Tải lại trang
            }
        };

        setInterval(detectDevTools, 1000);
    </script>
@endsection
