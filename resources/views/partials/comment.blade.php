@foreach ($comments as $comment)
    <div class="ln-comment-reply">
        <div id="ln-comment-2560870" class="ln-comment-item mt-3 clear" data-comment="2560870" data-parent="2559913">
            <div class="flex gap-1 max-w-full">
                <div class="w-[50px]">
                    <div class="mx-1 my-1">
                        <img src="{{ asset(Storage::url($comment->user->avatar_url)) }}"
                            class="w-full rounded-full" />
                    </div>
                </div>
                <div class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                    <div class="flex min-w-0 flex-col px-2">
                        <div class="flex align-top justify-between">
                            <div class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                                <div class="self-center">
                                    <a class="font-bold leading-6 md:leading-7 ln-username "
                                        href="{{ $comment->user->id }}">{{ $comment->user->username }}</a>
                                </div>
                            </div>
                            <div class="px-2 md:px-3 md:py-1 text-lg md:text-xl cursor-pointer" x-data="{ show: false }">
                                <div class="" @click="show = !show">
                                    <i class="fas fa-angle-down"></i>
                                </div>
                                <div class="ln-comment-toolkit" x-show="show" @click.outside="show = false"
                                    style="display: none">


                                </div>
                            </div>
                        </div>
                        <div class="ln-comment-content long-text">
                            {{ $comment->content }}
                        </div>
                        <div class="comment_see_more expand none">Xem thêm
                        </div>
                        <div class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                            <a href="/truyen/18997-co-nang-gyaru-dot-nhien-tiep-can-toi-sau-khi-toi-sua-xe-cho-co-ay?comment_id=2559913&amp;reply_id=2560870#ln-comment-2560870"
                                class="text-slate-500">
                                <time class="timeago" title="22-08-2024 23:44:19" datetime="{{ $comment->created_at }}">
                                    {{ $comment->created_at->diffForHumans() }}
                                </time>
                            </a>
                            <a class="self-center visible-toolkit-item do-like cursor-pointer">
                                <i class="fas fa-thumbs-up me-1"></i>
                                <span class="likecount font-semibold"></span>
                            </a>
                            <a href="{{ route('truyen.truyen', [$book->slug]) }}?reply_to={{ $comment->id }}#reply-form-{{ $comment->id }}"
                                class="self-center visible-toolkit-item cursor-pointer">
                                <i class="fas fa-comment me-1"></i>
                                <span class="likecount font-semibold">Trả lời</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach

@if (request('reply_to') == $comment->id)
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
            <p><strong>Bạn phải <a href="{{ route('login') }}" style="color: red">đăng nhập</a> để trả lời bình
                    luận.</strong></p>
        @endif
    </div>
@endif

@if ($comment->replies->isNotEmpty())
    @include('partials.comment', ['comments' => $comment->replies])
@endif
