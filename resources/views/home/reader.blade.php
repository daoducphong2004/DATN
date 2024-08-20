@extends('home.layout.master')

@section('content')
    <main id="mainpart" class="reading-page style-4 mt-5">
        <section id="rd-side_icon" class="none force-block-l">
            <a class="rd_sd-button_item rd_top-left" href=""><i class="fas fa-backward"></i></a>
            <a class="rd_sd-button_item" href=""><i class="fas fa-home"></i></a>
            <a id="rd-setting_icon" data-affect="#" class="rd_sd-button_item"><i class="fas fa-font"></i></a>
            <a id="rd-info_icon" data-affect="#rd_sidebar.chapters" class="rd_sd-button_item"><i
                    class="fas fa-info"></i></a>
            <a id="rd-bookmark_icon" data-affect="#rd_sidebar.bookmarks" class="rd_sd-button_item"><i
                    class="fas fa-bookmark"></i></a>
            <a class="rd_sd-button_item rd_top-right" href=""><i class="fas fa-forward"></i></a>
        </section>
        <section id="chapters" class="rd_sidebar rdtoggle">
            <main class="rdtoggle_body">
                <header class=" col- 4 rd_sidebar-header clear">
                    <a class="img" href=""
                        style="background: url('https://i.docln.net/lightnovel/covers/s15056-001147c0-398e-46da-a310-ac11a8836fcb-m.jpg') no-repeat"></a>
                    <div class="rd_sidebar-name">
                        <h5><a href="" class="link-underline link-underline-opacity-0">&quot;Cậu không thể hôn
                                được,...</a></h5>
                        <small><i class="fas fa-pen"></i>Sakuragi Sakura</small>
                        <small><i class="fas fa-paint-brush"></i>Chigusa Minori</small>
                    </div>
                </header>
                <ul id="chap_list" class="unstyled">
                    <li>
                        <a
                            href="/truyen/15056-kisu-nante-dekinai-deshoto-chouhatsu-suru-namaikina-osananajimi-wo-wakarasete-yattara-yosou-ijou-ni-dereta/c113038-minh-hoa">
                            <i class="fas fa-picture-o" aria-hidden="true" title="Có chứa ảnh"></i>
                            Minh họa
                        </a>
                    </li>
                </ul>
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
                    <li>Bạn phải đăng nhập để sử dụng bookmark</li>
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
                            <span data-color="#fff" data-id="0" style="background-color: #fff"></span>
                            <span data-color="#e6f0e6" data-id="1" style="background-color: #e6f0e6"></span>
                            <span data-color="#e3f5fa" data-id="2" style="background-color: #e3f5fa"></span>
                            <span data-color="#f6f4ec" data-id="3" style="background-color: #f6f4ec"></span>
                            <span data-color="#eae4d3" data-id="4" style="background-color: #eae4d3"></span>
                            <span data-color="#f5e9ef" data-id="5" style="background-color: #f5e9ef"></span>
                            <span data-color="#222222" data-id="6" style="background-color: #222222"></span>
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
                            <input class="set-slide_input" disabled value="16px" type="text">
                            <span class="set-bigger set-slide_button"><i class="fas fa-chevron-right"></i></span>
                        </div>
                    </div>
                    <div class="set-list set-margin clear">
                        <label class="font-bold">Bản lề</label>
                        <div class="set-slide set-input justify-center">
                            <span class="set-slide_button set-smaller"><i class="fas fa-chevron-left"></i></span>
                            <input class="set-slide_input" disabled value="20px" type="text">
                            <span class="set-bigger set-slide_button"><i class="fas fa-chevron-right"></i></span>
                        </div>
                    </div>
                    <div class="set-list set-text-align clear">
                        <label class="font-bold">Kiểu căn chỉnh</label>
                        <div class="set-input clear justify-center font-medium text-2xl flex flex-row gap-10">
                            <span data-align="text-left" class="p-1"><i class="fas fa-align-left"></i></span>
                            <span data-align="text-center" class="p-1"><i class="fas fa-align-center"></i></span>
                            <span data-align="text-right" class="p-1"><i class="fas fa-align-right"></i></span>
                            <span data-align="text-justify" class="p-1"><i class="fas fa-align-justify"></i></span>
                        </div>
                    </div>
                </main>
            </section>
            <div class="black-click"></div>
        </section>
        <div class="container">
            <div class="row">
                <div class="reading-content col-12 col-lg-10 offset-lg-1" style="word-wrap: break-word;">
                    <div id="bookmark_top" class="block d-lg-none"><i class="fas fa-bookmark"></i></div>
                    <span class="save_bookmark" style="position: absolute; top: 9999px; display: none"><i
                            class="fas fa-bookmark"></i></span>
                    <div class="title-top" style="padding-top: 20px">
                        <h2 class="title-item text-xl font-bold text-center">Vol 1</h2>
                        <h4 class="title-item text-base font-bold text-center">Ngoại truyện Bookwalker: Nếu cậu bảo
                            là hợp với tớ...</h4>
                        <h6 class="title-item font-bold text-center">
                            <a href="https://docln.net/truyen/15056-kisu-nante-dekinai-deshoto-chouhatsu-suru-namaikina-osananajimi-wo-wakarasete-yattara-yosou-ijou-ni-dereta/c121006-ngoai-truyen-bookwalker-neu-cau-bao-la-hop-voi-to#chapter-comments"
                                style="text-decoration: underline">11 Bình luận</a> -
                            Độ dài: 535 từ - Cập nhật:
                            <time class="topic-time timeago" title="19-10-2023 01:25:12"
                                datetime="2023-10-19T01:25:12+07:00"></time>
                        </h6>
                    </div>
                    <div style="text-align: center; margin: 20px auto -20px auto;">
                    </div>
                    <pre>
                        <div id="chapter-content" class="long-text no-select text-justify">
                            Nội dung
                        </div>
                    <section class="rd-basic_icon row">
                        <a href="" class="dark:text-black col text-center"><i class="fas fa-backward"></i></a>
                        <!-- Liên kết về trang chủ -->
                        <a href="" class="dark:text-black col text-center"><i class="fas fa-home"></i></a>
                        <a href="" class="dark:text-black col text-center" ><i class="fas fa-forward"></i></a>
                    </section>

                    </div>
                    <div class="col-12 col-lg-10 offset-lg-1">
                        <section id="chapter-comments"
                            class="basic-section dark:bg-[#1f1f1f] dark:text-white dark:border dark:border-[#1f1f1f]">
                            <header class="sect-header tab-list dark:bg-[#2a2a2a] dark:border-[#2a2a2a]">
                                <span class="sect-title tab-title" data-tab-index="1">Bình luận <span
                                        class="comments-count">(11)</span></span>
                            </header>
                            <main id="fbcmt_root" class="sect-body">
                                <span style="padding: 10px; display: inline-block;">Báo cáo bình luận không phù hợp ở <a
                                        href="/thao-luan/619-bao-cao-binh-luan" style="color: blue">đây</a></span>
                                <div id="tab-content-1" class="tab-content clear">
                                    <section class="ln-comment">
                                        <header>
                                            <h3 class="text-lg font-bold dark:text-white">11 Bình luận </h3>

                                        </header>
                                        <main class="ln-comment-body">
                                            <div class="ln-comment_sign-in long-text">
                                                Bạn phải <a href="/login">đăng nhập</a> hoặc <a href="/register">tạo tài
                                                    khoản</a> để bình luận.
                                            </div>
                                            <!-- start comment -->
                                            <div class="ln-comment-group">
                                                <div id="ln-comment-2343587" class="ln-comment-item mt-3 clear"
                                                    data-comment="2343587" data-parent="2343587">
                                                    <div class="row">
                                                        <div class="col-2 text-center">
                                                            <img src="https://i2.docln.net/ln/users/avatars/u173017-ef4b6219-34db-4bb7-9061-cf3c9471f8aa.jpg"
                                                                class="w-full rounded-full rounded-circle" width="50px">

                                                        </div>
                                                        <div class="col-2">
                                                            <a class="font-bold link-underline link-underline-opacity-0 text-secondary"
                                                                href="/thanh-vien/tên người dung">Tên Người dùng</a>
                                                        </div>

                                                        <div class=" col-md-8">
                                                            <ul class="list-chapters at-series">
                                                                <li class>
                                                                    <div class="chapter-name">
                                                                        <span>nội dung comment</span>
                                                                    </div>
                                                                    <div class="chapter-time">
                                                                        <time>
                                                                            16-01-2024 11:59:43
                                                                        </time>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </main>
                                        <script>
                                            var token = 'praZ05kQFfv2gooLYZSboYjepMSfK0WGVAbDjrqc';
                                            var comment_type = 'chapter';
                                            var comment_typeid = '121006';
                                        </script>
                                    </section>
                                </div>
                            </main>
                        </section>
                    </div>
                </div>
            </div>
        </main>
        <script>
            token = 'praZ05kQFfv2gooLYZSboYjepMSfK0WGVAbDjrqc';

            function turnoffall() {
                $(".rdtoggle").removeClass("on");
                $(".rdtoggle_body").removeClass("animation fade-in-left-big fade-in-down");
                $("html").removeClass("overflow-hiden");
            }

            function rdtoggle(classicon, effect) {
                if ($(classicon).hasClass("on")) {
                    turnoffall();
                } else {
                    turnoffall();
                    $(classicon).addClass("on");
                    $("html").addClass("overflow-hiden");
                    $(classicon + " .rdtoggle_body").addClass("animation " + effect);
                }
            };

            $("#rd-setting_icon").on('click', function() {
                rdtoggle("#setting", "fade-in-down");
            });

            $("#rd-info_icon").on('click', function() {
                rdtoggle("#chapters", "fade-in-left-big");
            });

            $("#rd-bookmark_icon").on('click', function() {
                rdtoggle("#bookmarks", "fade-in-left-big");
            });

            $(".black-click").on('click', function() {
                turnoffall();
                $("#rd-side_icon").hide();
                $("#bookmark_top").removeClass("on");
            });

            var bgcolor = Cookies.get('color') || (Cookies.get('night_mode') ? 6 : 4);
            var fontfamily = Cookies.get('fontfamily') || '';
            var fontsize = Cookies.get('font') || 18;
            var margin = Cookies.get('margin') || 0;
            var textAlign = Cookies.get('textAlign') || 'text-justify';

            function setcolor(alter = true) {
                var switcher = $(".set-color .set-input span").eq(bgcolor);
                switcher.addClass("current");

                if (alter) {
                    for (var i = 0; i < $(".set-color .set-input span").length; i++) {
                        $("#mainpart").removeClass('style-' + i);
                        $("#mainpart").removeClass('dark');
                    }
                    $("#mainpart").addClass('style-' + bgcolor);

                    // Manually hardcoded to dark
                    if (bgcolor == 6) {
                        $("#mainpart").addClass('dark');
                    }
                }
            }

            // This creates unsmooth experience so we only use it for select box
            function setfontfamily() {
                $('.set-font-family select option').filter(function() {
                    return fontfamily.split(',')[0].indexOf($(this).text()) != -1;
                }).attr('selected', true);
            }

            function setfontstyle(alter = true) {
                $(".set-font input.set-slide_input").val(fontsize + "px");

                if (alter) {
                    $("div#chapter-content").css("font-size", fontsize + "px");

                    var lineheight = +fontsize + 10;
                    $("#chapter-content").css("line-height", lineheight + "px");
                }
            }

            function setmargin() {
                $(".set-margin input.set-slide_input").val(margin + "px");
                $("#chapter-content").css({
                    'padding-left': margin + "px",
                    'padding-right': margin + "px"
                });
            }

            function setTextAlign(alter = true) {
                var switcher = $(".set-text-align .set-input span[data-align='" + textAlign + "']");
                switcher.addClass("current");

                if (alter) {
                    $(".set-text-align .set-input span").each(function() {
                        $("#chapter-content").removeClass($(this).attr('data-align'));
                    });

                    $("#chapter-content").addClass(textAlign);
                }
            }

            setcolor(false);
            setfontfamily();
            setfontstyle(false);
            setmargin();
            setTextAlign(true);

            //1px = 0.0625rem;
            //16px = 1rem (default);

            $(".set-color .set-input span").click(function() {
                bgcolor = $(this).data("id");
                $(".set-color .set-input span").removeClass("current");
                setcolor();
                Cookies.set('color', bgcolor, {
                    expires: 365
                });
            });

            $('.set-font-family select').on('change', function() {
                fontfamily = "'" + $('option:selected', this).text() + "', " + '\'Times New Roman\', Georgia, serif';

                $('div#chapter-content').css('font-family', fontfamily);

                Cookies.set('fontfamily', fontfamily, {
                    expires: 365
                });
            });

            $(".set-font .set-slide_button.set-smaller").click(function() {
                fontsize = fontsize - 2;
                if (fontsize < 0) fontsize = 0;
                setfontstyle();
                Cookies.set('font', fontsize, {
                    expires: 365
                });
            });

            $(".set-font .set-slide_button.set-bigger").click(function() {
                fontsize = +fontsize + 2;
                setfontstyle();
                Cookies.set('font', fontsize, {
                    expires: 365
                });
            });

            $(".set-margin .set-slide_button.set-smaller").click(function() {
                margin = margin - 20;
                if (margin < 0) margin = 0;
                setmargin();
                Cookies.set('margin', margin, {
                    expires: 365
                });
            });

            $(".set-margin .set-slide_button.set-bigger").click(function() {
                margin = +margin + 20;
                setmargin();
                Cookies.set('margin', margin, {
                    expires: 365
                });
            });

            $(".set-text-align .set-input span").click(function() {
                textAlign = $(this).data("align");
                $(".set-text-align .set-input span").removeClass("current");
                setTextAlign();
                Cookies.set('textAlign', textAlign, {
                    expires: 365
                });
            });

            $("#bookmarks_list li").each(function() {
                var linepr = $(this).data("line");
                var preview = $(".reading-content p#" + linepr).text();

                var shortText = preview.trim().substring(0, 30) + "...";
                $(this).find(".pos_bookmark small").text(shortText);
            });

            $('div#chapter-content').html(
                $('div#chapter-content').html().replace(
                    /\[note(\d+)\]/gi,
                    '<span id="anchor-note$1" class="note-icon none-print inline note-tooltip" data-tooltip-content="#note$1 .note-content" data-note-id="note$1"><i class="fas fa-sticky-note"></i></span><a id="anchor-note$1" class="inline-print none" href="#note$1">[note]</a>'
                )
            )

            tippy('.note-tooltip', {
                delay: 50,
                maxWidth: 240,
                interactive: true,
                content(ref) {
                    const selector = ref.getAttribute('data-tooltip-content');
                    const template = document.querySelector(selector);
                    return template ? template.innerHTML : 'Đặt sai ID của note';
                }
            });

            isLoggedIn = 0;
            series_id = parseInt('15056');
            chapter_id = parseInt('121006');

            readingObject = {
                series_id: series_id,
                series_title: '&quot;Cậu không thể hôn được, phải chứ?&quot; Khi tôi khiến cô bạn thuở nhỏ luôn trêu chọc mình hiểu chuyện, cô ấy đột nhiên trở nên dễ thương hơn nhiều',
                series_url: $('i.fa-home').first().parent().attr('href'),
                series_cover: $('.rd_sidebar-header a.img').css('background-image'),
                chapter_title: $('ul.sub-chap_list li.current a').text().trim(),
                chapter_url: $('ul.sub-chap_list li.current a').attr('href'),
                book_title: $('ul#chap_list > li.current a').text(),
                book_url: $('ul#chap_list > li.current a').attr('href'),
                read_time: +new Date() / 1000 | 0,
            };
        </script>
@endsection
