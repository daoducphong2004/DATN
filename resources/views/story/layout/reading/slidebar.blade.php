<body>

    <style>
        body {
            background: inherit;
        }

        #footer {
            display: none;
        }
    </style>


    <main id="mainpart" class="reading-page style-4">
        <section id="rd-side_icon" class="none force-block-l">

<<<<<<< HEAD
            <a class="rd_sd-button_item rd_top-left disabled"><i class="fas fa-backward"></i></a>

            <a class="rd_sd-button_item" href="/sang-tac/19112-sau-khi-bi-the-gioi-bo-roi-toi-nhat-duoc-mot-co-gai"><i
                    class="fas fa-home"></i></a>
=======
            <a href="{{ route('truyen.chuong', ['slug' => $book->slug, 'chapter_slug' => $chapter->previous()->slug ?? '#']) }}"
                class="rd_sd-button_item rd_top-left {{ $chapter->previous() ? '' : 'disabled' }}">
                <i class="fas fa-backward"></i>
            </a>

            <a class="rd_sd-button_item" href="{{ route('truyen.truyen', $book->slug) }}"><i class="fas fa-home"></i></a>
>>>>>>> b679f95696c8e4e70a5590bd1cb95bde079b5d70
            <a id="rd-setting_icon" data-affect="#" class="rd_sd-button_item"><i class="fas fa-font"></i></a>
            <a id="rd-info_icon" data-affect="#rd_sidebar.chapters" class="rd_sd-button_item"><i
                    class="fas fa-info"></i></a>
            <a id="rd-bookmark_icon" data-affect="#rd_sidebar.bookmarks" class="rd_sd-button_item"><i
                    class="fas fa-bookmark"></i></a>


<<<<<<< HEAD
            <a class="rd_sd-button_item rd_top-right"
                href="/sang-tac/19112-sau-khi-bi-the-gioi-bo-roi-toi-nhat-duoc-mot-co-gai/c142239-chuong-02-noi-co-nhieu-quy-nhat-la-nhan-gian"><i
                    class="fas fa-forward"></i></a>
=======
            <a href="{{ route('truyen.chuong', ['slug' => $book->slug, 'chapter_slug' => $chapter->next()->slug ?? '#']) }}"
                class="rd_sd-button_item rd_top-right {{ $chapter->next() ? '' : 'disabled' }}">
                <i class="fas fa-forward"></i>
            </a>
>>>>>>> b679f95696c8e4e70a5590bd1cb95bde079b5d70
        </section>

        <section id="chapters" class="rd_sidebar rdtoggle">
            <main class="rdtoggle_body">
                <header class="rd_sidebar-header clear">
                    <a class="img"
                        href="/sang-tac/19112-sau-khi-bi-the-gioi-bo-roi-toi-nhat-duoc-mot-co-gai/c142162-chuong-01"
<<<<<<< HEAD
                        style="background: url('https://i2.docln.net/ln/series/covers/s19112-171eb711-f51a-49e7-b13c-44d2da86f377.jpg') no-repeat"></a>
                    <div class="rd_sidebar-name">
                        <h5><a href="/sang-tac/19112-sau-khi-bi-the-gioi-bo-roi-toi-nhat-duoc-mot-co-gai">Sau khi bị thế
                                giới bỏ rơ...</a></h5>
                        <small><i class="fas fa-pen"></i>yukki</small>
                        <small><i class="fas fa-paint-brush"></i>Al</small>
=======
                        style="background: url('{{ asset(Storage::url($book->book_path)) }}') no-repeat"></a>
                    <div class="rd_sidebar-name">
                        <h5><a href="{{ route('truyen.truyen', $book->slug) }}">{{ $book->title }}</a></h5>
                        <small><i class="fas fa-pen"></i>{{ $book->author }}</small>
                        <small><i class="fas fa-paint-brush"></i>{{ $book->painter }}</small>
>>>>>>> b679f95696c8e4e70a5590bd1cb95bde079b5d70
                    </div>
                </header>

                <ul id="chap_list" class="unstyled">
<<<<<<< HEAD
                    <li class="current"><a
                            href="/sang-tac/19112-sau-khi-bi-the-gioi-bo-roi-toi-nhat-duoc-mot-co-gai/t25920-tap-01">Tập
                            01</a></li>
                    <ul class="sub-chap_list unstyled">
                        <li class="current">
                            <a
                                href="/sang-tac/19112-sau-khi-bi-the-gioi-bo-roi-toi-nhat-duoc-mot-co-gai/c142162-chuong-01">
                                Chương 01: Bi kịch
                            </a>
                        </li>
                        <li>
                            <a
                                href="/sang-tac/19112-sau-khi-bi-the-gioi-bo-roi-toi-nhat-duoc-mot-co-gai/c142239-chuong-02-noi-co-nhieu-quy-nhat-la-nhan-gian">
                                Chương 02: nơi có nhiều quỷ nhất là nhân gian.
                            </a>
                        </li>
                        <li>
                            <a
                                href="/sang-tac/19112-sau-khi-bi-the-gioi-bo-roi-toi-nhat-duoc-mot-co-gai/c142256-chuong-03-dong-cam">
                                Chương 03: Đồng cảm
                            </a>
                        </li>
                    </ul>


                </ul>
