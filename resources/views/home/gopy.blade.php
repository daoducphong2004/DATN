@extends('home.layout.master')
@section('title')
    Trang Góp ý và báo lỗi - Cổng Light Novel - Đọc Light Novel
@endsection
@section('content')
    <div class="page-top-group  at-index ">
        @include('partials.banner')
    </div>

    <main id="mainpart" class="custome-page">
        <!--style="background: url('img/background/bg_yuudachi.jpg') no-repeat fixed 70px center"-->
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="page-breadcrumb">
                        <span class="breadcrum-level"><a href="https://docln.net"><i class="fas fa-home"></i></a></span>
                        <span class="next-icon"><i class="fas fa-chevron-right"></i></span>
                        <span class="breadcrum-level"><a href="https://docln.net/thao-luan">Thảo luận</a></span>
                    </div>

                </div>
            </div>
            <section class="page-content basic-section">
                <header class="sect-header">
                    <span class="sect-title"><a href="/thao-luan/1-mo-trang-thao-luan-gop-y-va-bao-loi">Góp ý và báo
                            lỗi</a></span>
                </header>
                <main class="sect-body">
                    <div class="row">
                        <div class="col-8">
                            <div class="page-author group-mem">
                                <div class="author_ava">
                                    <img
                                        src="https://3.bp.blogspot.com/-Yk-cAlYNDXg/WCdtQWo7LCI/AAAAAAAAv8Y/EJxI3Jh3w_Y/w100/ava2.png">
                                </div>
                                <div class="author-info">
                                    <div class="author_name"><a href="/thanh-vien/3">thonglinh90</a></div>
                                    <div class="author_role"><span>Members</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <time class="topic-time timeago" title="30/01/2017 19:42:54"
                                datetime="2017-01-30T19:42:54+07:00">8 năm</time>
                        </div>
                    </div>
                    <div class="forum-page-content long-text">
                        <p>Hiện Cổng Light Novel mở thêm một trang "Thảo luận" nơi các bạn tụ họp để cùng bạn luận chém gió
                            những Light Novel các bạn yêu thích.</p>

                        <p>Do mới cập nhật nên có thể có lỗi xảy ra nên mời các bạn vào đây để báo lại với bọn mình sớm nhất
                            có thể. Các bạn sẽ dùng acc của Cổng Light Novel để "tạo trang" vào "bình luận".</p>

                        <p>Cảm ơn các bạn đã quan tâm.</p>
                    </div>

                </main>
            </section>

            <section class="basic-section">
                <main>
                    <section class="ln-comment">
                        <header>
                            <h3 class="text-lg font-bold dark:text-white">5457 Bình luận </h3>
                            <!-- <i id="refresh_comment" class="fas fa-refresh" aria-hidden="true" style="margin-left: 10px; font-size: 18px"></i></h3> -->
                        </header>

                        <main class="ln-comment-body">
                            <div id="ln-comment-submit" class="ln-comment-form clear">
                                <form class="comment_form">
                                    <textarea class="comment_content" id="mce_0" style="display: none;" aria-hidden="true"></textarea>
                                    <div role="application" class="tox tox-tinymce"
                                        style="visibility: hidden; height: 200px;">
                                        <div class="tox-editor-container">
                                            <div data-alloy-vertical-dir="toptobottom" class="tox-editor-header">
                                                <div role="group" class="tox-toolbar-overlord">
                                                    <div role="group" class="tox-toolbar__primary">
                                                        <div title="" role="toolbar" data-alloy-tabstop="true"
                                                            tabindex="-1" class="tox-toolbar__group"><button
                                                                aria-label="Emoticons" title="Emoticons" type="button"
                                                                tabindex="-1" class="tox-tbtn"><span
                                                                    class="tox-icon tox-tbtn__icon-wrap"><svg width="24"
                                                                        height="24">
                                                                        <path
                                                                            d="M9 11c.6 0 1-.4 1-1s-.4-1-1-1a1 1 0 0 0-1 1c0 .6.4 1 1 1zm6 0c.6 0 1-.4 1-1s-.4-1-1-1a1 1 0 0 0-1 1c0 .6.4 1 1 1zm-3 5.5c2.1 0 4-1.5 4.4-3.5H7.6c.5 2 2.3 3.5 4.4 3.5zM12 4a8 8 0 1 0 0 16 8 8 0 0 0 0-16zm0 14.5a6.5 6.5 0 1 1 0-13 6.5 6.5 0 0 1 0 13z"
                                                                            fill-rule="nonzero"></path>
                                                                    </svg></span></button><button aria-label="Undo"
                                                                title="Undo" type="button" tabindex="-1"
                                                                class="tox-tbtn tox-tbtn--disabled"
                                                                aria-disabled="true"><span
                                                                    class="tox-icon tox-tbtn__icon-wrap"><svg width="24"
                                                                        height="24">
                                                                        <path
                                                                            d="M6.4 8H12c3.7 0 6.2 2 6.8 5.1.6 2.7-.4 5.6-2.3 6.8a1 1 0 0 1-1-1.8c1.1-.6 1.8-2.7 1.4-4.6-.5-2.1-2.1-3.5-4.9-3.5H6.4l3.3 3.3a1 1 0 1 1-1.4 1.4l-5-5a1 1 0 0 1 0-1.4l5-5a1 1 0 0 1 1.4 1.4L6.4 8z"
                                                                            fill-rule="nonzero"></path>
                                                                    </svg></span></button><button aria-label="Redo"
                                                                title="Redo" type="button" tabindex="-1"
                                                                class="tox-tbtn tox-tbtn--disabled"
                                                                aria-disabled="true"><span
                                                                    class="tox-icon tox-tbtn__icon-wrap"><svg width="24"
                                                                        height="24">
                                                                        <path
                                                                            d="M17.6 10H12c-2.8 0-4.4 1.4-4.9 3.5-.4 2 .3 4 1.4 4.6a1 1 0 1 1-1 1.8c-2-1.2-2.9-4.1-2.3-6.8.6-3 3-5.1 6.8-5.1h5.6l-3.3-3.3a1 1 0 1 1 1.4-1.4l5 5a1 1 0 0 1 0 1.4l-5 5a1 1 0 0 1-1.4-1.4l3.3-3.3z"
                                                                            fill-rule="nonzero"></path>
                                                                    </svg></span></button></div>
                                                        <div title="" role="toolbar" data-alloy-tabstop="true"
                                                            tabindex="-1" class="tox-toolbar__group"><button
                                                                aria-label="Bold" title="Bold" type="button"
                                                                tabindex="-1" class="tox-tbtn"
                                                                aria-pressed="false"><span
                                                                    class="tox-icon tox-tbtn__icon-wrap"><svg
                                                                        width="24" height="24">
                                                                        <path
                                                                            d="M7.8 19c-.3 0-.5 0-.6-.2l-.2-.5V5.7c0-.2 0-.4.2-.5l.6-.2h5c1.5 0 2.7.3 3.5 1 .7.6 1.1 1.4 1.1 2.5a3 3 0 0 1-.6 1.9c-.4.6-1 1-1.6 1.2.4.1.9.3 1.3.6s.8.7 1 1.2c.4.4.5 1 .5 1.6 0 1.3-.4 2.3-1.3 3-.8.7-2.1 1-3.8 1H7.8zm5-8.3c.6 0 1.2-.1 1.6-.5.4-.3.6-.7.6-1.3 0-1.1-.8-1.7-2.3-1.7H9.3v3.5h3.4zm.5 6c.7 0 1.3-.1 1.7-.4.4-.4.6-.9.6-1.5s-.2-1-.7-1.4c-.4-.3-1-.4-2-.4H9.4v3.8h4z"
                                                                            fill-rule="evenodd"></path>
                                                                    </svg></span></button><button aria-label="Italic"
                                                                title="Italic" type="button" tabindex="-1"
                                                                class="tox-tbtn" aria-pressed="false"><span
                                                                    class="tox-icon tox-tbtn__icon-wrap"><svg
                                                                        width="24" height="24">
                                                                        <path
                                                                            d="M16.7 4.7l-.1.9h-.3c-.6 0-1 0-1.4.3-.3.3-.4.6-.5 1.1l-2.1 9.8v.6c0 .5.4.8 1.4.8h.2l-.2.8H8l.2-.8h.2c1.1 0 1.8-.5 2-1.5l2-9.8.1-.5c0-.6-.4-.8-1.4-.8h-.3l.2-.9h5.8z"
                                                                            fill-rule="evenodd"></path>
                                                                    </svg></span></button><button aria-label="Underline"
                                                                title="Underline" type="button" tabindex="-1"
                                                                class="tox-tbtn" aria-pressed="false"><span
                                                                    class="tox-icon tox-tbtn__icon-wrap"><svg
                                                                        width="24" height="24">
                                                                        <path
                                                                            d="M16 5c.6 0 1 .4 1 1v5.5a4 4 0 0 1-.4 1.8l-1 1.4a5.3 5.3 0 0 1-5.5 1 5 5 0 0 1-1.6-1c-.5-.4-.8-.9-1.1-1.4a4 4 0 0 1-.4-1.8V6c0-.6.4-1 1-1s1 .4 1 1v5.5c0 .3 0 .6.2 1l.6.7a3.3 3.3 0 0 0 2.2.8 3.4 3.4 0 0 0 2.2-.8c.3-.2.4-.5.6-.8l.2-.9V6c0-.6.4-1 1-1zM8 17h8c.6 0 1 .4 1 1s-.4 1-1 1H8a1 1 0 0 1 0-2z"
                                                                            fill-rule="evenodd"></path>
                                                                    </svg></span></button><button
                                                                aria-label="Strikethrough" title="Strikethrough"
                                                                type="button" tabindex="-1" class="tox-tbtn"
                                                                aria-pressed="false"><span
                                                                    class="tox-icon tox-tbtn__icon-wrap"><svg
                                                                        width="24" height="24">
                                                                        <g fill-rule="evenodd">
                                                                            <path
                                                                                d="M15.6 8.5c-.5-.7-1-1.1-1.3-1.3-.6-.4-1.3-.6-2-.6-2.7 0-2.8 1.7-2.8 2.1 0 1.6 1.8 2 3.2 2.3 4.4.9 4.6 2.8 4.6 3.9 0 1.4-.7 4.1-5 4.1A6.2 6.2 0 0 1 7 16.4l1.5-1.1c.4.6 1.6 2 3.7 2 1.6 0 2.5-.4 3-1.2.4-.8.3-2-.8-2.6-.7-.4-1.6-.7-2.9-1-1-.2-3.9-.8-3.9-3.6C7.6 6 10.3 5 12.4 5c2.9 0 4.2 1.6 4.7 2.4l-1.5 1.1z">
                                                                            </path>
                                                                            <path
                                                                                d="M5 11h14a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2z"
                                                                                fill-rule="nonzero"></path>
                                                                        </g>
                                                                    </svg></span></button>
                                                            <div aria-pressed="false" aria-label="Text color"
                                                                title="Text color" role="button" aria-haspopup="true"
                                                                unselectable="on" tabindex="-1" class="tox-split-button"
                                                                aria-expanded="false"
                                                                aria-describedby="aria_5882856671451725173109808"
                                                                style="user-select: none;"><span role="presentation"
                                                                    tabindex="-1" class="tox-tbtn"><span
                                                                        class="tox-icon tox-tbtn__icon-wrap"><svg
                                                                            width="24" height="24">
                                                                            <g fill-rule="evenodd">
                                                                                <path id="tox-icon-text-color__color"
                                                                                    d="M3 18h18v3H3z"></path>
                                                                                <path
                                                                                    d="M8.7 16h-.8a.5.5 0 0 1-.5-.6l2.7-9c.1-.3.3-.4.5-.4h2.8c.2 0 .4.1.5.4l2.7 9a.5.5 0 0 1-.5.6h-.8a.5.5 0 0 1-.4-.4l-.7-2.2c0-.3-.3-.4-.5-.4h-3.4c-.2 0-.4.1-.5.4l-.7 2.2c0 .3-.2.4-.4.4zm2.6-7.6l-.6 2a.5.5 0 0 0 .5.6h1.6a.5.5 0 0 0 .5-.6l-.6-2c0-.3-.3-.4-.5-.4h-.4c-.2 0-.4.1-.5.4z">
                                                                                </path>
                                                                            </g>
                                                                        </svg></span></span><span role="presentation"
                                                                    tabindex="-1"
                                                                    class="tox-tbtn tox-split-button__chevron"><svg
                                                                        width="10" height="10">
                                                                        <path
                                                                            d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 0 1 0-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8z"
                                                                            fill-rule="nonzero"></path>
                                                                    </svg></span><span aria-hidden="true"
                                                                    id="aria_5882856671451725173109808"
                                                                    style="display: none;">To open the popup, press
                                                                    Shift+Enter</span></div>
                                                        </div>
                                                        <div title="" role="toolbar" data-alloy-tabstop="true"
                                                            tabindex="-1" class="tox-toolbar__group"><button
                                                                aria-label="Insert/edit link" title="Insert/edit link"
                                                                type="button" tabindex="-1" class="tox-tbtn"
                                                                aria-pressed="false"><span
                                                                    class="tox-icon tox-tbtn__icon-wrap"><svg
                                                                        width="24" height="24">
                                                                        <path
                                                                            d="M6.2 12.3a1 1 0 0 1 1.4 1.4l-2.1 2a2 2 0 1 0 2.7 2.8l4.8-4.8a1 1 0 0 0 0-1.4 1 1 0 1 1 1.4-1.3 2.9 2.9 0 0 1 0 4L9.6 20a3.9 3.9 0 0 1-5.5-5.5l2-2zm11.6-.6a1 1 0 0 1-1.4-1.4l2-2a2 2 0 1 0-2.6-2.8L11 10.3a1 1 0 0 0 0 1.4A1 1 0 1 1 9.6 13a2.9 2.9 0 0 1 0-4L14.4 4a3.9 3.9 0 0 1 5.5 5.5l-2 2z"
                                                                            fill-rule="nonzero"></path>
                                                                    </svg></span></button><button
                                                                aria-label="Insert/edit image" title="Insert/edit image"
                                                                type="button" tabindex="-1" class="tox-tbtn"
                                                                aria-pressed="false"><span
                                                                    class="tox-icon tox-tbtn__icon-wrap"><svg
                                                                        width="24" height="24">
                                                                        <path
                                                                            d="M5 15.7l3.3-3.2c.3-.3.7-.3 1 0L12 15l4.1-4c.3-.4.8-.4 1 0l2 1.9V5H5v10.7zM5 18V19h3l2.8-2.9-2-2L5 17.9zm14-3l-2.5-2.4-6.4 6.5H19v-4zM4 3h16c.6 0 1 .4 1 1v16c0 .6-.4 1-1 1H4a1 1 0 0 1-1-1V4c0-.6.4-1 1-1zm6 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"
                                                                            fill-rule="nonzero"></path>
                                                                    </svg></span></button></div>
                                                        <div title="" role="toolbar" data-alloy-tabstop="true"
                                                            tabindex="-1" class="tox-toolbar__group"><button
                                                                aria-label="Clear formatting" title="Clear formatting"
                                                                type="button" tabindex="-1" class="tox-tbtn"><span
                                                                    class="tox-icon tox-tbtn__icon-wrap"><svg
                                                                        width="24" height="24">
                                                                        <path
                                                                            d="M13.2 6a1 1 0 0 1 0 .2l-2.6 10a1 1 0 0 1-1 .8h-.2a.8.8 0 0 1-.8-1l2.6-10H8a1 1 0 1 1 0-2h9a1 1 0 0 1 0 2h-3.8zM5 18h7a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2zm13 1.5L16.5 18 15 19.5a.7.7 0 0 1-1-1l1.5-1.5-1.5-1.5a.7.7 0 0 1 1-1l1.5 1.5 1.5-1.5a.7.7 0 0 1 1 1L17.5 17l1.5 1.5a.7.7 0 0 1-1 1z"
                                                                            fill-rule="evenodd"></path>
                                                                    </svg></span></button></div>
                                                        <div title="" role="toolbar" data-alloy-tabstop="true"
                                                            tabindex="-1" class="tox-toolbar__group"><button
                                                                aria-label="Fullscreen" title="Fullscreen" type="button"
                                                                tabindex="-1" class="tox-tbtn"
                                                                aria-pressed="false"><span
                                                                    class="tox-icon tox-tbtn__icon-wrap"><svg
                                                                        width="24" height="24">
                                                                        <path
                                                                            d="M15.3 10l-1.2-1.3 2.9-3h-2.3a.9.9 0 1 1 0-1.7H19c.5 0 .9.4.9.9v4.4a.9.9 0 1 1-1.8 0V7l-2.9 3zm0 4l3 3v-2.3a.9.9 0 1 1 1.7 0V19c0 .5-.4.9-.9.9h-4.4a.9.9 0 1 1 0-1.8H17l-3-2.9 1.3-1.2zM10 15.4l-2.9 3h2.3a.9.9 0 1 1 0 1.7H5a.9.9 0 0 1-.9-.9v-4.4a.9.9 0 1 1 1.8 0V17l2.9-3 1.2 1.3zM8.7 10L5.7 7v2.3a.9.9 0 0 1-1.7 0V5c0-.5.4-.9.9-.9h4.4a.9.9 0 0 1 0 1.8H7l3 2.9-1.3 1.2z"
                                                                            fill-rule="nonzero"></path>
                                                                    </svg></span></button></div>
                                                    </div>
                                                </div>
                                                <div class="tox-anchorbar"></div>
                                            </div>
                                            <div class="tox-sidebar-wrap">
                                                <div class="tox-edit-area"><iframe id="mce_0_ifr" frameborder="0"
                                                        allowtransparency="true"
                                                        title="Rich Text Area. Press ALT-0 for help."
                                                        class="tox-edit-area__iframe"></iframe></div>
                                                <div role="complementary" class="tox-sidebar">
                                                    <div data-alloy-tabstop="true" tabindex="-1"
                                                        class="tox-sidebar__slider tox-sidebar--sliding-closed"
                                                        style="width: 0px;">
                                                        <div class="tox-sidebar__pane-container"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tox-statusbar">
                                            <div class="tox-statusbar__text-container">
                                                <div role="navigation" data-alloy-tabstop="true"
                                                    class="tox-statusbar__path">
                                                    <div role="button" data-index="0" tab-index="-1" aria-level="1"
                                                        tabindex="-1" class="tox-statusbar__path-item">p</div>
                                                </div><button type="button" data-alloy-tabstop="true" tabindex="-1"
                                                    class="tox-statusbar__wordcount">0 words</button>
                                            </div>
                                            <div title="Resize" aria-hidden="true" class="tox-statusbar__resize-handle">
                                                <svg width="10" height="10">
                                                    <g fill-rule="nonzero">
                                                        <path
                                                            d="M8.1 1.1A.5.5 0 1 1 9 2l-7 7A.5.5 0 1 1 1 8l7-7zM8.1 5.1A.5.5 0 1 1 9 6l-3 3A.5.5 0 1 1 5 8l3-3z">
                                                        </path>
                                                    </g>
                                                </svg></div>
                                        </div>
                                        <div aria-hidden="true" class="tox-throbber" style="display: none;"></div>
                                    </div>
                                    <div class="comment_toolkit clear">
                                        <input class="button" type="button" value="Đăng bình luận">
                                    </div>
                                </form>
                            </div>



                            <div class="ln-comment-group">
                                <div id="ln-comment-2574520" class="ln-comment-item mt-3 clear" data-comment="2574520"
                                    data-parent="2574520">
                                    <div class="flex gap-1 max-w-full">
                                        <div class="w-[50px]">
                                            <div class="mx-1 my-1">
                                                <img src="https://i2.docln.net/ln/users/avatars/u176255-bbb8611f-b613-4787-873a-45dc353a6b72.jpg"
                                                    class="w-full rounded-full">
                                            </div>
                                        </div>
                                        <div
                                            class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                                            <div class="flex min-w-0 flex-col px-2">
                                                <div class="flex align-top justify-between">
                                                    <div class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                                                        <div class="self-center">
                                                            <a class="font-bold leading-6 md:leading-7 ln-username "
                                                                href="/thanh-vien/176255">_proslimevn</a>
                                                        </div>
                                                    </div>
                                                    <div class="px-2 md:px-3 md:py-1 text-lg md:text-xl cursor-pointer"
                                                        x-data="{ show: false }">
                                                        <div class="" @click="show = !show">
                                                            <i class="fas fa-angle-down"></i>
                                                        </div>
                                                        <div class="ln-comment-toolkit" x-show="show"
                                                            @click.outside="show = false" style="display: none">


                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ln-comment-content long-text">
                                                    Thêm phần upload ảnh bằng link ngoài cho avatar và ảnh bìa.
                                                </div>
                                                <div class="comment_see_more expand none">Xem thêm</div>
                                                <div class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                                    <a href="/thao-luan/1-mo-trang-thao-luan-gop-y-va-bao-loi?comment_id=2574520#ln-comment-2574520"
                                                        class="text-slate-500">
                                                        <time class="timeago" title="01-09-2024 10:29:09"
                                                            datetime="2024-09-01T10:29:09+07:00">3 giờ</time>
                                                    </a>
                                                    <a class="self-center visible-toolkit-item do-like cursor-pointer">
                                                        <i class="fas fa-thumbs-up me-1"></i>
                                                        <span class="likecount font-semibold"></span>
                                                    </a>
                                                    <a class="self-center visible-toolkit-item do-reply cursor-pointer">
                                                        <i class="fas fa-comment me-1"></i>
                                                        <span class="font-semibold">Trả lời</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="ln-comment-group">
                                <div id="ln-comment-2572305" class="ln-comment-item mt-3 clear" data-comment="2572305"
                                    data-parent="2572305">
                                    <div class="flex gap-1 max-w-full">
                                        <div class="w-[50px]">
                                            <div class="mx-1 my-1">
                                                <img src="https://i2.docln.net/ln/users/avatars/u176255-bbb8611f-b613-4787-873a-45dc353a6b72.jpg"
                                                    class="w-full rounded-full">
                                            </div>
                                        </div>
                                        <div
                                            class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                                            <div class="flex min-w-0 flex-col px-2">
                                                <div class="flex align-top justify-between">
                                                    <div class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                                                        <div class="self-center">
                                                            <a class="font-bold leading-6 md:leading-7 ln-username "
                                                                href="/thanh-vien/176255">_proslimevn</a>
                                                        </div>
                                                    </div>
                                                    <div class="px-2 md:px-3 md:py-1 text-lg md:text-xl cursor-pointer"
                                                        x-data="{ show: false }">
                                                        <div class="" @click="show = !show">
                                                            <i class="fas fa-angle-down"></i>
                                                        </div>
                                                        <div class="ln-comment-toolkit" x-show="show"
                                                            @click.outside="show = false" style="display: none">


                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ln-comment-content long-text">
                                                    Thêm phần tìm kiếm cho mục Thảo Luận.<br>
                                                </div>
                                                <div class="comment_see_more expand none">Xem thêm</div>
                                                <div class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                                    <a href="/thao-luan/1-mo-trang-thao-luan-gop-y-va-bao-loi?comment_id=2572305#ln-comment-2572305"
                                                        class="text-slate-500">
                                                        <time class="timeago" title="30-08-2024 18:07:27"
                                                            datetime="2024-08-30T18:07:27+07:00">2 ngày</time>
                                                    </a>
                                                    <a class="self-center visible-toolkit-item do-like cursor-pointer">
                                                        <i class="fas fa-thumbs-up me-1"></i>
                                                        <span class="likecount font-semibold"></span>
                                                    </a>
                                                    <a class="self-center visible-toolkit-item do-reply cursor-pointer">
                                                        <i class="fas fa-comment me-1"></i>
                                                        <span class="font-semibold">Trả lời</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="ln-comment-group">
                                <div id="ln-comment-2567688" class="ln-comment-item mt-3 clear" data-comment="2567688"
                                    data-parent="2567688">
                                    <div class="flex gap-1 max-w-full">
                                        <div class="w-[50px]">
                                            <div class="mx-1 my-1">
                                                <img src="https://i2.docln.net/ln/users/avatars/u176255-bbb8611f-b613-4787-873a-45dc353a6b72.jpg"
                                                    class="w-full rounded-full">
                                            </div>
                                        </div>
                                        <div
                                            class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                                            <div class="flex min-w-0 flex-col px-2">
                                                <div class="flex align-top justify-between">
                                                    <div class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                                                        <div class="self-center">
                                                            <a class="font-bold leading-6 md:leading-7 ln-username "
                                                                href="/thanh-vien/176255">_proslimevn</a>
                                                        </div>
                                                    </div>
                                                    <div class="px-2 md:px-3 md:py-1 text-lg md:text-xl cursor-pointer"
                                                        x-data="{ show: false }">
                                                        <div class="" @click="show = !show">
                                                            <i class="fas fa-angle-down"></i>
                                                        </div>
                                                        <div class="ln-comment-toolkit" x-show="show"
                                                            @click.outside="show = false" style="display: none">


                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ln-comment-content long-text">
                                                    Mong ad Embers thêm các cập nhật/thay đổi chức năng vào trang <a
                                                        href="/thao-luan/2662-cap-nhat-nhung-thay-doi-chuc-nang-trong-cln">/thao-luan/2662-cap-nhat-nhung-thay-doi-chuc-nang-trong-cln</a>
                                                    Cũng như ghim vào phần trang chủ để con dân tiện theo dõi các thay đổi
                                                </div>
                                                <div class="comment_see_more expand none">Xem thêm</div>
                                                <div class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                                    <a href="/thao-luan/1-mo-trang-thao-luan-gop-y-va-bao-loi?comment_id=2567688#ln-comment-2567688"
                                                        class="text-slate-500">
                                                        <time class="timeago" title="27-08-2024 14:21:36"
                                                            datetime="2024-08-27T14:21:36+07:00">5 ngày</time>
                                                    </a>
                                                    <a class="self-center visible-toolkit-item do-like cursor-pointer">
                                                        <i class="fas fa-thumbs-up me-1"></i>
                                                        <span class="likecount font-semibold">1</span>
                                                    </a>
                                                    <a class="self-center visible-toolkit-item do-reply cursor-pointer">
                                                        <i class="fas fa-comment me-1"></i>
                                                        <span class="font-semibold">Trả lời</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="ln-comment-group">
                                <div id="ln-comment-2565234" class="ln-comment-item mt-3 clear" data-comment="2565234"
                                    data-parent="2565234">
                                    <div class="flex gap-1 max-w-full">
                                        <div class="w-[50px]">
                                            <div class="mx-1 my-1">
                                                <img src="https://i2.docln.net/ln/users/avatars/u197873-cbe483b3-4f51-460b-b3cf-106846b42d2e.jpg"
                                                    class="w-full rounded-full">
                                            </div>
                                        </div>
                                        <div
                                            class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                                            <div class="flex min-w-0 flex-col px-2">
                                                <div class="flex align-top justify-between">
                                                    <div class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                                                        <div class="self-center">
                                                            <a class="font-bold leading-6 md:leading-7 ln-username "
                                                                href="/thanh-vien/197873">khoa use nokia read book</a>
                                                        </div>
                                                        <div class="self-center">
                                                            <div
                                                                class="flex gap-1 rounded-sm bg-[#49d0b2]/50 dark:bg-[#36a189]/50 px-1.5 py-0.5 align-middle text-[10px] font-bold text-[#36a189] dark:text-[#eaeaea]">
                                                                <img class="my-auto h-[14px]" src="/img/badge/trans5.png">
                                                                <div class="leading-4">TRANS</div>
                                                            </div>
                                                        </div>
                                                        <div class="self-center">
                                                            <div
                                                                class="flex gap-1 rounded-sm bg-[#e3953e]/50 dark:bg-[#9c662a]/50 px-1.5 py-0.5 align-middle text-[10px] font-bold text-[#9c662a] dark:text-[#ecd8c2]">
                                                                <img class="my-auto h-[14px]" src="/img/badge/cvter2.png">
                                                                <div class="leading-4">AI MASTER</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="px-2 md:px-3 md:py-1 text-lg md:text-xl cursor-pointer"
                                                        x-data="{ show: false }">
                                                        <div class="" @click="show = !show">
                                                            <i class="fas fa-angle-down"></i>
                                                        </div>
                                                        <div class="ln-comment-toolkit" x-show="show"
                                                            @click.outside="show = false" style="display: none">


                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ln-comment-content long-text">
                                                    Thêm tính năng bảo mật nâng cao 2fa( xác minh 2 bước)
                                                </div>
                                                <div class="comment_see_more expand none">Xem thêm</div>
                                                <div class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                                    <a href="/thao-luan/1-mo-trang-thao-luan-gop-y-va-bao-loi?comment_id=2565234#ln-comment-2565234"
                                                        class="text-slate-500">
                                                        <time class="timeago" title="26-08-2024 00:12:45"
                                                            datetime="2024-08-26T00:12:45+07:00">7 ngày</time>
                                                    </a>
                                                    <a class="self-center visible-toolkit-item do-like cursor-pointer">
                                                        <i class="fas fa-thumbs-up me-1"></i>
                                                        <span class="likecount font-semibold"></span>
                                                    </a>
                                                    <a class="self-center visible-toolkit-item do-reply cursor-pointer">
                                                        <i class="fas fa-comment me-1"></i>
                                                        <span class="font-semibold">Trả lời</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="ln-comment-group">
                                <div id="ln-comment-2563887" class="ln-comment-item mt-3 clear" data-comment="2563887"
                                    data-parent="2563887">
                                    <div class="flex gap-1 max-w-full">
                                        <div class="w-[50px]">
                                            <div class="mx-1 my-1">
                                                <img src="https://i.docln.net/lightnovel/users/ua1-58948009-0e87-4096-8f67-11766a67792c.jpg"
                                                    class="w-full rounded-full">
                                            </div>
                                        </div>
                                        <div
                                            class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                                            <div class="flex min-w-0 flex-col px-2">
                                                <div class="flex align-top justify-between">
                                                    <div class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                                                        <div class="self-center">
                                                            <a class="font-bold leading-6 md:leading-7 ln-username glow_text"
                                                                href="/thanh-vien/1">Embers</a>
                                                        </div>
                                                        <div class="self-center">
                                                            <div
                                                                class="flex gap-1 rounded-sm bg-[#FDBF00]/50 dark:bg-[#CC1E0D]/50 px-1.5 py-0.5 align-middle text-[10px] font-bold text-[#CC1E0D] dark:text-[#FDBF00]">
                                                                <img class="my-auto h-[14px]" src="/img/badge/admin3.png">
                                                                <div class="leading-4">ADMIN</div>
                                                            </div>
                                                        </div>
                                                        <div class="self-center">
                                                            <div
                                                                class="flex gap-1 rounded-sm bg-[#49d0b2]/50 dark:bg-[#36a189]/50 px-1.5 py-0.5 align-middle text-[10px] font-bold text-[#36a189] dark:text-[#eaeaea]">
                                                                <img class="my-auto h-[14px]" src="/img/badge/trans5.png">
                                                                <div class="leading-4">TRANS</div>
                                                            </div>
                                                        </div>
                                                        <div class="self-center">
                                                            <div
                                                                class="flex gap-1 rounded-sm bg-[#e3953e]/50 dark:bg-[#9c662a]/50 px-1.5 py-0.5 align-middle text-[10px] font-bold text-[#9c662a] dark:text-[#ecd8c2]">
                                                                <img class="my-auto h-[14px]" src="/img/badge/cvter2.png">
                                                                <div class="leading-4">AI MASTER</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="px-2 md:px-3 md:py-1 text-lg md:text-xl cursor-pointer"
                                                        x-data="{ show: false }">
                                                        <div class="" @click="show = !show">
                                                            <i class="fas fa-angle-down"></i>
                                                        </div>
                                                        <div class="ln-comment-toolkit" x-show="show"
                                                            @click.outside="show = false" style="display: none">


                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ln-comment-content long-text">
                                                    Ai đang phá thì tha đi ạ, trang cộng đồng thôi mà khổ quá 😢
                                                </div>
                                                <div class="comment_see_more expand none">Xem thêm</div>
                                                <div class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                                    <a href="/thao-luan/1-mo-trang-thao-luan-gop-y-va-bao-loi?comment_id=2563887#ln-comment-2563887"
                                                        class="text-slate-500">
                                                        <time class="timeago" title="25-08-2024 10:01:40"
                                                            datetime="2024-08-25T10:01:40+07:00">7 ngày</time>
                                                    </a>
                                                    <a class="self-center visible-toolkit-item do-like cursor-pointer">
                                                        <i class="fas fa-thumbs-up me-1"></i>
                                                        <span class="likecount font-semibold">11</span>
                                                    </a>
                                                    <a class="self-center visible-toolkit-item do-reply cursor-pointer">
                                                        <i class="fas fa-comment me-1"></i>
                                                        <span class="font-semibold">Trả lời</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="ln-comment-reply">
                                    <div id="ln-comment-2563891" class="ln-comment-item mt-3 clear"
                                        data-comment="2563891" data-parent="2563887">
                                        <div class="flex gap-1 max-w-full">
                                            <div class="w-[50px]">
                                                <div class="mx-1 my-1">
                                                    <img src="https://i2.docln.net/ln/users/avatars/u195645-38f24f4a-6d91-4dc8-aa52-29957eb35356.jpg"
                                                        class="w-full rounded-full">
                                                </div>
                                            </div>
                                            <div
                                                class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                                                <div class="flex min-w-0 flex-col px-2">
                                                    <div class="flex align-top justify-between">
                                                        <div class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                                                            <div class="self-center">
                                                                <a class="font-bold leading-6 md:leading-7 ln-username "
                                                                    href="/thanh-vien/195645">freefireneverdie</a>
                                                            </div>
                                                        </div>
                                                        <div class="px-2 md:px-3 md:py-1 text-lg md:text-xl cursor-pointer"
                                                            x-data="{ show: false }">
                                                            <div class="" @click="show = !show">
                                                                <i class="fas fa-angle-down"></i>
                                                            </div>
                                                            <div class="ln-comment-toolkit" x-show="show"
                                                                @click.outside="show = false" style="display: none">


                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ln-comment-content long-text">
                                                        Tôi cứ tưởng bảo trì server chứ ...
                                                    </div>
                                                    <div class="comment_see_more expand none">Xem thêm</div>
                                                    <div class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                                        <a href="/thao-luan/1-mo-trang-thao-luan-gop-y-va-bao-loi?comment_id=2563887&amp;reply_id=2563891#ln-comment-2563891"
                                                            class="text-slate-500">
                                                            <time class="timeago" title="25-08-2024 10:03:20"
                                                                datetime="2024-08-25T10:03:20+07:00">7 ngày</time>
                                                        </a>
                                                        <a class="self-center visible-toolkit-item do-like cursor-pointer">
                                                            <i class="fas fa-thumbs-up me-1"></i>
                                                            <span class="likecount font-semibold"></span>
                                                        </a>
                                                        <a
                                                            class="self-center visible-toolkit-item do-reply cursor-pointer">
                                                            <i class="fas fa-comment me-1"></i>
                                                            <span class="font-semibold">Trả lời</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="ln-comment-2563902" class="ln-comment-item mt-3 clear"
                                        data-comment="2563902" data-parent="2563887">
                                        <div class="flex gap-1 max-w-full">
                                            <div class="w-[50px]">
                                                <div class="mx-1 my-1">
                                                    <img src="https://i2.docln.net/ln/users/avatars/u196360-389fbecb-bb20-44e9-a951-68de99131fad.jpg"
                                                        class="w-full rounded-full">
                                                </div>
                                            </div>
                                            <div
                                                class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                                                <div class="flex min-w-0 flex-col px-2">
                                                    <div class="flex align-top justify-between">
                                                        <div class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                                                            <div class="self-center">
                                                                <a class="font-bold leading-6 md:leading-7 ln-username "
                                                                    href="/thanh-vien/196360">Rika-chan</a>
                                                            </div>
                                                            <div class="self-center">
                                                                <div
                                                                    class="flex gap-1 rounded-sm bg-[#49d0b2]/50 dark:bg-[#36a189]/50 px-1.5 py-0.5 align-middle text-[10px] font-bold text-[#36a189] dark:text-[#eaeaea]">
                                                                    <img class="my-auto h-[14px]"
                                                                        src="/img/badge/trans5.png">
                                                                    <div class="leading-4">TRANS</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="px-2 md:px-3 md:py-1 text-lg md:text-xl cursor-pointer"
                                                            x-data="{ show: false }">
                                                            <div class="" @click="show = !show">
                                                                <i class="fas fa-angle-down"></i>
                                                            </div>
                                                            <div class="ln-comment-toolkit" x-show="show"
                                                                @click.outside="show = false" style="display: none">


                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ln-comment-content long-text">
                                                        Vậy mà sáng giờ tưởng ad bảo trì :v
                                                    </div>
                                                    <div class="comment_see_more expand none">Xem thêm</div>
                                                    <div class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                                        <a href="/thao-luan/1-mo-trang-thao-luan-gop-y-va-bao-loi?comment_id=2563887&amp;reply_id=2563902#ln-comment-2563902"
                                                            class="text-slate-500">
                                                            <time class="timeago" title="25-08-2024 10:15:20"
                                                                datetime="2024-08-25T10:15:20+07:00">7 ngày</time>
                                                        </a>
                                                        <a class="self-center visible-toolkit-item do-like cursor-pointer">
                                                            <i class="fas fa-thumbs-up me-1"></i>
                                                            <span class="likecount font-semibold"></span>
                                                        </a>
                                                        <a
                                                            class="self-center visible-toolkit-item do-reply cursor-pointer">
                                                            <i class="fas fa-comment me-1"></i>
                                                            <span class="font-semibold">Trả lời</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="fetch_reply" data-parent="2563887">
                                        Xem thêm 4 trả lời <i class="fas fa-chevron-down" style="margin-left: 4px;"></i>
                                    </div>
                                    <img class="loading" src="/img/loading.svg"
                                        style="width: auto; height: 15px; margin-left: 10px; display: none">

                                </div>
                            </div>
                            <div class="ln-comment-group">
                                <div id="ln-comment-2563866" class="ln-comment-item mt-3 clear" data-comment="2563866"
                                    data-parent="2563866">
                                    <div class="flex gap-1 max-w-full">
                                        <div class="w-[50px]">
                                            <div class="mx-1 my-1">
                                                <img src="https://i.docln.net/lightnovel/users/ua28271-87da1ac1-69cb-4cb8-a3ae-91f4e6e63206.jpg"
                                                    class="w-full rounded-full">
                                            </div>
                                        </div>
                                        <div
                                            class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                                            <div class="flex min-w-0 flex-col px-2">
                                                <div class="flex align-top justify-between">
                                                    <div class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                                                        <div class="self-center">
                                                            <a class="font-bold leading-6 md:leading-7 ln-username "
                                                                href="/thanh-vien/28271">Magnet</a>
                                                        </div>
                                                        <div class="self-center">
                                                            <div
                                                                class="flex gap-1 rounded-sm bg-[#1aadf9]/50 dark:bg-[#0d5980]/50 px-1.5 py-0.5 align-middle text-[10px] font-bold text-[#0d5980] dark:text-[#8ac4e0]">
                                                                <img class="my-auto h-[14px]"
                                                                    src="/img/badge/author3.png">
                                                                <div class="leading-4">AUTHOR</div>
                                                            </div>
                                                        </div>
                                                        <div class="self-center">
                                                            <div
                                                                class="flex gap-1 rounded-sm bg-[#49d0b2]/50 dark:bg-[#36a189]/50 px-1.5 py-0.5 align-middle text-[10px] font-bold text-[#36a189] dark:text-[#eaeaea]">
                                                                <img class="my-auto h-[14px]" src="/img/badge/trans5.png">
                                                                <div class="leading-4">TRANS</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="px-2 md:px-3 md:py-1 text-lg md:text-xl cursor-pointer"
                                                        x-data="{ show: false }">
                                                        <div class="" @click="show = !show">
                                                            <i class="fas fa-angle-down"></i>
                                                        </div>
                                                        <div class="ln-comment-toolkit" x-show="show"
                                                            @click.outside="show = false" style="display: none">


                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ln-comment-content long-text">
                                                    Sáng tới giờ truy cập cứ hay gặp lỗi 502 Bad Gateway, có ai giống tôi
                                                    không?
                                                </div>
                                                <div class="comment_see_more expand none">Xem thêm</div>
                                                <div class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                                    <a href="/thao-luan/1-mo-trang-thao-luan-gop-y-va-bao-loi?comment_id=2563866#ln-comment-2563866"
                                                        class="text-slate-500">
                                                        <time class="timeago" title="25-08-2024 09:23:07"
                                                            datetime="2024-08-25T09:23:07+07:00">7 ngày</time>
                                                    </a>
                                                    <a class="self-center visible-toolkit-item do-like cursor-pointer">
                                                        <i class="fas fa-thumbs-up me-1"></i>
                                                        <span class="likecount font-semibold"></span>
                                                    </a>
                                                    <a class="self-center visible-toolkit-item do-reply cursor-pointer">
                                                        <i class="fas fa-comment me-1"></i>
                                                        <span class="font-semibold">Trả lời</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="ln-comment-reply">
                                    <div id="ln-comment-2563874" class="ln-comment-item mt-3 clear"
                                        data-comment="2563874" data-parent="2563866">
                                        <div class="flex gap-1 max-w-full">
                                            <div class="w-[50px]">
                                                <div class="mx-1 my-1">
                                                    <img src="https://i.docln.net/lightnovel/users/ua39-dcda761a-ec2c-40a4-bf98-f7faee936682.jpg"
                                                        class="w-full rounded-full">
                                                </div>
                                            </div>
                                            <div
                                                class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                                                <div class="flex min-w-0 flex-col px-2">
                                                    <div class="flex align-top justify-between">
                                                        <div class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                                                            <div class="self-center">
                                                                <a class="font-bold leading-6 md:leading-7 ln-username "
                                                                    href="/thanh-vien/39">medassin</a>
                                                            </div>
                                                            <div class="self-center">
                                                                <div
                                                                    class="flex gap-1 rounded-sm bg-[#49d0b2]/50 dark:bg-[#36a189]/50 px-1.5 py-0.5 align-middle text-[10px] font-bold text-[#36a189] dark:text-[#eaeaea]">
                                                                    <img class="my-auto h-[14px]"
                                                                        src="/img/badge/trans5.png">
                                                                    <div class="leading-4">TRANS</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="px-2 md:px-3 md:py-1 text-lg md:text-xl cursor-pointer"
                                                            x-data="{ show: false }">
                                                            <div class="" @click="show = !show">
                                                                <i class="fas fa-angle-down"></i>
                                                            </div>
                                                            <div class="ln-comment-toolkit" x-show="show"
                                                                @click.outside="show = false" style="display: none">


                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ln-comment-content long-text">
                                                        Có tui.
                                                    </div>
                                                    <div class="comment_see_more expand none">Xem thêm</div>
                                                    <div class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                                        <a href="/thao-luan/1-mo-trang-thao-luan-gop-y-va-bao-loi?comment_id=2563866&amp;reply_id=2563874#ln-comment-2563874"
                                                            class="text-slate-500">
                                                            <time class="timeago" title="25-08-2024 09:38:50"
                                                                datetime="2024-08-25T09:38:50+07:00">7 ngày</time>
                                                        </a>
                                                        <a class="self-center visible-toolkit-item do-like cursor-pointer">
                                                            <i class="fas fa-thumbs-up me-1"></i>
                                                            <span class="likecount font-semibold"></span>
                                                        </a>
                                                        <a
                                                            class="self-center visible-toolkit-item do-reply cursor-pointer">
                                                            <i class="fas fa-comment me-1"></i>
                                                            <span class="font-semibold">Trả lời</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="ln-comment-2563880" class="ln-comment-item mt-3 clear"
                                        data-comment="2563880" data-parent="2563866">
                                        <div class="flex gap-1 max-w-full">
                                            <div class="w-[50px]">
                                                <div class="mx-1 my-1">
                                                    <img src="https://i2.docln.net/ln/users/avatars/u155557-1382db38-35de-4cb0-9572-fd061ab229ca.jpg"
                                                        class="w-full rounded-full">
                                                </div>
                                            </div>
                                            <div
                                                class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                                                <div class="flex min-w-0 flex-col px-2">
                                                    <div class="flex align-top justify-between">
                                                        <div class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                                                            <div class="self-center">
                                                                <a class="font-bold leading-6 md:leading-7 ln-username "
                                                                    href="/thanh-vien/155557">Syuln</a>
                                                            </div>
                                                            <div class="self-center">
                                                                <div
                                                                    class="flex gap-1 rounded-sm bg-[#49d0b2]/50 dark:bg-[#36a189]/50 px-1.5 py-0.5 align-middle text-[10px] font-bold text-[#36a189] dark:text-[#eaeaea]">
                                                                    <img class="my-auto h-[14px]"
                                                                        src="/img/badge/trans5.png">
                                                                    <div class="leading-4">TRANS</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="px-2 md:px-3 md:py-1 text-lg md:text-xl cursor-pointer"
                                                            x-data="{ show: false }">
                                                            <div class="" @click="show = !show">
                                                                <i class="fas fa-angle-down"></i>
                                                            </div>
                                                            <div class="ln-comment-toolkit" x-show="show"
                                                                @click.outside="show = false" style="display: none">


                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ln-comment-content long-text">
                                                        Có t nx nè. Chắc Admin chỉnh gì đó😵‍💫
                                                    </div>
                                                    <div class="comment_see_more expand none">Xem thêm</div>
                                                    <div class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                                        <a href="/thao-luan/1-mo-trang-thao-luan-gop-y-va-bao-loi?comment_id=2563866&amp;reply_id=2563880#ln-comment-2563880"
                                                            class="text-slate-500">
                                                            <time class="timeago" title="25-08-2024 09:50:58"
                                                                datetime="2024-08-25T09:50:58+07:00">7 ngày</time>
                                                        </a>
                                                        <a class="self-center visible-toolkit-item do-like cursor-pointer">
                                                            <i class="fas fa-thumbs-up me-1"></i>
                                                            <span class="likecount font-semibold"></span>
                                                        </a>
                                                        <a
                                                            class="self-center visible-toolkit-item do-reply cursor-pointer">
                                                            <i class="fas fa-comment me-1"></i>
                                                            <span class="font-semibold">Trả lời</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="fetch_reply" data-parent="2563866">
                                        Xem thêm 3 trả lời <i class="fas fa-chevron-down" style="margin-left: 4px;"></i>
                                    </div>
                                    <img class="loading" src="/img/loading.svg"
                                        style="width: auto; height: 15px; margin-left: 10px; display: none">

                                </div>
                            </div>
                            <div class="ln-comment-group">
                                <div id="ln-comment-2562017" class="ln-comment-item mt-3 clear" data-comment="2562017"
                                    data-parent="2562017">
                                    <div class="flex gap-1 max-w-full">
                                        <div class="w-[50px]">
                                            <div class="mx-1 my-1">
                                                <img src="https://i.docln.net/lightnovel/users/ua29015-78639d17-420a-4851-9097-af0f034ba005.jpg"
                                                    class="w-full rounded-full">
                                            </div>
                                        </div>
                                        <div
                                            class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                                            <div class="flex min-w-0 flex-col px-2">
                                                <div class="flex align-top justify-between">
                                                    <div class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                                                        <div class="self-center">
                                                            <a class="font-bold leading-6 md:leading-7 ln-username "
                                                                href="/thanh-vien/29015">Phạm Gia Nghĩa</a>
                                                        </div>
                                                        <div class="self-center">
                                                            <div
                                                                class="flex gap-1 rounded-sm bg-[#49d0b2]/50 dark:bg-[#36a189]/50 px-1.5 py-0.5 align-middle text-[10px] font-bold text-[#36a189] dark:text-[#eaeaea]">
                                                                <img class="my-auto h-[14px]" src="/img/badge/trans5.png">
                                                                <div class="leading-4">TRANS</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="px-2 md:px-3 md:py-1 text-lg md:text-xl cursor-pointer"
                                                        x-data="{ show: false }">
                                                        <div class="" @click="show = !show">
                                                            <i class="fas fa-angle-down"></i>
                                                        </div>
                                                        <div class="ln-comment-toolkit" x-show="show"
                                                            @click.outside="show = false" style="display: none">


                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ln-comment-content long-text">
                                                    Chào admin, admin có thể thêm nền amoled black khi đọc truyện, như màu
                                                    nền hiện tại của trang chủ ở chế độ tối được không; nền black (nền đen
                                                    nhất trong các nền có thể chọn hiện tại) vẫn chưa đủ đen để xem ban đêm,
                                                    mình đọc có chút đau mắt, admin cho mình gửi lời cảm ơn trước nhé
                                                </div>
                                                <div class="comment_see_more expand none">Xem thêm</div>
                                                <div class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                                    <a href="/thao-luan/1-mo-trang-thao-luan-gop-y-va-bao-loi?comment_id=2562017#ln-comment-2562017"
                                                        class="text-slate-500">
                                                        <time class="timeago" title="23-08-2024 22:46:46"
                                                            datetime="2024-08-23T22:46:46+07:00">9 ngày</time>
                                                    </a>
                                                    <a class="self-center visible-toolkit-item do-like cursor-pointer">
                                                        <i class="fas fa-thumbs-up me-1"></i>
                                                        <span class="likecount font-semibold">1</span>
                                                    </a>
                                                    <a class="self-center visible-toolkit-item do-reply cursor-pointer">
                                                        <i class="fas fa-comment me-1"></i>
                                                        <span class="font-semibold">Trả lời</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="ln-comment-reply">
                                    <div id="ln-comment-2562116" class="ln-comment-item mt-3 clear"
                                        data-comment="2562116" data-parent="2562017">
                                        <div class="flex gap-1 max-w-full">
                                            <div class="w-[50px]">
                                                <div class="mx-1 my-1">
                                                    <img src="https://i.docln.net/lightnovel/users/ua1-58948009-0e87-4096-8f67-11766a67792c.jpg"
                                                        class="w-full rounded-full">
                                                </div>
                                            </div>
                                            <div
                                                class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                                                <div class="flex min-w-0 flex-col px-2">
                                                    <div class="flex align-top justify-between">
                                                        <div class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                                                            <div class="self-center">
                                                                <a class="font-bold leading-6 md:leading-7 ln-username glow_text"
                                                                    href="/thanh-vien/1">Embers</a>
                                                            </div>
                                                            <div class="self-center">
                                                                <div
                                                                    class="flex gap-1 rounded-sm bg-[#FDBF00]/50 dark:bg-[#CC1E0D]/50 px-1.5 py-0.5 align-middle text-[10px] font-bold text-[#CC1E0D] dark:text-[#FDBF00]">
                                                                    <img class="my-auto h-[14px]"
                                                                        src="/img/badge/admin3.png">
                                                                    <div class="leading-4">ADMIN</div>
                                                                </div>
                                                            </div>
                                                            <div class="self-center">
                                                                <div
                                                                    class="flex gap-1 rounded-sm bg-[#49d0b2]/50 dark:bg-[#36a189]/50 px-1.5 py-0.5 align-middle text-[10px] font-bold text-[#36a189] dark:text-[#eaeaea]">
                                                                    <img class="my-auto h-[14px]"
                                                                        src="/img/badge/trans5.png">
                                                                    <div class="leading-4">TRANS</div>
                                                                </div>
                                                            </div>
                                                            <div class="self-center">
                                                                <div
                                                                    class="flex gap-1 rounded-sm bg-[#e3953e]/50 dark:bg-[#9c662a]/50 px-1.5 py-0.5 align-middle text-[10px] font-bold text-[#9c662a] dark:text-[#ecd8c2]">
                                                                    <img class="my-auto h-[14px]"
                                                                        src="/img/badge/cvter2.png">
                                                                    <div class="leading-4">AI MASTER</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="px-2 md:px-3 md:py-1 text-lg md:text-xl cursor-pointer"
                                                            x-data="{ show: false }">
                                                            <div class="" @click="show = !show">
                                                                <i class="fas fa-angle-down"></i>
                                                            </div>
                                                            <div class="ln-comment-toolkit" x-show="show"
                                                                @click.outside="show = false" style="display: none">


                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ln-comment-content long-text">
                                                        Ok mình sẽ thêm
                                                    </div>
                                                    <div class="comment_see_more expand none">Xem thêm</div>
                                                    <div class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                                        <a href="/thao-luan/1-mo-trang-thao-luan-gop-y-va-bao-loi?comment_id=2562017&amp;reply_id=2562116#ln-comment-2562116"
                                                            class="text-slate-500">
                                                            <time class="timeago" title="23-08-2024 23:35:39"
                                                                datetime="2024-08-23T23:35:39+07:00">9 ngày</time>
                                                        </a>
                                                        <a class="self-center visible-toolkit-item do-like cursor-pointer">
                                                            <i class="fas fa-thumbs-up me-1"></i>
                                                            <span class="likecount font-semibold"></span>
                                                        </a>
                                                        <a
                                                            class="self-center visible-toolkit-item do-reply cursor-pointer">
                                                            <i class="fas fa-comment me-1"></i>
                                                            <span class="font-semibold">Trả lời</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="ln-comment-2562403" class="ln-comment-item mt-3 clear"
                                        data-comment="2562403" data-parent="2562017">
                                        <div class="flex gap-1 max-w-full">
                                            <div class="w-[50px]">
                                                <div class="mx-1 my-1">
                                                    <img src="https://i.docln.net/lightnovel/users/ua29015-78639d17-420a-4851-9097-af0f034ba005.jpg"
                                                        class="w-full rounded-full">
                                                </div>
                                            </div>
                                            <div
                                                class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                                                <div class="flex min-w-0 flex-col px-2">
                                                    <div class="flex align-top justify-between">
                                                        <div class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                                                            <div class="self-center">
                                                                <a class="font-bold leading-6 md:leading-7 ln-username "
                                                                    href="/thanh-vien/29015">Phạm Gia Nghĩa</a>
                                                            </div>
                                                            <div class="self-center">
                                                                <div
                                                                    class="flex gap-1 rounded-sm bg-[#49d0b2]/50 dark:bg-[#36a189]/50 px-1.5 py-0.5 align-middle text-[10px] font-bold text-[#36a189] dark:text-[#eaeaea]">
                                                                    <img class="my-auto h-[14px]"
                                                                        src="/img/badge/trans5.png">
                                                                    <div class="leading-4">TRANS</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="px-2 md:px-3 md:py-1 text-lg md:text-xl cursor-pointer"
                                                            x-data="{ show: false }">
                                                            <div class="" @click="show = !show">
                                                                <i class="fas fa-angle-down"></i>
                                                            </div>
                                                            <div class="ln-comment-toolkit" x-show="show"
                                                                @click.outside="show = false" style="display: none">


                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ln-comment-content long-text">
                                                        <a href="/thanh-vien/1">@Embers:</a> thật sự cảm ơn admin nhiều nhé
                                                        &lt;3; style 0 background color là #eaeaea còn style 6 background
                                                        color là #222, mình mày mò inspect chỉnh về #00000 nhưng mình tìm
                                                        hoài không ra cách nào để lưu, nên cuối cùng đành phải nhờ cậy vào
                                                        admin, hihi
                                                    </div>
                                                    <div class="comment_see_more expand none">Xem thêm</div>
                                                    <div class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                                        <a href="/thao-luan/1-mo-trang-thao-luan-gop-y-va-bao-loi?comment_id=2562017&amp;reply_id=2562403#ln-comment-2562403"
                                                            class="text-slate-500">
                                                            <time class="timeago" title="24-08-2024 07:56:28"
                                                                datetime="2024-08-24T07:56:28+07:00">8 ngày</time>
                                                        </a>
                                                        <a class="self-center visible-toolkit-item do-like cursor-pointer">
                                                            <i class="fas fa-thumbs-up me-1"></i>
                                                            <span class="likecount font-semibold"></span>
                                                        </a>
                                                        <a
                                                            class="self-center visible-toolkit-item do-reply cursor-pointer">
                                                            <i class="fas fa-comment me-1"></i>
                                                            <span class="font-semibold">Trả lời</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="fetch_reply" data-parent="2562017">
                                        Xem thêm 1 trả lời <i class="fas fa-chevron-down" style="margin-left: 4px;"></i>
                                    </div>
                                    <img class="loading" src="/img/loading.svg"
                                        style="width: auto; height: 15px; margin-left: 10px; display: none">

                                </div>
                            </div>
                            <div class="ln-comment-group">
                                <div id="ln-comment-2560925" class="ln-comment-item mt-3 clear" data-comment="2560925"
                                    data-parent="2560925">
                                    <div class="flex gap-1 max-w-full">
                                        <div class="w-[50px]">
                                            <div class="mx-1 my-1">
                                                <img src="https://i2.docln.net/ln/users/avatars/u161243-cc0d6926-98c4-48b4-8371-0e18cb3307d9.jpg"
                                                    class="w-full rounded-full">
                                            </div>
                                        </div>
                                        <div
                                            class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                                            <div class="flex min-w-0 flex-col px-2">
                                                <div class="flex align-top justify-between">
                                                    <div class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                                                        <div class="self-center">
                                                            <a class="font-bold leading-6 md:leading-7 ln-username "
                                                                href="/thanh-vien/161243">Tài Dảk</a>
                                                        </div>
                                                    </div>
                                                    <div class="px-2 md:px-3 md:py-1 text-lg md:text-xl cursor-pointer"
                                                        x-data="{ show: false }">
                                                        <div class="" @click="show = !show">
                                                            <i class="fas fa-angle-down"></i>
                                                        </div>
                                                        <div class="ln-comment-toolkit" x-show="show"
                                                            @click.outside="show = false" style="display: none">


                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ln-comment-content long-text">
                                                    Có thể thêm tính năng tìm thành viên bằng tên đc ko? (Kiểu tìm bằng tên
                                                    của trans với author ấy)
                                                </div>
                                                <div class="comment_see_more expand none">Xem thêm</div>
                                                <div class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                                    <a href="/thao-luan/1-mo-trang-thao-luan-gop-y-va-bao-loi?comment_id=2560925#ln-comment-2560925"
                                                        class="text-slate-500">
                                                        <time class="timeago" title="23-08-2024 00:51:22"
                                                            datetime="2024-08-23T00:51:22+07:00">10 ngày</time>
                                                    </a>
                                                    <a class="self-center visible-toolkit-item do-like cursor-pointer">
                                                        <i class="fas fa-thumbs-up me-1"></i>
                                                        <span class="likecount font-semibold"></span>
                                                    </a>
                                                    <a class="self-center visible-toolkit-item do-reply cursor-pointer">
                                                        <i class="fas fa-comment me-1"></i>
                                                        <span class="font-semibold">Trả lời</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="ln-comment-reply">
                                    <div id="ln-comment-2560971" class="ln-comment-item mt-3 clear"
                                        data-comment="2560971" data-parent="2560925">
                                        <div class="flex gap-1 max-w-full">
                                            <div class="w-[50px]">
                                                <div class="mx-1 my-1">
                                                    <img src="https://i.docln.net/lightnovel/users/ua124404-96ea7862-0690-4d90-915f-40687108889b.jpg"
                                                        class="w-full rounded-full">
                                                </div>
                                            </div>
                                            <div
                                                class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                                                <div class="flex min-w-0 flex-col px-2">
                                                    <div class="flex align-top justify-between">
                                                        <div class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                                                            <div class="self-center">
                                                                <a class="font-bold leading-6 md:leading-7 ln-username "
                                                                    href="/thanh-vien/124404">Perucia Shunya</a>
                                                            </div>
                                                            <div class="self-center">
                                                                <div
                                                                    class="flex gap-1 rounded-sm bg-[#1aadf9]/50 dark:bg-[#0d5980]/50 px-1.5 py-0.5 align-middle text-[10px] font-bold text-[#0d5980] dark:text-[#8ac4e0]">
                                                                    <img class="my-auto h-[14px]"
                                                                        src="/img/badge/author3.png">
                                                                    <div class="leading-4">AUTHOR</div>
                                                                </div>
                                                            </div>
                                                            <div class="self-center">
                                                                <div
                                                                    class="flex gap-1 rounded-sm bg-[#49d0b2]/50 dark:bg-[#36a189]/50 px-1.5 py-0.5 align-middle text-[10px] font-bold text-[#36a189] dark:text-[#eaeaea]">
                                                                    <img class="my-auto h-[14px]"
                                                                        src="/img/badge/trans5.png">
                                                                    <div class="leading-4">TRANS</div>
                                                                </div>
                                                            </div>
                                                            <div class="self-center">
                                                                <div
                                                                    class="flex gap-1 rounded-sm bg-[#e3953e]/50 dark:bg-[#9c662a]/50 px-1.5 py-0.5 align-middle text-[10px] font-bold text-[#9c662a] dark:text-[#ecd8c2]">
                                                                    <img class="my-auto h-[14px]"
                                                                        src="/img/badge/cvter2.png">
                                                                    <div class="leading-4">AI MASTER</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="px-2 md:px-3 md:py-1 text-lg md:text-xl cursor-pointer"
                                                            x-data="{ show: false }">
                                                            <div class="" @click="show = !show">
                                                                <i class="fas fa-angle-down"></i>
                                                            </div>
                                                            <div class="ln-comment-toolkit" x-show="show"
                                                                @click.outside="show = false" style="display: none">


                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ln-comment-content long-text">
                                                        Lên gg tra
                                                    </div>
                                                    <div class="comment_see_more expand none">Xem thêm</div>
                                                    <div class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                                        <a href="/thao-luan/1-mo-trang-thao-luan-gop-y-va-bao-loi?comment_id=2560925&amp;reply_id=2560971#ln-comment-2560971"
                                                            class="text-slate-500">
                                                            <time class="timeago" title="23-08-2024 01:57:58"
                                                                datetime="2024-08-23T01:57:58+07:00">9 ngày</time>
                                                        </a>
                                                        <a class="self-center visible-toolkit-item do-like cursor-pointer">
                                                            <i class="fas fa-thumbs-up me-1"></i>
                                                            <span class="likecount font-semibold"></span>
                                                        </a>
                                                        <a
                                                            class="self-center visible-toolkit-item do-reply cursor-pointer">
                                                            <i class="fas fa-comment me-1"></i>
                                                            <span class="font-semibold">Trả lời</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="ln-comment-group">
                                <div id="ln-comment-2548692" class="ln-comment-item mt-3 clear" data-comment="2548692"
                                    data-parent="2548692">
                                    <div class="flex gap-1 max-w-full">
                                        <div class="w-[50px]">
                                            <div class="mx-1 my-1">
                                                <img src="https://i2.docln.net/ln/users/avatars/u160088-724292d1-4776-4067-9251-870b5bb309d3.jpg"
                                                    class="w-full rounded-full">
                                            </div>
                                        </div>
                                        <div
                                            class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                                            <div class="flex min-w-0 flex-col px-2">
                                                <div class="flex align-top justify-between">
                                                    <div class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                                                        <div class="self-center">
                                                            <a class="font-bold leading-6 md:leading-7 ln-username "
                                                                href="/thanh-vien/160088">Nguoz</a>
                                                        </div>
                                                    </div>
                                                    <div class="px-2 md:px-3 md:py-1 text-lg md:text-xl cursor-pointer"
                                                        x-data="{ show: false }">
                                                        <div class="" @click="show = !show">
                                                            <i class="fas fa-angle-down"></i>
                                                        </div>
                                                        <div class="ln-comment-toolkit" x-show="show"
                                                            @click.outside="show = false" style="display: none">


                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ln-comment-content long-text">
                                                    mình có thể thêm chức năng thả cảm xúc được không ạ?
                                                </div>
                                                <div class="comment_see_more expand none">Xem thêm</div>
                                                <div class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                                    <a href="/thao-luan/1-mo-trang-thao-luan-gop-y-va-bao-loi?comment_id=2548692#ln-comment-2548692"
                                                        class="text-slate-500">
                                                        <time class="timeago" title="15-08-2024 13:41:38"
                                                            datetime="2024-08-15T13:41:38+07:00">17 ngày</time>
                                                    </a>
                                                    <a class="self-center visible-toolkit-item do-like cursor-pointer">
                                                        <i class="fas fa-thumbs-up me-1"></i>
                                                        <span class="likecount font-semibold"></span>
                                                    </a>
                                                    <a class="self-center visible-toolkit-item do-reply cursor-pointer">
                                                        <i class="fas fa-comment me-1"></i>
                                                        <span class="font-semibold">Trả lời</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="ln-comment-reply">
                                    <div id="ln-comment-2548708" class="ln-comment-item mt-3 clear"
                                        data-comment="2548708" data-parent="2548692">
                                        <div class="flex gap-1 max-w-full">
                                            <div class="w-[50px]">
                                                <div class="mx-1 my-1">
                                                    <img src="https://i2.docln.net/ln/users/avatars/u103595-3eb87fa1-c9a1-4489-8b7c-9509a52ba24d.jpg"
                                                        class="w-full rounded-full">
                                                </div>
                                            </div>
                                            <div
                                                class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                                                <div class="flex min-w-0 flex-col px-2">
                                                    <div class="flex align-top justify-between">
                                                        <div class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                                                            <div class="self-center">
                                                                <a class="font-bold leading-6 md:leading-7 ln-username "
                                                                    href="/thanh-vien/103595">(||-_-)</a>
                                                            </div>
                                                        </div>
                                                        <div class="px-2 md:px-3 md:py-1 text-lg md:text-xl cursor-pointer"
                                                            x-data="{ show: false }">
                                                            <div class="" @click="show = !show">
                                                                <i class="fas fa-angle-down"></i>
                                                            </div>
                                                            <div class="ln-comment-toolkit" x-show="show"
                                                                @click.outside="show = false" style="display: none">


                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ln-comment-content long-text">
                                                        Mình thấy ko cần thiết cho lắm.
                                                    </div>
                                                    <div class="comment_see_more expand none">Xem thêm</div>
                                                    <div class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                                        <a href="/thao-luan/1-mo-trang-thao-luan-gop-y-va-bao-loi?comment_id=2548692&amp;reply_id=2548708#ln-comment-2548708"
                                                            class="text-slate-500">
                                                            <time class="timeago" title="15-08-2024 13:51:56"
                                                                datetime="2024-08-15T13:51:56+07:00">17 ngày</time>
                                                        </a>
                                                        <a
                                                            class="self-center visible-toolkit-item do-like cursor-pointer">
                                                            <i class="fas fa-thumbs-up me-1"></i>
                                                            <span class="likecount font-semibold"></span>
                                                        </a>
                                                        <a
                                                            class="self-center visible-toolkit-item do-reply cursor-pointer">
                                                            <i class="fas fa-comment me-1"></i>
                                                            <span class="font-semibold">Trả lời</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="ln-comment-group">
                                <div id="ln-comment-2521433" class="ln-comment-item mt-3 clear" data-comment="2521433"
                                    data-parent="2521433">
                                    <div class="flex gap-1 max-w-full">
                                        <div class="w-[50px]">
                                            <div class="mx-1 my-1">
                                                <img src="https://i2.docln.net/ln/users/avatars/u187857-dedf1d98-de86-4d53-a915-fed4f5325cf1.jpg"
                                                    class="w-full rounded-full">
                                            </div>
                                        </div>
                                        <div
                                            class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                                            <div class="flex min-w-0 flex-col px-2">
                                                <div class="flex align-top justify-between">
                                                    <div class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                                                        <div class="self-center">
                                                            <a class="font-bold leading-6 md:leading-7 ln-username "
                                                                href="/thanh-vien/187857">vietdung22</a>
                                                        </div>
                                                        <div class="self-center">
                                                            <div
                                                                class="flex gap-1 rounded-sm bg-[#49d0b2]/50 dark:bg-[#36a189]/50 px-1.5 py-0.5 align-middle text-[10px] font-bold text-[#36a189] dark:text-[#eaeaea]">
                                                                <img class="my-auto h-[14px]"
                                                                    src="/img/badge/trans5.png">
                                                                <div class="leading-4">TRANS</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="px-2 md:px-3 md:py-1 text-lg md:text-xl cursor-pointer"
                                                        x-data="{ show: false }">
                                                        <div class="" @click="show = !show">
                                                            <i class="fas fa-angle-down"></i>
                                                        </div>
                                                        <div class="ln-comment-toolkit" x-show="show"
                                                            @click.outside="show = false" style="display: none">


                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ln-comment-content long-text">
                                                    <span style="color:#e03e2d;"><strong>Báo lỗi: </strong></span>Vị trí
                                                    của biểu tượng Home ở trang quản lí truyện cao hơn hẳn 3 pixel so với
                                                    trang đăng truyện. Kính mong đồng chí admin nhanh chóng vào
                                                    cuộc.<br><img src="https://i.imgur.com/dQMJ6yQ.png"
                                                        alt="dQMJ6yQ.png">
                                                </div>
                                                <div class="comment_see_more expand">Xem thêm</div>
                                                <div class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                                    <a href="/thao-luan/1-mo-trang-thao-luan-gop-y-va-bao-loi?comment_id=2521433#ln-comment-2521433"
                                                        class="text-slate-500">
                                                        <time class="timeago" title="30-07-2024 13:22:16"
                                                            datetime="2024-07-30T13:22:16+07:00">1 tháng</time>
                                                    </a>
                                                    <a class="self-center visible-toolkit-item do-like cursor-pointer">
                                                        <i class="fas fa-thumbs-up me-1"></i>
                                                        <span class="likecount font-semibold">1</span>
                                                    </a>
                                                    <a class="self-center visible-toolkit-item do-reply cursor-pointer">
                                                        <i class="fas fa-comment me-1"></i>
                                                        <span class="font-semibold">Trả lời</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="ln-comment-reply">
                                    <div id="ln-comment-2521445" class="ln-comment-item mt-3 clear"
                                        data-comment="2521445" data-parent="2521433">
                                        <div class="flex gap-1 max-w-full">
                                            <div class="w-[50px]">
                                                <div class="mx-1 my-1">
                                                    <img src="https://i2.docln.net/ln/users/avatars/u33638-4a0619a0-d8d1-4a0e-90e7-4edf5f1bc934.jpg"
                                                        class="w-full rounded-full">
                                                </div>
                                            </div>
                                            <div
                                                class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                                                <div class="flex min-w-0 flex-col px-2">
                                                    <div class="flex align-top justify-between">
                                                        <div class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                                                            <div class="self-center">
                                                                <a class="font-bold leading-6 md:leading-7 ln-username "
                                                                    href="/thanh-vien/33638">Xã hội này tàn rồi</a>
                                                            </div>
                                                            <div class="self-center">
                                                                <div
                                                                    class="flex gap-1 rounded-sm bg-[#49d0b2]/50 dark:bg-[#36a189]/50 px-1.5 py-0.5 align-middle text-[10px] font-bold text-[#36a189] dark:text-[#eaeaea]">
                                                                    <img class="my-auto h-[14px]"
                                                                        src="/img/badge/trans5.png">
                                                                    <div class="leading-4">TRANS</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="px-2 md:px-3 md:py-1 text-lg md:text-xl cursor-pointer"
                                                            x-data="{ show: false }">
                                                            <div class="" @click="show = !show">
                                                                <i class="fas fa-angle-down"></i>
                                                            </div>
                                                            <div class="ln-comment-toolkit" x-show="show"
                                                                @click.outside="show = false" style="display: none">


                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ln-comment-content long-text">
                                                        t bị ocd cx méo đòi hỏi dc như này nhưng còm này làm t khó chịu
                                                        nên...<br>
                                                        +1 cơ quan chính quyền vào cuộc
                                                    </div>
                                                    <div class="comment_see_more expand none">Xem thêm</div>
                                                    <div class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                                        <a href="/thao-luan/1-mo-trang-thao-luan-gop-y-va-bao-loi?comment_id=2521433&amp;reply_id=2521445#ln-comment-2521445"
                                                            class="text-slate-500">
                                                            <time class="timeago" title="30-07-2024 13:31:46"
                                                                datetime="2024-07-30T13:31:46+07:00">1 tháng</time>
                                                        </a>
                                                        <a
                                                            class="self-center visible-toolkit-item do-like cursor-pointer">
                                                            <i class="fas fa-thumbs-up me-1"></i>
                                                            <span class="likecount font-semibold"></span>
                                                        </a>
                                                        <a
                                                            class="self-center visible-toolkit-item do-reply cursor-pointer">
                                                            <i class="fas fa-comment me-1"></i>
                                                            <span class="font-semibold">Trả lời</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="ln-comment-2521489" class="ln-comment-item mt-3 clear"
                                        data-comment="2521489" data-parent="2521433">
                                        <div class="flex gap-1 max-w-full">
                                            <div class="w-[50px]">
                                                <div class="mx-1 my-1">
                                                    <img src="https://i2.docln.net/ln/users/avatars/u88077-4385bd65-ce08-46d9-8044-e9347fd47d6c.jpg"
                                                        class="w-full rounded-full">
                                                </div>
                                            </div>
                                            <div
                                                class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                                                <div class="flex min-w-0 flex-col px-2">
                                                    <div class="flex align-top justify-between">
                                                        <div class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                                                            <div class="self-center">
                                                                <a class="font-bold leading-6 md:leading-7 ln-username "
                                                                    href="/thanh-vien/88077">Sivala</a>
                                                            </div>
                                                            <div class="self-center">
                                                                <div
                                                                    class="flex gap-1 rounded-sm bg-[#49d0b2]/50 dark:bg-[#36a189]/50 px-1.5 py-0.5 align-middle text-[10px] font-bold text-[#36a189] dark:text-[#eaeaea]">
                                                                    <img class="my-auto h-[14px]"
                                                                        src="/img/badge/trans5.png">
                                                                    <div class="leading-4">TRANS</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="px-2 md:px-3 md:py-1 text-lg md:text-xl cursor-pointer"
                                                            x-data="{ show: false }">
                                                            <div class="" @click="show = !show">
                                                                <i class="fas fa-angle-down"></i>
                                                            </div>
                                                            <div class="ln-comment-toolkit" x-show="show"
                                                                @click.outside="show = false" style="display: none">


                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ln-comment-content long-text">
                                                        Tuy nhiên, một điều không thể chối cãi là thứ chúng ta cần nhất vẫn
                                                        là nền tối cho trang hệ thống
                                                    </div>
                                                    <div class="comment_see_more expand none">Xem thêm</div>
                                                    <div class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                                        <a href="/thao-luan/1-mo-trang-thao-luan-gop-y-va-bao-loi?comment_id=2521433&amp;reply_id=2521489#ln-comment-2521489"
                                                            class="text-slate-500">
                                                            <time class="timeago" title="30-07-2024 14:14:42"
                                                                datetime="2024-07-30T14:14:42+07:00">1 tháng</time>
                                                        </a>
                                                        <a
                                                            class="self-center visible-toolkit-item do-like cursor-pointer">
                                                            <i class="fas fa-thumbs-up me-1"></i>
                                                            <span class="likecount font-semibold">8</span>
                                                        </a>
                                                        <a
                                                            class="self-center visible-toolkit-item do-reply cursor-pointer">
                                                            <i class="fas fa-comment me-1"></i>
                                                            <span class="font-semibold">Trả lời</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="fetch_reply" data-parent="2521433">
                                        Xem thêm 4 trả lời <i class="fas fa-chevron-down" style="margin-left: 4px;"></i>
                                    </div>
                                    <img class="loading" src="/img/loading.svg"
                                        style="width: auto; height: 15px; margin-left: 10px; display: none">

                                </div>
                            </div>
                            <div class="ln-comment-group">
                                <div id="ln-comment-2520989" class="ln-comment-item mt-3 clear" data-comment="2520989"
                                    data-parent="2520989">
                                    <div class="flex gap-1 max-w-full">
                                        <div class="w-[50px]">
                                            <div class="mx-1 my-1">
                                                <img src="https://i.docln.net/lightnovel/users/ua72605-789f329d-2ea9-4f4c-bd35-5460bac637bb.jpg"
                                                    class="w-full rounded-full">
                                            </div>
                                        </div>
                                        <div
                                            class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                                            <div class="flex min-w-0 flex-col px-2">
                                                <div class="flex align-top justify-between">
                                                    <div class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                                                        <div class="self-center">
                                                            <a class="font-bold leading-6 md:leading-7 ln-username "
                                                                href="/thanh-vien/72605">trung mini</a>
                                                        </div>
                                                    </div>
                                                    <div class="px-2 md:px-3 md:py-1 text-lg md:text-xl cursor-pointer"
                                                        x-data="{ show: false }">
                                                        <div class="" @click="show = !show">
                                                            <i class="fas fa-angle-down"></i>
                                                        </div>
                                                        <div class="ln-comment-toolkit" x-show="show"
                                                            @click.outside="show = false" style="display: none">


                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ln-comment-content long-text">
                                                    làm sao để được gỡ ban do cmt ng.u vậy mn ?
                                                </div>
                                                <div class="comment_see_more expand none">Xem thêm</div>
                                                <div class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                                    <a href="/thao-luan/1-mo-trang-thao-luan-gop-y-va-bao-loi?comment_id=2520989#ln-comment-2520989"
                                                        class="text-slate-500">
                                                        <time class="timeago" title="30-07-2024 02:00:56"
                                                            datetime="2024-07-30T02:00:56+07:00">1 tháng</time>
                                                    </a>
                                                    <a class="self-center visible-toolkit-item do-like cursor-pointer">
                                                        <i class="fas fa-thumbs-up me-1"></i>
                                                        <span class="likecount font-semibold"></span>
                                                    </a>
                                                    <a class="self-center visible-toolkit-item do-reply cursor-pointer">
                                                        <i class="fas fa-comment me-1"></i>
                                                        <span class="font-semibold">Trả lời</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="ln-comment-reply">
                                    <div id="ln-comment-2520990" class="ln-comment-item mt-3 clear"
                                        data-comment="2520990" data-parent="2520989">
                                        <div class="flex gap-1 max-w-full">
                                            <div class="w-[50px]">
                                                <div class="mx-1 my-1">
                                                    <img src="https://i2.docln.net/ln/users/avatars/u103314-e630f458-37d8-47f5-ad08-4efb2059fa59.jpg"
                                                        class="w-full rounded-full">
                                                </div>
                                            </div>
                                            <div
                                                class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                                                <div class="flex min-w-0 flex-col px-2">
                                                    <div class="flex align-top justify-between">
                                                        <div class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                                                            <div class="self-center">
                                                                <a class="font-bold leading-6 md:leading-7 ln-username "
                                                                    href="/thanh-vien/103314">Mming</a>
                                                            </div>
                                                        </div>
                                                        <div class="px-2 md:px-3 md:py-1 text-lg md:text-xl cursor-pointer"
                                                            x-data="{ show: false }">
                                                            <div class="" @click="show = !show">
                                                                <i class="fas fa-angle-down"></i>
                                                            </div>
                                                            <div class="ln-comment-toolkit" x-show="show"
                                                                @click.outside="show = false" style="display: none">


                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ln-comment-content long-text">
                                                        Đợi dịp quan trọng được unban ấy. Kiểu hoàng thượng lên ngôi thì sẽ
                                                        ân xá cho tù nhân ấy. Tôi dự đoán 2026 sẽ có nhé!
                                                    </div>
                                                    <div class="comment_see_more expand none">Xem thêm</div>
                                                    <div class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                                        <a href="/thao-luan/1-mo-trang-thao-luan-gop-y-va-bao-loi?comment_id=2520989&amp;reply_id=2520990#ln-comment-2520990"
                                                            class="text-slate-500">
                                                            <time class="timeago" title="30-07-2024 02:03:16"
                                                                datetime="2024-07-30T02:03:16+07:00">1 tháng</time>
                                                        </a>
                                                        <a
                                                            class="self-center visible-toolkit-item do-like cursor-pointer">
                                                            <i class="fas fa-thumbs-up me-1"></i>
                                                            <span class="likecount font-semibold"></span>
                                                        </a>
                                                        <a
                                                            class="self-center visible-toolkit-item do-reply cursor-pointer">
                                                            <i class="fas fa-comment me-1"></i>
                                                            <span class="font-semibold">Trả lời</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="ln-comment-2521028" class="ln-comment-item mt-3 clear"
                                        data-comment="2521028" data-parent="2520989">
                                        <div class="flex gap-1 max-w-full">
                                            <div class="w-[50px]">
                                                <div class="mx-1 my-1">
                                                    <img src="https://i.docln.net/lightnovel/users/ua72605-789f329d-2ea9-4f4c-bd35-5460bac637bb.jpg"
                                                        class="w-full rounded-full">
                                                </div>
                                            </div>
                                            <div
                                                class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                                                <div class="flex min-w-0 flex-col px-2">
                                                    <div class="flex align-top justify-between">
                                                        <div class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                                                            <div class="self-center">
                                                                <a class="font-bold leading-6 md:leading-7 ln-username "
                                                                    href="/thanh-vien/72605">trung mini</a>
                                                            </div>
                                                        </div>
                                                        <div class="px-2 md:px-3 md:py-1 text-lg md:text-xl cursor-pointer"
                                                            x-data="{ show: false }">
                                                            <div class="" @click="show = !show">
                                                                <i class="fas fa-angle-down"></i>
                                                            </div>
                                                            <div class="ln-comment-toolkit" x-show="show"
                                                                @click.outside="show = false" style="display: none">


                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ln-comment-content long-text">
                                                        sự việc này từng có tiền lệ trong lịch sử chưa bác ?
                                                    </div>
                                                    <div class="comment_see_more expand none">Xem thêm</div>
                                                    <div class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                                        <a href="/thao-luan/1-mo-trang-thao-luan-gop-y-va-bao-loi?comment_id=2520989&amp;reply_id=2521028#ln-comment-2521028"
                                                            class="text-slate-500">
                                                            <time class="timeago" title="30-07-2024 03:53:34"
                                                                datetime="2024-07-30T03:53:34+07:00">1 tháng</time>
                                                        </a>
                                                        <a
                                                            class="self-center visible-toolkit-item do-like cursor-pointer">
                                                            <i class="fas fa-thumbs-up me-1"></i>
                                                            <span class="likecount font-semibold"></span>
                                                        </a>
                                                        <a
                                                            class="self-center visible-toolkit-item do-reply cursor-pointer">
                                                            <i class="fas fa-comment me-1"></i>
                                                            <span class="font-semibold">Trả lời</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="fetch_reply" data-parent="2520989">
                                        Xem thêm 4 trả lời <i class="fas fa-chevron-down" style="margin-left: 4px;"></i>
                                    </div>
                                    <img class="loading" src="/img/loading.svg"
                                        style="width: auto; height: 15px; margin-left: 10px; display: none">

                                </div>
                            </div>
                            <div class="ln-comment-group">
                                <div id="ln-comment-2520036" class="ln-comment-item mt-3 clear" data-comment="2520036"
                                    data-parent="2520036">
                                    <div class="flex gap-1 max-w-full">
                                        <div class="w-[50px]">
                                            <div class="mx-1 my-1">
                                                <img src="https://i2.docln.net/ln/users/avatars/u180473-a6e62e30-96f1-46ef-8592-aeb6bcadb7ae.jpg"
                                                    class="w-full rounded-full">
                                            </div>
                                        </div>
                                        <div
                                            class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                                            <div class="flex min-w-0 flex-col px-2">
                                                <div class="flex align-top justify-between">
                                                    <div class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                                                        <div class="self-center">
                                                            <a class="font-bold leading-6 md:leading-7 ln-username "
                                                                href="/thanh-vien/180473">Prancie</a>
                                                        </div>
                                                    </div>
                                                    <div class="px-2 md:px-3 md:py-1 text-lg md:text-xl cursor-pointer"
                                                        x-data="{ show: false }">
                                                        <div class="" @click="show = !show">
                                                            <i class="fas fa-angle-down"></i>
                                                        </div>
                                                        <div class="ln-comment-toolkit" x-show="show"
                                                            @click.outside="show = false" style="display: none">


                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ln-comment-content long-text">
                                                    tại sao quá thời gian thì không được sửa bình luận nữa
                                                </div>
                                                <div class="comment_see_more expand none">Xem thêm</div>
                                                <div class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                                    <a href="/thao-luan/1-mo-trang-thao-luan-gop-y-va-bao-loi?comment_id=2520036#ln-comment-2520036"
                                                        class="text-slate-500">
                                                        <time class="timeago" title="29-07-2024 20:09:01"
                                                            datetime="2024-07-29T20:09:01+07:00">1 tháng</time>
                                                    </a>
                                                    <a class="self-center visible-toolkit-item do-like cursor-pointer">
                                                        <i class="fas fa-thumbs-up me-1"></i>
                                                        <span class="likecount font-semibold"></span>
                                                    </a>
                                                    <a class="self-center visible-toolkit-item do-reply cursor-pointer">
                                                        <i class="fas fa-comment me-1"></i>
                                                        <span class="font-semibold">Trả lời</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="ln-comment-reply">
                                    <div id="ln-comment-2520065" class="ln-comment-item mt-3 clear"
                                        data-comment="2520065" data-parent="2520036">
                                        <div class="flex gap-1 max-w-full">
                                            <div class="w-[50px]">
                                                <div class="mx-1 my-1">
                                                    <img src="https://i2.docln.net/ln/users/avatars/u84909-c6837b6a-5b92-4baf-b485-84032757ef11.jpg"
                                                        class="w-full rounded-full">
                                                </div>
                                            </div>
                                            <div
                                                class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                                                <div class="flex min-w-0 flex-col px-2">
                                                    <div class="flex align-top justify-between">
                                                        <div class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                                                            <div class="self-center">
                                                                <a class="font-bold leading-6 md:leading-7 ln-username "
                                                                    href="/thanh-vien/84909">Nararaki Shiki</a>
                                                            </div>
                                                            <div class="self-center">
                                                                <div
                                                                    class="flex gap-1 rounded-sm bg-[#e3953e]/50 dark:bg-[#9c662a]/50 px-1.5 py-0.5 align-middle text-[10px] font-bold text-[#9c662a] dark:text-[#ecd8c2]">
                                                                    <img class="my-auto h-[14px]"
                                                                        src="/img/badge/cvter2.png">
                                                                    <div class="leading-4">AI MASTER</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="px-2 md:px-3 md:py-1 text-lg md:text-xl cursor-pointer"
                                                            x-data="{ show: false }">
                                                            <div class="" @click="show = !show">
                                                                <i class="fas fa-angle-down"></i>
                                                            </div>
                                                            <div class="ln-comment-toolkit" x-show="show"
                                                                @click.outside="show = false" style="display: none">


                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ln-comment-content long-text">
                                                        vì sửa bình luận chỉ để chỉnh lại lỗi sai chính tả hoặc ý muốn
                                                        truyền đạt trong một thời gian ngắn thôi, chứ không thì loạn hết cả
                                                        lên khi có thể tuỳ chỉnh lại cả một cuộc hội thoại dài đã được hình
                                                        thành làm sai lệch bản chất à
                                                    </div>
                                                    <div class="comment_see_more expand none">Xem thêm</div>
                                                    <div class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                                        <a href="/thao-luan/1-mo-trang-thao-luan-gop-y-va-bao-loi?comment_id=2520036&amp;reply_id=2520065#ln-comment-2520065"
                                                            class="text-slate-500">
                                                            <time class="timeago" title="29-07-2024 20:21:32"
                                                                datetime="2024-07-29T20:21:32+07:00">1 tháng</time>
                                                        </a>
                                                        <a
                                                            class="self-center visible-toolkit-item do-like cursor-pointer">
                                                            <i class="fas fa-thumbs-up me-1"></i>
                                                            <span class="likecount font-semibold"></span>
                                                        </a>
                                                        <a
                                                            class="self-center visible-toolkit-item do-reply cursor-pointer">
                                                            <i class="fas fa-comment me-1"></i>
                                                            <span class="font-semibold">Trả lời</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="ln-comment-2520073" class="ln-comment-item mt-3 clear"
                                        data-comment="2520073" data-parent="2520036">
                                        <div class="flex gap-1 max-w-full">
                                            <div class="w-[50px]">
                                                <div class="mx-1 my-1">
                                                    <img src="https://i2.docln.net/ln/users/avatars/u180473-a6e62e30-96f1-46ef-8592-aeb6bcadb7ae.jpg"
                                                        class="w-full rounded-full">
                                                </div>
                                            </div>
                                            <div
                                                class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                                                <div class="flex min-w-0 flex-col px-2">
                                                    <div class="flex align-top justify-between">
                                                        <div class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                                                            <div class="self-center">
                                                                <a class="font-bold leading-6 md:leading-7 ln-username "
                                                                    href="/thanh-vien/180473">Prancie</a>
                                                            </div>
                                                        </div>
                                                        <div class="px-2 md:px-3 md:py-1 text-lg md:text-xl cursor-pointer"
                                                            x-data="{ show: false }">
                                                            <div class="" @click="show = !show">
                                                                <i class="fas fa-angle-down"></i>
                                                            </div>
                                                            <div class="ln-comment-toolkit" x-show="show"
                                                                @click.outside="show = false" style="display: none">


                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ln-comment-content long-text">
                                                        vậy sao không có chỗ cho xem bản gốc của bình luận, nếu không ai
                                                        rảnh để thêm tính năng đó thì thôi vậy
                                                    </div>
                                                    <div class="comment_see_more expand none">Xem thêm</div>
                                                    <div class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                                        <a href="/thao-luan/1-mo-trang-thao-luan-gop-y-va-bao-loi?comment_id=2520036&amp;reply_id=2520073#ln-comment-2520073"
                                                            class="text-slate-500">
                                                            <time class="timeago" title="29-07-2024 20:24:41"
                                                                datetime="2024-07-29T20:24:41+07:00">1 tháng</time>
                                                        </a>
                                                        <a
                                                            class="self-center visible-toolkit-item do-like cursor-pointer">
                                                            <i class="fas fa-thumbs-up me-1"></i>
                                                            <span class="likecount font-semibold"></span>
                                                        </a>
                                                        <a
                                                            class="self-center visible-toolkit-item do-reply cursor-pointer">
                                                            <i class="fas fa-comment me-1"></i>
                                                            <span class="font-semibold">Trả lời</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="fetch_reply" data-parent="2520036">
                                        Xem thêm 2 trả lời <i class="fas fa-chevron-down" style="margin-left: 4px;"></i>
                                    </div>
                                    <img class="loading" src="/img/loading.svg"
                                        style="width: auto; height: 15px; margin-left: 10px; display: none">

                                </div>
                            </div>
                            <div class="ln-comment-group">
                                <div id="ln-comment-2516648" class="ln-comment-item mt-3 clear" data-comment="2516648"
                                    data-parent="2516648">
                                    <div class="flex gap-1 max-w-full">
                                        <div class="w-[50px]">
                                            <div class="mx-1 my-1">
                                                <img src="https://i2.docln.net/ln/users/avatars/u140843-9f8dad19-1eea-46c3-8921-e6d098f19557.jpg"
                                                    class="w-full rounded-full">
                                            </div>
                                        </div>
                                        <div
                                            class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                                            <div class="flex min-w-0 flex-col px-2">
                                                <div class="flex align-top justify-between">
                                                    <div class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                                                        <div class="self-center">
                                                            <a class="font-bold leading-6 md:leading-7 ln-username "
                                                                href="/thanh-vien/140843">Wibu trường C</a>
                                                        </div>
                                                        <div class="self-center">
                                                            <div
                                                                class="flex gap-1 rounded-sm bg-[#49d0b2]/50 dark:bg-[#36a189]/50 px-1.5 py-0.5 align-middle text-[10px] font-bold text-[#36a189] dark:text-[#eaeaea]">
                                                                <img class="my-auto h-[14px]"
                                                                    src="/img/badge/trans5.png">
                                                                <div class="leading-4">TRANS</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="px-2 md:px-3 md:py-1 text-lg md:text-xl cursor-pointer"
                                                        x-data="{ show: false }">
                                                        <div class="" @click="show = !show">
                                                            <i class="fas fa-angle-down"></i>
                                                        </div>
                                                        <div class="ln-comment-toolkit" x-show="show"
                                                            @click.outside="show = false" style="display: none">


                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ln-comment-content long-text">
                                                    Có thể thêm chức năng tìm nhóm dịch hay tìm người đc ko ạ :)
                                                </div>
                                                <div class="comment_see_more expand none">Xem thêm</div>
                                                <div class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                                    <a href="/thao-luan/1-mo-trang-thao-luan-gop-y-va-bao-loi?comment_id=2516648#ln-comment-2516648"
                                                        class="text-slate-500">
                                                        <time class="timeago" title="27-07-2024 21:40:03"
                                                            datetime="2024-07-27T21:40:03+07:00">1 tháng</time>
                                                    </a>
                                                    <a class="self-center visible-toolkit-item do-like cursor-pointer">
                                                        <i class="fas fa-thumbs-up me-1"></i>
                                                        <span class="likecount font-semibold"></span>
                                                    </a>
                                                    <a class="self-center visible-toolkit-item do-reply cursor-pointer">
                                                        <i class="fas fa-comment me-1"></i>
                                                        <span class="font-semibold">Trả lời</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="ln-comment-reply">
                                    <div id="ln-comment-2516744" class="ln-comment-item mt-3 clear"
                                        data-comment="2516744" data-parent="2516648">
                                        <div class="flex gap-1 max-w-full">
                                            <div class="w-[50px]">
                                                <div class="mx-1 my-1">
                                                    <img src="https://i.docln.net/lightnovel/users/ua1-58948009-0e87-4096-8f67-11766a67792c.jpg"
                                                        class="w-full rounded-full">
                                                </div>
                                            </div>
                                            <div
                                                class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                                                <div class="flex min-w-0 flex-col px-2">
                                                    <div class="flex align-top justify-between">
                                                        <div class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                                                            <div class="self-center">
                                                                <a class="font-bold leading-6 md:leading-7 ln-username glow_text"
                                                                    href="/thanh-vien/1">Embers</a>
                                                            </div>
                                                            <div class="self-center">
                                                                <div
                                                                    class="flex gap-1 rounded-sm bg-[#FDBF00]/50 dark:bg-[#CC1E0D]/50 px-1.5 py-0.5 align-middle text-[10px] font-bold text-[#CC1E0D] dark:text-[#FDBF00]">
                                                                    <img class="my-auto h-[14px]"
                                                                        src="/img/badge/admin3.png">
                                                                    <div class="leading-4">ADMIN</div>
                                                                </div>
                                                            </div>
                                                            <div class="self-center">
                                                                <div
                                                                    class="flex gap-1 rounded-sm bg-[#49d0b2]/50 dark:bg-[#36a189]/50 px-1.5 py-0.5 align-middle text-[10px] font-bold text-[#36a189] dark:text-[#eaeaea]">
                                                                    <img class="my-auto h-[14px]"
                                                                        src="/img/badge/trans5.png">
                                                                    <div class="leading-4">TRANS</div>
                                                                </div>
                                                            </div>
                                                            <div class="self-center">
                                                                <div
                                                                    class="flex gap-1 rounded-sm bg-[#e3953e]/50 dark:bg-[#9c662a]/50 px-1.5 py-0.5 align-middle text-[10px] font-bold text-[#9c662a] dark:text-[#ecd8c2]">
                                                                    <img class="my-auto h-[14px]"
                                                                        src="/img/badge/cvter2.png">
                                                                    <div class="leading-4">AI MASTER</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="px-2 md:px-3 md:py-1 text-lg md:text-xl cursor-pointer"
                                                            x-data="{ show: false }">
                                                            <div class="" @click="show = !show">
                                                                <i class="fas fa-angle-down"></i>
                                                            </div>
                                                            <div class="ln-comment-toolkit" x-show="show"
                                                                @click.outside="show = false" style="display: none">


                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ln-comment-content long-text">
                                                        Tìm trên google với cú pháp: từ khóa site:docln.net
                                                    </div>
                                                    <div class="comment_see_more expand none">Xem thêm</div>
                                                    <div class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                                        <a href="/thao-luan/1-mo-trang-thao-luan-gop-y-va-bao-loi?comment_id=2516648&amp;reply_id=2516744#ln-comment-2516744"
                                                            class="text-slate-500">
                                                            <time class="timeago" title="27-07-2024 22:15:57"
                                                                datetime="2024-07-27T22:15:57+07:00">1 tháng</time>
                                                        </a>
                                                        <a
                                                            class="self-center visible-toolkit-item do-like cursor-pointer">
                                                            <i class="fas fa-thumbs-up me-1"></i>
                                                            <span class="likecount font-semibold">4</span>
                                                        </a>
                                                        <a
                                                            class="self-center visible-toolkit-item do-reply cursor-pointer">
                                                            <i class="fas fa-comment me-1"></i>
                                                            <span class="font-semibold">Trả lời</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="ln-comment-group">
                                <div id="ln-comment-2515667" class="ln-comment-item mt-3 clear" data-comment="2515667"
                                    data-parent="2515667">
                                    <div class="flex gap-1 max-w-full">
                                        <div class="w-[50px]">
                                            <div class="mx-1 my-1">
                                                <img src="https://i.docln.net/lightnovel/users/ua55524-830f68c0-5833-45c6-a519-34d31d81e498.jpg"
                                                    class="w-full rounded-full">
                                            </div>
                                        </div>
                                        <div
                                            class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                                            <div class="flex min-w-0 flex-col px-2">
                                                <div class="flex align-top justify-between">
                                                    <div class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                                                        <div class="self-center">
                                                            <a class="font-bold leading-6 md:leading-7 ln-username "
                                                                href="/thanh-vien/55524">Shirogane Akira</a>
                                                        </div>
                                                    </div>
                                                    <div class="px-2 md:px-3 md:py-1 text-lg md:text-xl cursor-pointer"
                                                        x-data="{ show: false }">
                                                        <div class="" @click="show = !show">
                                                            <i class="fas fa-angle-down"></i>
                                                        </div>
                                                        <div class="ln-comment-toolkit" x-show="show"
                                                            @click.outside="show = false" style="display: none">


                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ln-comment-content long-text">
                                                    Về quy định B6 đối với OLN,OWN. <br>
                                                    Tôi có thắc mắc là nếu trong trường hợp tôi được bên phía tác giả truyện
                                                    đã đăng tải ấy đồng ý để đăng tải truyện dưới tên tác giả ấy. Thì liệu
                                                    sao chép(và chỉnh sửa lại về phần chính tả, v.v) trong trường hợp này có
                                                    vi phạm hay là không.
                                                </div>
                                                <div class="comment_see_more expand none">Xem thêm</div>
                                                <div class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                                    <a href="/thao-luan/1-mo-trang-thao-luan-gop-y-va-bao-loi?comment_id=2515667#ln-comment-2515667"
                                                        class="text-slate-500">
                                                        <time class="timeago" title="27-07-2024 12:06:18"
                                                            datetime="2024-07-27T12:06:18+07:00">1 tháng</time>
                                                    </a>
                                                    <a class="self-center visible-toolkit-item do-like cursor-pointer">
                                                        <i class="fas fa-thumbs-up me-1"></i>
                                                        <span class="likecount font-semibold"></span>
                                                    </a>
                                                    <a class="self-center visible-toolkit-item do-reply cursor-pointer">
                                                        <i class="fas fa-comment me-1"></i>
                                                        <span class="font-semibold">Trả lời</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="ln-comment-reply">
                                    <div id="ln-comment-2515671" class="ln-comment-item mt-3 clear"
                                        data-comment="2515671" data-parent="2515667">
                                        <div class="flex gap-1 max-w-full">
                                            <div class="w-[50px]">
                                                <div class="mx-1 my-1">
                                                    <img src="https://i2.docln.net/ln/users/avatars/u92943-6d3836a7-721e-40c2-86b2-b81191e5346c.jpg"
                                                        class="w-full rounded-full">
                                                </div>
                                            </div>
                                            <div
                                                class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                                                <div class="flex min-w-0 flex-col px-2">
                                                    <div class="flex align-top justify-between">
                                                        <div class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                                                            <div class="self-center">
                                                                <a class="font-bold leading-6 md:leading-7 ln-username "
                                                                    href="/thanh-vien/92943">《《HakuTVT》》</a>
                                                            </div>
                                                        </div>
                                                        <div class="px-2 md:px-3 md:py-1 text-lg md:text-xl cursor-pointer"
                                                            x-data="{ show: false }">
                                                            <div class="" @click="show = !show">
                                                                <i class="fas fa-angle-down"></i>
                                                            </div>
                                                            <div class="ln-comment-toolkit" x-show="show"
                                                                @click.outside="show = false" style="display: none">


                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ln-comment-content long-text">
                                                        Qua <a
                                                            href="2266-thao-luan-cho-tac-gia-oln?comment_id=2515304&amp;reply_id=2515365#ln-comment-2515365">Đây</a>
                                                        hỏi á ông ơi
                                                    </div>
                                                    <div class="comment_see_more expand none">Xem thêm</div>
                                                    <div class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                                        <a href="/thao-luan/1-mo-trang-thao-luan-gop-y-va-bao-loi?comment_id=2515667&amp;reply_id=2515671#ln-comment-2515671"
                                                            class="text-slate-500">
                                                            <time class="timeago" title="27-07-2024 12:10:16"
                                                                datetime="2024-07-27T12:10:16+07:00">1 tháng</time>
                                                        </a>
                                                        <a
                                                            class="self-center visible-toolkit-item do-like cursor-pointer">
                                                            <i class="fas fa-thumbs-up me-1"></i>
                                                            <span class="likecount font-semibold">1</span>
                                                        </a>
                                                        <a
                                                            class="self-center visible-toolkit-item do-reply cursor-pointer">
                                                            <i class="fas fa-comment me-1"></i>
                                                            <span class="font-semibold">Trả lời</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="ln-comment-group">
                                <div id="ln-comment-2513953" class="ln-comment-item mt-3 clear" data-comment="2513953"
                                    data-parent="2513953">
                                    <div class="flex gap-1 max-w-full">
                                        <div class="w-[50px]">
                                            <div class="mx-1 my-1">
                                                <img src="https://i2.docln.net/ln/users/avatars/u195459-aabd8425-c66d-4048-9d28-44f8b701729c.jpg"
                                                    class="w-full rounded-full">
                                            </div>
                                        </div>
                                        <div
                                            class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                                            <div class="flex min-w-0 flex-col px-2">
                                                <div class="flex align-top justify-between">
                                                    <div class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                                                        <div class="self-center">
                                                            <a class="font-bold leading-6 md:leading-7 ln-username "
                                                                href="/thanh-vien/195459">KIM CHỈ</a>
                                                        </div>
                                                    </div>
                                                    <div class="px-2 md:px-3 md:py-1 text-lg md:text-xl cursor-pointer"
                                                        x-data="{ show: false }">
                                                        <div class="" @click="show = !show">
                                                            <i class="fas fa-angle-down"></i>
                                                        </div>
                                                        <div class="ln-comment-toolkit" x-show="show"
                                                            @click.outside="show = false" style="display: none">


                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ln-comment-content long-text">
                                                    Giải thik tôi cái này đi ad:<br>
                                                    - chú thích bừa bãi???? Cái này theo tôi tùy tác giả mà<br>
                                                    - vi phạm A4 là gì??<br>
                                                    - Lạm quá nhiều số???<br>
                                                    - Tường chữ là j???
                                                </div>
                                                <div class="comment_see_more expand">Xem thêm</div>
                                                <div class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                                    <a href="/thao-luan/1-mo-trang-thao-luan-gop-y-va-bao-loi?comment_id=2513953#ln-comment-2513953"
                                                        class="text-slate-500">
                                                        <time class="timeago" title="26-07-2024 19:27:54"
                                                            datetime="2024-07-26T19:27:54+07:00">1 tháng</time>
                                                    </a>
                                                    <a class="self-center visible-toolkit-item do-like cursor-pointer">
                                                        <i class="fas fa-thumbs-up me-1"></i>
                                                        <span class="likecount font-semibold"></span>
                                                    </a>
                                                    <a class="self-center visible-toolkit-item do-reply cursor-pointer">
                                                        <i class="fas fa-comment me-1"></i>
                                                        <span class="font-semibold">Trả lời</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="ln-comment-reply">
                                    <div id="ln-comment-2513964" class="ln-comment-item mt-3 clear"
                                        data-comment="2513964" data-parent="2513953">
                                        <div class="flex gap-1 max-w-full">
                                            <div class="w-[50px]">
                                                <div class="mx-1 my-1">
                                                    <img src="https://i2.docln.net/ln/users/avatars/u171420-81b74335-2304-4cc1-bcf7-8b6f268d9c40.jpg"
                                                        class="w-full rounded-full">
                                                </div>
                                            </div>
                                            <div
                                                class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                                                <div class="flex min-w-0 flex-col px-2">
                                                    <div class="flex align-top justify-between">
                                                        <div class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                                                            <div class="self-center">
                                                                <a class="font-bold leading-6 md:leading-7 ln-username "
                                                                    href="/thanh-vien/171420">Prince</a>
                                                            </div>
                                                        </div>
                                                        <div class="px-2 md:px-3 md:py-1 text-lg md:text-xl cursor-pointer"
                                                            x-data="{ show: false }">
                                                            <div class="" @click="show = !show">
                                                                <i class="fas fa-angle-down"></i>
                                                            </div>
                                                            <div class="ln-comment-toolkit" x-show="show"
                                                                @click.outside="show = false" style="display: none">


                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ln-comment-content long-text">
                                                        Qua <a
                                                            href="2266-thao-luan-cho-tac-gia-oln?comment_id=2513119&amp;reply_id=2513791#ln-comment-2513791">đây</a>
                                                        mà hỏi nhé.
                                                    </div>
                                                    <div class="comment_see_more expand none">Xem thêm</div>
                                                    <div class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                                        <a href="/thao-luan/1-mo-trang-thao-luan-gop-y-va-bao-loi?comment_id=2513953&amp;reply_id=2513964#ln-comment-2513964"
                                                            class="text-slate-500">
                                                            <time class="timeago" title="26-07-2024 19:31:33"
                                                                datetime="2024-07-26T19:31:33+07:00">1 tháng</time>
                                                        </a>
                                                        <a
                                                            class="self-center visible-toolkit-item do-like cursor-pointer">
                                                            <i class="fas fa-thumbs-up me-1"></i>
                                                            <span class="likecount font-semibold"></span>
                                                        </a>
                                                        <a
                                                            class="self-center visible-toolkit-item do-reply cursor-pointer">
                                                            <i class="fas fa-comment me-1"></i>
                                                            <span class="font-semibold">Trả lời</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="ln-comment-2513966" class="ln-comment-item mt-3 clear"
                                        data-comment="2513966" data-parent="2513953">
                                        <div class="flex gap-1 max-w-full">
                                            <div class="w-[50px]">
                                                <div class="mx-1 my-1">
                                                    <img src="https://i2.docln.net/ln/users/avatars/u171420-81b74335-2304-4cc1-bcf7-8b6f268d9c40.jpg"
                                                        class="w-full rounded-full">
                                                </div>
                                            </div>
                                            <div
                                                class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                                                <div class="flex min-w-0 flex-col px-2">
                                                    <div class="flex align-top justify-between">
                                                        <div class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                                                            <div class="self-center">
                                                                <a class="font-bold leading-6 md:leading-7 ln-username "
                                                                    href="/thanh-vien/171420">Prince</a>
                                                            </div>
                                                        </div>
                                                        <div class="px-2 md:px-3 md:py-1 text-lg md:text-xl cursor-pointer"
                                                            x-data="{ show: false }">
                                                            <div class="" @click="show = !show">
                                                                <i class="fas fa-angle-down"></i>
                                                            </div>
                                                            <div class="ln-comment-toolkit" x-show="show"
                                                                @click.outside="show = false" style="display: none">


                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ln-comment-content long-text">
                                                        Hôm qua đưa link mà anh bạn chả đọc gì cả nhỉ.
                                                    </div>
                                                    <div class="comment_see_more expand none">Xem thêm</div>
                                                    <div class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                                        <a href="/thao-luan/1-mo-trang-thao-luan-gop-y-va-bao-loi?comment_id=2513953&amp;reply_id=2513966#ln-comment-2513966"
                                                            class="text-slate-500">
                                                            <time class="timeago" title="26-07-2024 19:31:57"
                                                                datetime="2024-07-26T19:31:57+07:00">1 tháng</time>
                                                        </a>
                                                        <a
                                                            class="self-center visible-toolkit-item do-like cursor-pointer">
                                                            <i class="fas fa-thumbs-up me-1"></i>
                                                            <span class="likecount font-semibold"></span>
                                                        </a>
                                                        <a
                                                            class="self-center visible-toolkit-item do-reply cursor-pointer">
                                                            <i class="fas fa-comment me-1"></i>
                                                            <span class="font-semibold">Trả lời</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="fetch_reply" data-parent="2513953">
                                        Xem thêm 11 trả lời <i class="fas fa-chevron-down"
                                            style="margin-left: 4px;"></i>
                                    </div>
                                    <img class="loading" src="/img/loading.svg"
                                        style="width: auto; height: 15px; margin-left: 10px; display: none">

                                </div>
                            </div>

                            <div class="ln-comment-page">
                                <div class="pagination-footer">
                                    <div class="pagination_wrap">
                                        <a href="" class="paging_item paging_prevnext prev  disabled ">Trước</a>

                                        <a href="https://docln.net/thao-luan/1-mo-trang-thao-luan-gop-y-va-bao-loi?page=2"
                                            class="paging_item paging_prevnext next">Sau</a>
                                    </div>
                                </div>
                            </div>
                        </main>

                        <script>
                            var token = 'jwWx2XZgKdafViWEIuBZwpYwXT8I1GyckmudwpxK';
                            var comment_type = 'page';
                            var comment_typeid = '1';
                        </script>

                        <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.2.1/tinymce.min.js" referrerpolicy="origin"></script>
                        <script>
                            tinymce.init({
                                selector: 'textarea',
                                inline: false,
                                height: 200,
                                skin: 'oxide',
                                content_css: 'default',
                                branding: false,
                                menubar: false,
                                contextmenu: false,
                                entities: '160,nbsp,38,amp,60,lt,62,gt',
                                paste_word_valid_elements: 'b,strong,i,em,u,s,a,p,br,img',
                                element_format: 'html',
                                formats: {
                                    strikethrough: {
                                        inline: 's',
                                        remove: 'all'
                                    },
                                    underline: {
                                        inline: 'u',
                                        remove: 'all'
                                    },
                                },
                                plugins: 'wordcount link image code fullscreen paste emoticons',
                                toolbar: 'emoticons undo redo | bold italic underline strikethrough forecolor | link image | removeformat | fullscreen'
                            });
                        </script>
                    </section>


                </main>
            </section>
        </div>
    </main>
@endsection
