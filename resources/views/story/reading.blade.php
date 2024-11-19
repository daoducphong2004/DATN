@extends('story.layout.readingmaster')
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
                        <a href="#chapter-comments" style="text-decoration: underline">Sau sẽ làm Bình luận</a> -
                        Độ dài: {{ str_word_count($chapter->content) }} từ - Cập nhật:
                        <time class="topic-time timeago" title="{{ $chapter->updated_at->format('d-m-Y H:i:s') }}"
                            datetime="{{ $chapter->updated_at->toIso8601String() }}"></time>
                    </h6>
                </div>

                <div style="text-align: center; margin: 20px auto -20px auto;">
                    <!-- Bạn có thể thêm nội dung quảng cáo hoặc hình ảnh ở đây -->
                </div>

                <div id="chapter-content" class="long-text no-select text-justify"
                    style="font-family:'Nunito', 'Times New Roman', Georgia, serif;">
                    @if ($canViewFullContent)
                        {!! $fullContent !!}
                    @else
                        {!! $partialContent !!}
                        <div class="buy-chapter mt-4">
                            <p class="text-red-500">Bạn cần mua chương này để đọc tiếp phần còn lại.</p>
                            <a href="javascript:void(0);" class="purchase-chapter" data-title="{{ $chapter->title }}"
                                data-price="{{ $chapter->price }}"
                                data-url="{{ route('chapter.purchase', [$book->slug, $chapter->id]) }}">
                                Mua chương với giá {{ $chapter->price }} coin
                            </a>
                            <br>
                            <a href="javascript:void(0);"
                                onclick="addToCart('{{ $chapter->id }}', '{{ $chapter->title }}', '{{ $chapter->price }}')"
                                class="btn btn-secondary mt-2"
                                style="background-color: #3490dc; color: white; font-weight: bold; padding: 0.5rem 1rem; border-radius: 1rem; border: none;">
                                Thêm vào giỏ hàng
                            </a>
                        </div>
                    @endif
                </div><!-- Nút Đọc Nội Dung -->

                <div style="text-align: center; margin: 20px auto 10px auto;">
                    <!-- Bạn có thể thêm nội dung quảng cáo hoặc hình ảnh ở đây -->
                </div>
                <!-- Thông báo -->
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


                <!--the code style is important to keep this comment section be out of the effect of user reading's setting-->
            </div>
            <div class="col-12 col-lg-10 offset-lg-1">
                @include('story.layout.reading.comment')
            </div>
        </div>
        <div id="purchaseModal" class="purchase-modal" style="display:none;">
            <div class="purchase-modal-content">
                <span class="close" onclick="closeModal()">&times;</span>
                <h2 id="modalTitle">Xác nhận mua chương</h2>
                <p id="modalContent">Bạn có chắc chắn muốn mua chương này với giá <span id="chapterPrice"></span> coin?</p>
                <a href="#" id="confirmPurchaseButton" class="btn btn-primary">Xác nhận</a>
                <div style="display: block; width: 10px;"></div>
                <button onclick="closeModal()" class="btn btn-secondary">Hủy</button>
            </div>
        </div>
    </div>
    </main>
    <script>
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
    document.addEventListener("DOMContentLoaded", function () {
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
    showpopupspeech.addEventListener("click", function () {
        popup.classList.toggle("hidden");
    });

    // Đóng popup
    closeButton.addEventListener("click", function () {
        popup.classList.add("hidden");
    });

    // Cập nhật tốc độ và độ cao
    rateRange.addEventListener("input", function () {
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
    cancelspeech.addEventListener("click", function(){
        synth.cancel();
    })
    // Bắt đầu đọc
    readButton.addEventListener("click", function () {
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

    </script>
@endsection
