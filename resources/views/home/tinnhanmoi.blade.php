@extends('home.layout.master')
@section('content')
    <div class="page-top-group  at-index ">
        @include('partials.banner')
    </div>

    <main id="mainpart" class="new-pm-page" style="min-height: 181px;">
        <header class="page-title">
            <div class="page-name_wrapper">
                <div class="container">
                    <span class="page-name"><i class="fas fa-circle"></i>Gửi thư mới</span>
                </div>
            </div>
        </header>
        <div class="container">
            <section class="new-private-messages">
                @if (session('success'))
                    <div class="alert alert-success" style="background-color: rgb(90, 205, 90)">
                        {{ session('success') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="post" action="{{ route('mail.send') }}">
                    {{ csrf_field() }}
                    <div class="mail-attribute">
                        <div class="mail-attribute-name">Người nhận</div>
                        <input class="form-control mail-attribute-input" name="receive_user" size="40"
                            placeholder="Bắt buộc" value="" type="text">

                    </div>
                    <div class="mail-attribute">
                        <div class="mail-attribute-name">Tên thư</div>
                        <input class="form-control mail-attribute-input" name="title" size="40"
                            placeholder="Bắt buộc" value="" type="text">

                    </div>
                    <div class="mail-attribute">
                        <div class="mail-attribute-name">Nội dung</div>
                        <textarea class="comment_content" name="content" style="width: 100%; height: 100px" aria-hidden="true"
                            placeholder="Bắt buộc"></textarea>
                    </div>

                    <div id="ln-comment-submit" class="ln-comment-form clear">
                        <div class="comment_toolkit clear">
                            <input type="submit" class="button" value="Gửi đi">
                        </div>
                    </div>
                </form>

            </section>


            {{-- <main class="ln-comment-body">
                        <div id="ln-comment-submit" class="ln-comment-form clear">

                            <div class="mail-attribute-name">Nội dung</div>
                            <textarea class="comment_content" name="content" id="content" style="display: none;" aria-hidden="true"></textarea>
                            <div role="application" class="tox tox-tinymce" style="visibility: hidden; height: 200px;">
                                <div class="tox-editor-container">
                                    <div data-alloy-vertical-dir="toptobottom" class="tox-editor-header">
                                        <div role="group" class="tox-toolbar-overlord">
                                            <div role="group" class="tox-toolbar__primary">
                                                <div title="" role="toolbar" data-alloy-tabstop="true" tabindex="-1"
                                                    class="tox-toolbar__group"><button aria-label="Undo" title="Undo"
                                                        type="button" tabindex="-1" class="tox-tbtn tox-tbtn--disabled"
                                                        aria-disabled="true"><span class="tox-icon tox-tbtn__icon-wrap"><svg
                                                                width="24" height="24">
                                                                <path
                                                                    d="M6.4 8H12c3.7 0 6.2 2 6.8 5.1.6 2.7-.4 5.6-2.3 6.8a1 1 0 0 1-1-1.8c1.1-.6 1.8-2.7 1.4-4.6-.5-2.1-2.1-3.5-4.9-3.5H6.4l3.3 3.3a1 1 0 1 1-1.4 1.4l-5-5a1 1 0 0 1 0-1.4l5-5a1 1 0 0 1 1.4 1.4L6.4 8z"
                                                                    fill-rule="nonzero"></path>
                                                            </svg></span></button><button aria-label="Redo" title="Redo"
                                                        type="button" tabindex="-1" class="tox-tbtn tox-tbtn--disabled"
                                                        aria-disabled="true"><span class="tox-icon tox-tbtn__icon-wrap"><svg
                                                                width="24" height="24">
                                                                <path
                                                                    d="M17.6 10H12c-2.8 0-4.4 1.4-4.9 3.5-.4 2 .3 4 1.4 4.6a1 1 0 1 1-1 1.8c-2-1.2-2.9-4.1-2.3-6.8.6-3 3-5.1 6.8-5.1h5.6l-3.3-3.3a1 1 0 1 1 1.4-1.4l5 5a1 1 0 0 1 0 1.4l-5 5a1 1 0 0 1-1.4-1.4l3.3-3.3z"
                                                                    fill-rule="nonzero"></path>
                                                            </svg></span></button></div>
                                                <div title="" role="toolbar" data-alloy-tabstop="true" tabindex="-1"
                                                    class="tox-toolbar__group"><button aria-label="Bold" title="Bold"
                                                        type="button" tabindex="-1" class="tox-tbtn"
                                                        aria-pressed="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg
                                                                width="24" height="24">
                                                                <path
                                                                    d="M7.8 19c-.3 0-.5 0-.6-.2l-.2-.5V5.7c0-.2 0-.4.2-.5l.6-.2h5c1.5 0 2.7.3 3.5 1 .7.6 1.1 1.4 1.1 2.5a3 3 0 0 1-.6 1.9c-.4.6-1 1-1.6 1.2.4.1.9.3 1.3.6s.8.7 1 1.2c.4.4.5 1 .5 1.6 0 1.3-.4 2.3-1.3 3-.8.7-2.1 1-3.8 1H7.8zm5-8.3c.6 0 1.2-.1 1.6-.5.4-.3.6-.7.6-1.3 0-1.1-.8-1.7-2.3-1.7H9.3v3.5h3.4zm.5 6c.7 0 1.3-.1 1.7-.4.4-.4.6-.9.6-1.5s-.2-1-.7-1.4c-.4-.3-1-.4-2-.4H9.4v3.8h4z"
                                                                    fill-rule="evenodd"></path>
                                                            </svg></span></button><button aria-label="Italic" title="Italic"
                                                        type="button" tabindex="-1" class="tox-tbtn"
                                                        aria-pressed="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg
                                                                width="24" height="24">
                                                                <path
                                                                    d="M16.7 4.7l-.1.9h-.3c-.6 0-1 0-1.4.3-.3.3-.4.6-.5 1.1l-2.1 9.8v.6c0 .5.4.8 1.4.8h.2l-.2.8H8l.2-.8h.2c1.1 0 1.8-.5 2-1.5l2-9.8.1-.5c0-.6-.4-.8-1.4-.8h-.3l.2-.9h5.8z"
                                                                    fill-rule="evenodd"></path>
                                                            </svg></span></button><button aria-label="Underline"
                                                        title="Underline" type="button" tabindex="-1" class="tox-tbtn"
                                                        aria-pressed="false"><span
                                                            class="tox-icon tox-tbtn__icon-wrap"><svg width="24"
                                                                height="24">
                                                                <path
                                                                    d="M16 5c.6 0 1 .4 1 1v5.5a4 4 0 0 1-.4 1.8l-1 1.4a5.3 5.3 0 0 1-5.5 1 5 5 0 0 1-1.6-1c-.5-.4-.8-.9-1.1-1.4a4 4 0 0 1-.4-1.8V6c0-.6.4-1 1-1s1 .4 1 1v5.5c0 .3 0 .6.2 1l.6.7a3.3 3.3 0 0 0 2.2.8 3.4 3.4 0 0 0 2.2-.8c.3-.2.4-.5.6-.8l.2-.9V6c0-.6.4-1 1-1zM8 17h8c.6 0 1 .4 1 1s-.4 1-1 1H8a1 1 0 0 1 0-2z"
                                                                    fill-rule="evenodd"></path>
                                                            </svg></span></button><button aria-label="Strikethrough"
                                                        title="Strikethrough" type="button" tabindex="-1"
                                                        class="tox-tbtn" aria-pressed="false"><span
                                                            class="tox-icon tox-tbtn__icon-wrap"><svg width="24"
                                                                height="24">
                                                                <g fill-rule="evenodd">
                                                                    <path
                                                                        d="M15.6 8.5c-.5-.7-1-1.1-1.3-1.3-.6-.4-1.3-.6-2-.6-2.7 0-2.8 1.7-2.8 2.1 0 1.6 1.8 2 3.2 2.3 4.4.9 4.6 2.8 4.6 3.9 0 1.4-.7 4.1-5 4.1A6.2 6.2 0 0 1 7 16.4l1.5-1.1c.4.6 1.6 2 3.7 2 1.6 0 2.5-.4 3-1.2.4-.8.3-2-.8-2.6-.7-.4-1.6-.7-2.9-1-1-.2-3.9-.8-3.9-3.6C7.6 6 10.3 5 12.4 5c2.9 0 4.2 1.6 4.7 2.4l-1.5 1.1z">
                                                                    </path>
                                                                    <path d="M5 11h14a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2z"
                                                                        fill-rule="nonzero"></path>
                                                                </g>
                                                            </svg></span></button>
                                                    <div aria-pressed="false" aria-label="Text color" title="Text color"
                                                        role="button" aria-haspopup="true" unselectable="on"
                                                        tabindex="-1" class="tox-split-button" aria-expanded="false"
                                                        aria-describedby="aria_9928636271491725180862097"
                                                        style="user-select: none;"><span role="presentation"
                                                            tabindex="-1" class="tox-tbtn"><span
                                                                class="tox-icon tox-tbtn__icon-wrap"><svg width="24"
                                                                    height="24">
                                                                    <g fill-rule="evenodd">
                                                                        <path id="tox-icon-text-color__color"
                                                                            d="M3 18h18v3H3z"></path>
                                                                        <path
                                                                            d="M8.7 16h-.8a.5.5 0 0 1-.5-.6l2.7-9c.1-.3.3-.4.5-.4h2.8c.2 0 .4.1.5.4l2.7 9a.5.5 0 0 1-.5.6h-.8a.5.5 0 0 1-.4-.4l-.7-2.2c0-.3-.3-.4-.5-.4h-3.4c-.2 0-.4.1-.5.4l-.7 2.2c0 .3-.2.4-.4.4zm2.6-7.6l-.6 2a.5.5 0 0 0 .5.6h1.6a.5.5 0 0 0 .5-.6l-.6-2c0-.3-.3-.4-.5-.4h-.4c-.2 0-.4.1-.5.4z">
                                                                        </path>
                                                                    </g>
                                                                </svg></span></span><span role="presentation"
                                                            tabindex="-1" class="tox-tbtn tox-split-button__chevron"><svg
                                                                width="10" height="10">
                                                                <path
                                                                    d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 0 1 0-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8z"
                                                                    fill-rule="nonzero"></path>
                                                            </svg></span><span aria-hidden="true"
                                                            id="aria_9928636271491725180862097" style="display: none;">To
                                                            open the popup, press Shift+Enter</span></div>
                                                </div>
                                                <div title="" role="toolbar" data-alloy-tabstop="true"
                                                    tabindex="-1" class="tox-toolbar__group"><button
                                                        aria-label="Insert/edit link" title="Insert/edit link"
                                                        type="button" tabindex="-1" class="tox-tbtn"
                                                        aria-pressed="false"><span
                                                            class="tox-icon tox-tbtn__icon-wrap"><svg width="24"
                                                                height="24">
                                                                <path
                                                                    d="M6.2 12.3a1 1 0 0 1 1.4 1.4l-2.1 2a2 2 0 1 0 2.7 2.8l4.8-4.8a1 1 0 0 0 0-1.4 1 1 0 1 1 1.4-1.3 2.9 2.9 0 0 1 0 4L9.6 20a3.9 3.9 0 0 1-5.5-5.5l2-2zm11.6-.6a1 1 0 0 1-1.4-1.4l2-2a2 2 0 1 0-2.6-2.8L11 10.3a1 1 0 0 0 0 1.4A1 1 0 1 1 9.6 13a2.9 2.9 0 0 1 0-4L14.4 4a3.9 3.9 0 0 1 5.5 5.5l-2 2z"
                                                                    fill-rule="nonzero"></path>
                                                            </svg></span></button><button aria-label="Insert/edit image"
                                                        title="Insert/edit image" type="button" tabindex="-1"
                                                        class="tox-tbtn" aria-pressed="false"><span
                                                            class="tox-icon tox-tbtn__icon-wrap"><svg width="24"
                                                                height="24">
                                                                <path
                                                                    d="M5 15.7l3.3-3.2c.3-.3.7-.3 1 0L12 15l4.1-4c.3-.4.8-.4 1 0l2 1.9V5H5v10.7zM5 18V19h3l2.8-2.9-2-2L5 17.9zm14-3l-2.5-2.4-6.4 6.5H19v-4zM4 3h16c.6 0 1 .4 1 1v16c0 .6-.4 1-1 1H4a1 1 0 0 1-1-1V4c0-.6.4-1 1-1zm6 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"
                                                                    fill-rule="nonzero"></path>
                                                            </svg></span></button></div>
                                                <div title="" role="toolbar" data-alloy-tabstop="true"
                                                    tabindex="-1" class="tox-toolbar__group"><button
                                                        aria-label="Clear formatting" title="Clear formatting"
                                                        type="button" tabindex="-1" class="tox-tbtn"><span
                                                            class="tox-icon tox-tbtn__icon-wrap"><svg width="24"
                                                                height="24">
                                                                <path
                                                                    d="M13.2 6a1 1 0 0 1 0 .2l-2.6 10a1 1 0 0 1-1 .8h-.2a.8.8 0 0 1-.8-1l2.6-10H8a1 1 0 1 1 0-2h9a1 1 0 0 1 0 2h-3.8zM5 18h7a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2zm13 1.5L16.5 18 15 19.5a.7.7 0 0 1-1-1l1.5-1.5-1.5-1.5a.7.7 0 0 1 1-1l1.5 1.5 1.5-1.5a.7.7 0 0 1 1 1L17.5 17l1.5 1.5a.7.7 0 0 1-1 1z"
                                                                    fill-rule="evenodd"></path>
                                                            </svg></span></button></div>
                                                <div title="" role="toolbar" data-alloy-tabstop="true"
                                                    tabindex="-1" class="tox-toolbar__group"><button
                                                        aria-label="Fullscreen" title="Fullscreen" type="button"
                                                        tabindex="-1" class="tox-tbtn" aria-pressed="false"><span
                                                            class="tox-icon tox-tbtn__icon-wrap"><svg width="24"
                                                                height="24">
                                                                <path
                                                                    d="M15.3 10l-1.2-1.3 2.9-3h-2.3a.9.9 0 1 1 0-1.7H19c.5 0 .9.4.9.9v4.4a.9.9 0 1 1-1.8 0V7l-2.9 3zm0 4l3 3v-2.3a.9.9 0 1 1 1.7 0V19c0 .5-.4.9-.9.9h-4.4a.9.9 0 1 1 0-1.8H17l-3-2.9 1.3-1.2zM10 15.4l-2.9 3h2.3a.9.9 0 1 1 0 1.7H5a.9.9 0 0 1-.9-.9v-4.4a.9.9 0 1 1 1.8 0V17l2.9-3 1.2 1.3zM8.7 10L5.7 7v2.3a.9.9 0 0 1-1.7 0V5c0-.5.4-.9.9-.9h4.4a.9.9 0 0 1 0 1.8H7l3 2.9-1.3 1.2z"
                                                                    fill-rule="nonzero"></path>
                                                            </svg></span></button></div>
                                            </div>
                                        </div>
                                        <div class="tox-anchorbar"></div>
                                    </div>
                                    <div class="tox-sidebar-wrap">
                                        <div class="tox-edit-area"><iframe id="content_ifr" frameborder="0"
                                                allowtransparency="true" title="Rich Text Area. Press ALT-0 for help."
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
                                        <div role="navigation" data-alloy-tabstop="true" class="tox-statusbar__path">
                                            <div role="button" data-index="0" tab-index="-1" aria-level="1"
                                                tabindex="-1" class="tox-statusbar__path-item">p</div>
                                        </div><button type="button" data-alloy-tabstop="true" tabindex="-1"
                                            class="tox-statusbar__wordcount">0 words</button>
                                    </div>
                                    <div title="Resize" aria-hidden="true" class="tox-statusbar__resize-handle"><svg
                                            width="10" height="10">
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
                                <input type="hidden" name="_token" value="jwWx2XZgKdafViWEIuBZwpYwXT8I1GyckmudwpxK">
                                <input type="submit" class="button" value="Gửi đi">
                            </div>


                        </div>
                    </main> --}}


            </section>
        </div>
    </main>
@endsection
