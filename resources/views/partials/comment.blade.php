@foreach ($comments as $comment)
    <div class="ln-comment-group">
        <div id="ln-comment-2559913" class="ln-comment-reply mt-3 clear" data-comment="2559913" data-parent="2559913"
            x-data="{ showReplies: false, showReplyForm: false }">
            <div class="flex gap-1 max-w-full">
                <div class="w-[50px]">
                    <div class="mx-1 my-1">
                        <img src="{{ asset(Auth::user()->avatar_url ?? 'img/noava.png') }}" class="w-full rounded-full" />
                    </div>
                </div>
                <div
                    class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ring-2 ring-cyan-500 dark:ring-cyan-900">
                    <div class="flex min-w-0 flex-col px-2">
                        <div class="flex align-top justify-between">
                            <div class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                                <div class="self-center">
                                    <a class="font-bold leading-6 md:leading-7 ln-username "
                                        href="">{{ $comment->user->username }}</a>
                                </div>
                                {{-- <div class="self-center">
                                    <div
                                        class="flex gap-1 rounded-sm shadow-[inset_0px_0px_0px_2px_#E63950] dark:bg-[#E63950]/50 px-1.5 py-0.5 align-middle text-[10px] font-bold text-[#E63950] dark:text-[#FDCB02]">
                                        <img class="my-auto h-[14px]" src="/img/badge/owner.png" />
                                        <div class="leading-4">CHỦ THỚT</div>
                                    </div>
                                </div>
                                <div class="self-center">
                                    <div
                                        class="flex gap-1 rounded-sm bg-[#49d0b2]/50 dark:bg-[#36a189]/50 px-1.5 py-0.5 align-middle text-[10px] font-bold text-[#36a189] dark:text-[#eaeaea]">
                                        <img class="my-auto h-[14px]" src="/img/badge/trans5.png" />
                                        <div class="leading-4">TRANS</div>
                                    </div>
                                </div> --}}
                            </div>
                            <div class="px-2 md:px-3 md:py-1 text-lg md:text-xl cursor-pointer">
                                <div @click="showReplies = !showReplies">
                                    <i :class="showReplies ? 'fas fa-angle-up' : 'fas fa-angle-down'"></i>
                                </div>
                            </div>
                        </div>
                        <div class="ln-comment-content long-text">
                            {{ $comment->content }}
                        </div>
                        <div class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                            <a href="#">
                                <time class="timeago" title="22-08-2024 09:59:00" datetime="{{ $comment->created_at }}">
                                    {{ $comment->created_at->diffForHumans() }}
                                </time>
                            </a>
                            <a class="self-center visible-toolkit-item do-like cursor-pointer">
                                <i class="fas fa-thumbs-up me-1"></i>
                                <span class="likecount font-semibold">4</span>
                            </a>
                            <a @click.prevent="showReplyForm = !showReplyForm"
                                class="self-center visible-toolkit-item cursor-pointer">
                                <i class="fas fa-comment me-1"></i>
                                <span class="likecount font-semibold">Trả lời</span>
                            </a>

                            <a href="">
                                <span>{{ $comment->replies->count() }} đã trả lời</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div x-show="showReplyForm" class="ln-comment-reply ln-comment-form mt-3"
                id="reply-form-{{ $comment->id }}" x-cloak>
                <div class="ln-comment-reply ln-comment-form mt-3" id="reply-form-{{ $comment->id }}">
                    @if (Auth::check())
                        <form action="{{ route('addComment', $book->id) }}" method="POST" class="reply_form">
                            @csrf
                            <textarea name="content" class="comment_reply form-control" required>{{ '@' . $comment->user->username . ': ' }}</textarea>
                            <input type="hidden" name="parent_id" value="{{ $comment->id }}">
                            <div class="comment_toolkit clear">
                                <input class="button" type="submit" value="Trả lời">
                            </div>
                        </form>
                    @else
                        <p><strong>Bạn phải <a href="{{ route('login') }}" style="color: red">đăng nhập</a> để trả lời
                                bình
                                luận.</strong></p>
                    @endif
                </div>
            </div>
            <div x-show="showReplies" class="mt-3" x-cloak>
                <!-- Lặp qua các replies -->
                @if ($comment->replies->isNotEmpty())
                    @include('partials.comment', [
                        'comments' => $comment->replies,
                    ])
                @endif
            </div>
        </div>
    </div>
@endforeach