=======
                    @foreach ($book->episodes as $item)
                        <li class="@if ($episode->id == $item->id) current @endif">
                            <a href="{{ route('episode.show', $item->slug) }}">{{ $item->title }}</a>
                        </li>
                        <!-- Hiển thị các chapter nếu đây là tập truyện hiện tại -->
                        @if ($episode->id == $item->id)
                            <ul class="sub-chap_list unstyled">
                                @foreach ($chapters as $chap)
                                    <li class="@if ($chapter->id === $chap->id) current @endif">
                                        <a href="{{ route('truyen.chuong', [$book->slug, $chap->slug]) }}">
                                            {{ $chap->title }} chapter:{{ $chapter->id }} và {{ $chap->id }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    @endforeach
                </ul>


>>>>>>> b679f95696c8e4e70a5590bd1cb95bde079b5d70
            </main>
            <div class="black-click"></div>
        </section>

        <section id="bookmarks" class="rd_sidebar rdtoggle">
            <main class="rdtoggle_body">
                <div class="rd_sidebar-header">
                    <h2 class="rd_s-name"><i class="fas fa-bookmark"></i><a href="/bookmark" style="color: white;">
                            Bookmarks</a></h2>
                </div>
                <ul id="bookmarks_list" class="unstyled">
                    <li>Bạn chưa lưu lại bookmark</li>
                </ul>
            </main>
            <div class="black-click"></div>
        </section>

        <section id="setting" class="rdtoggle">
            <section class="re_set-in basic-section clear rdtoggle_body">
                <header class="sect-header"><span class="sect-title">Tùy chỉnh</span></header>
                <main class="sect-body">
                    <div class="set-list set-color clear">
                        <label class="font-bold">Màu nền</label>
                        <div class="set-input clear justify-center">
                            <span data-color="#ffffff" data-id="0" style="background-color: #ffffff"></span>
                            <span data-color="#e6f0e6" data-id="1" style="background-color: #e6f0e6"></span>
                            <span data-color="#e3f5fa" data-id="2" style="background-color: #e3f5fa"></span>
                            <span data-color="#f6f4ec" data-id="3" style="background-color: #f6f4ec"></span>
                            <span data-color="#eae4d3" data-id="4" style="background-color: #eae4d3"></span>
                            <span data-color="#f5e9ef" data-id="5" style="background-color: #f5e9ef"></span>
                            <span data-color="#222222" data-id="6" style="background-color: #222222"></span>
                            <span data-color="#000000" data-id="7" style="background-color: #000000"></span>
                        </div>
                    </div>
                    <div class="set-list set-font-family clear">
                        <label class="font-bold">Font chữ</label>
                        <div class="set-slide set-input justify-center">
                            <select>
                                <option>Times New Roman</option>
                                <option>Merriweather</option>
                                <option>Lora</option>
                                <option>Roboto</option>
                                <option>Noto Sans</option>
                                <option>Nunito</option>
                            </select>
                        </div>
                    </div>
                    <div class="set-list set-font clear">
                        <label class="font-bold">Kích cỡ chữ</label>
                        <div class="set-slide set-input justify-center">
                            <span class="set-slide_button set-smaller"><i class="fas fa-chevron-left"></i></span>
                            <input class="set-slide_input" disabled="" value="16px" type="text">
                            <span class="set-bigger set-slide_button"><i class="fas fa-chevron-right"></i></span>
                        </div>
                    </div>
                    <div class="set-list set-margin clear">
                        <label class="font-bold">Bản lề</label>
                        <div class="set-slide set-input justify-center">
                            <span class="set-slide_button set-smaller"><i class="fas fa-chevron-left"></i></span>
                            <input class="set-slide_input" disabled="" value="20px" type="text">
                            <span class="set-bigger set-slide_button"><i class="fas fa-chevron-right"></i></span>
                        </div>
                    </div>
<<<<<<< HEAD
                    <div class="set-list set-text-align clear">
                        <label class="font-bold">Kiểu căn chỉnh</label>
                        <div class="set-input clear justify-center font-medium text-2xl flex flex-row gap-10">
                            <span data-align="text-left" class="p-1"><i class="fas fa-align-left"></i></span>
                            <span data-align="text-center" class="p-1"><i class="fas fa-align-center"></i></span>
                            <span data-align="text-right" class="p-1"><i class="fas fa-align-right"></i></span>
                            <span data-align="text-justify" class="p-1"><i
                                    class="fas fa-align-justify"></i></span>
                        </div>
                    </div>
=======
                    {{-- <div class="set-list set-text-align clear">
                    <label class="font-bold">Kiểu căn chỉnh</label>
                    <div class="set-input clear justify-center font-medium text-2xl flex flex-row gap-10">
                        <span data-align="text-left" class="p-1"><i class="fas fa-align-left"></i></span>
                        <span data-align="text-center" class="p-1"><i class="fas fa-align-center"></i></span>
                        <span data-align="text-right" class="p-1"><i class="fas fa-align-right"></i></span>
                        <span data-align="text-justify" class="p-1"><i class="fas fa-align-justify"></i></span>
                    </div>
                </div> --}}
>>>>>>> b679f95696c8e4e70a5590bd1cb95bde079b5d70
                </main>
            </section>
            <div class="black-click"></div>
        </section>
