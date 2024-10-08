@extends('story.layout.master')

@push('styles')

@endpush

@section('content')
    <section id="series-comments" class="basic-section">
        <header class="sect-header tab-list">
            <span class="sect-title tab-title" data-tab-index="1">Tổng bình luận <span
                    class="comments-count">(282)</span></span>
        </header>
        <main id="fbcmt_root" class="comment-wrapper d-lg-block clear">
            <span style="padding: 10px; display: inline-block;">Báo cáo bình luận không phù hợp ở <a
                    href="/thao-luan/619-bao-cao-binh-luan" style="color: blue">đây</a></span>
            <div id="tab-content-1" class="tab-content clear">
                <section class="ln-comment">
                    <header>
                        <h3 class="text-lg font-bold dark:text-white">103 Bình luận </h3>
                        <!-- <i id="refresh_comment" class="fas fa-refresh" aria-hidden="true" style="margin-left: 10px; font-size: 18px"></i></h3> -->
                    </header>

                    <main class="ln-comment-body">
                        <div id="ln-comment-submit" class="ln-comment-form clear">

                            <form action="{{ route('bookComment.store') }}" method="POST"
                                class="comment_form">
                                @csrf
                                <textarea name="content" class="" required></textarea>

                                <div class="comment_toolkit clear">
                                    <input class="button" type="submit" value="Đăng bình luận">
                                </div>
                            </form>
                        </div>
                        @foreach ($comments as $comment)
                            <div class="ln-comment-group">
                                <div id="ln-comment-2559913" class="ln-comment-item mt-3 clear"
                                    data-comment="2559913" data-parent="2559913">
                                    <div class="flex gap-1 max-w-full">
                                        <div class="w-[50px]">
                                            <div class="mx-1 my-1">
                                                <img src="https://i2.docln.net/ln/users/avatars/u199104-3ced19eb-d041-4ebb-bf96-845de5cd2f9b.jpg"
                                                    class="w-full rounded-full" />
                                            </div>
                                        </div>
                                        <div
                                            class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ring-2 ring-cyan-500 dark:ring-cyan-900">
                                            <div class="flex min-w-0 flex-col px-2">
                                                <div class="flex align-top justify-between">
                                                    <div
                                                        class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                                                        <div class="self-center">
                                                            <a class="font-bold leading-6 md:leading-7 ln-username "
                                                                href="">{{ $comment->user->username }}</a>
                                                        </div>
                                                        <div class="self-center">
                                                            <div
                                                                class="flex gap-1 rounded-sm shadow-[inset_0px_0px_0px_2px_#E63950] dark:bg-[#E63950]/50 px-1.5 py-0.5 align-middle text-[10px] font-bold text-[#E63950] dark:text-[#FDCB02]">
                                                                <img class="my-auto h-[14px]"
                                                                    src="/img/badge/owner.png" />
                                                                <div class="leading-4">CHỦ THỚT</div>
                                                            </div>
                                                        </div>
                                                        <div class="self-center">
                                                            <div
                                                                class="flex gap-1 rounded-sm bg-[#49d0b2]/50 dark:bg-[#36a189]/50 px-1.5 py-0.5 align-middle text-[10px] font-bold text-[#36a189] dark:text-[#eaeaea]">
                                                                <img class="my-auto h-[14px]"
                                                                    src="/img/badge/trans5.png" />
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
                                                            @click.outside="show = false"
                                                            style="display: none">


                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ln-comment-content long-text">
                                                    {{ $comment->content }}
                                                </div>
                                                <div class="comment_see_more expand none">Xem thêm</div>
                                                <div
                                                    class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                                    <a href="/truyen/18997-co-nang-gyaru-dot-nhien-tiep-can-toi-sau-khi-toi-sua-xe-cho-co-ay?comment_id=2559913#ln-comment-2559913"
                                                        class="text-slate-500">
                                                        <time class="timeago" title="22-08-2024 09:59:00"
                                                            datetime="2024-08-22T09:59:00+07:00">
                                                            {{ $comment->created_at }}
                                                        </time>
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
                                @foreach ($comment->replies as $reply)
                                    <div class="ln-comment-reply">
                                        <div id="ln-comment-2560870" class="ln-comment-item mt-3 clear"
                                            data-comment="2560870" data-parent="2559913">
                                            <div class="flex gap-1 max-w-full">
                                                <div class="w-[50px]">
                                                    <div class="mx-1 my-1">
                                                        <img src="https://i.docln.net/lightnovel/users/ua140203-46c6955e-3d8b-4511-b60d-0606be323f2f.jpg"
                                                            class="w-full rounded-full" />
                                                    </div>
                                                </div>
                                                <div
                                                    class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                                                    <div class="flex min-w-0 flex-col px-2">
                                                        <div class="flex align-top justify-between">
                                                            <div
                                                                class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                                                                <div class="self-center">
                                                                    <a class="font-bold leading-6 md:leading-7 ln-username "
                                                                        href="{{ $reply->user->id }}">{{ $reply->user->username }}</a>
                                                                </div>
                                                            </div>
                                                            <div class="px-2 md:px-3 md:py-1 text-lg md:text-xl cursor-pointer"
                                                                x-data="{ show: false }">
                                                                <div class="" @click="show = !show">
                                                                    <i class="fas fa-angle-down"></i>
                                                                </div>
                                                                <div class="ln-comment-toolkit"
                                                                    x-show="show"
                                                                    @click.outside="show = false"
                                                                    style="display: none">


                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ln-comment-content long-text">
                                                            {{ $reply->content }}
                                                        </div>
                                                        <div class="comment_see_more expand none">Xem thêm
                                                        </div>
                                                        <div
                                                            class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                                            <a href="/truyen/18997-co-nang-gyaru-dot-nhien-tiep-can-toi-sau-khi-toi-sua-xe-cho-co-ay?comment_id=2559913&amp;reply_id=2560870#ln-comment-2560870"
                                                                class="text-slate-500">
                                                                <time class="timeago"
                                                                    title="22-08-2024 23:44:19"
                                                                    datetime="2024-08-22T23:44:19+07:00">
                                                                    {{ $reply->create_at }}
                                                                </time>
                                                            </a>
                                                            <a
                                                                class="self-center visible-toolkit-item do-like cursor-pointer">
                                                                <i class="fas fa-thumbs-up me-1"></i>
                                                                <span
                                                                    class="likecount font-semibold"></span>
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
                                @endforeach
                            </div>
                        @endforeach


                        <div class="ln-comment-page">
                            <div class="pagination-footer">
                                <div class="pagination_wrap">
                                    <a href=""
                                        class="paging_item paging_prevnext prev  disabled ">Trước</a>

                                    <a href="https://docln.net/truyen/18997-co-nang-gyaru-dot-nhien-tiep-can-toi-sau-khi-toi-sua-xe-cho-co-ay?page=2"
                                        class="paging_item paging_prevnext next">Sau</a>
                                </div>
                            </div>
                        </div>
                    </main>
                    {{-- @include('layouts.TinyMCEscript') --}}

                </section>
            </div>
        </main>
    </section>

@endsection

@push('scripts')

@endpush
