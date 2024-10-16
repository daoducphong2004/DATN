@extends('home.layout.master')
@section('content')
<div class="page-top-group ">
    <a href="/thao-luan/2591">
        <div class="index-background d-none d-lg-block"
            style="background-image: url('{{ asset('users/user/img/path/12890_d_l.jpg') }}')"></div>
        <div class="index-background d-lg-none"
            style="background-image: url('{{ asset('users/user/img/path/12890_d_l.jpg') }}'); background-size: cover">
        </div>
    </a>
</div>

<main id="mainpart" class="custome-page"> <!--style="background: url('img/background/bg_yuudachi.jpg') no-repeat fixed 70px center"-->
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
                <span class="sect-title"><a href="/thao-luan/368-huong-dan-dang-truyen">{{$data->title}}</a></span>
            </header>
            <main class="sect-body">
                <div class="row">
                    <div class="col-8">
                        <div class="page-author group-admin">
                            <div class="author_ava">
                                <img src="https://i.docln.net/lightnovel/users/ua1-58948009-0e87-4096-8f67-11766a67792c.jpg">
                            </div>
                            <div class="author-info">
                                <div class="author_name"><a href="/thanh-vien/1">{{$data_user->username}}</a></div>
                                <div class="author_role"><span>{{$data_user->role_id}}</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <time class="topic-time timeago" title="18/06/2017 19:29:13" datetime="{{$data->created_at}}"></time>
                    </div>
                </div>
                <div class="forum-page-content long-text">
                    {!! $data->content !!}
                </div>

            </main>
        </section>

        <section class="basic-section">
            <main>
                <section class="ln-comment">
                    <header>
                        <!-- <h3 class="text-lg font-bold dark:text-white">2000 bình luận</h3> -->
                        <!-- <i id="refresh_comment" class="fas fa-refresh" aria-hidden="true" style="margin-left: 10px; font-size: 18px"></i></h3> -->
                    </header>

                    <main class="ln-comment-body">
                        @include('user.form_comment_forum',['id' => $data->id])
                        @foreach ($data_list_forum as $comment)
                        <div class="ln-comment-group">
                            <div id="ln-comment-{{$comment->id}}" class="ln-comment-item mt-3 clear" data-comment="{{$comment->id}}" data-parent="{{$comment->id}}">
                                <div class="flex gap-1 max-w-full">
                                    <div class="w-[50px]">
                                        <div class="mx-1 my-1">
                                            <img src="https://i.docln.net/lightnovel/users/ua171126-9db75391-abd4-433c-8896-6d8b3fd09c20.jpg" class="w-full rounded-full">
                                        </div>
                                    </div>
                                    <div class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                                        <div class="flex min-w-0 flex-col px-2">
                                            <div class="flex align-top justify-between">
                                                <div class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                                                    <div class="self-center">
                                                        <a class="font-bold leading-6 md:leading-7 ln-username " href="/thanh-vien/171126">{{$comment->user->username}}</a>
                                                    </div>
                                                </div>
                                                <div class="px-2 md:px-3 md:py-1 text-lg md:text-xl cursor-pointer" x-data="{ show: false }">
                                                    <div class="" @click="show = !show">
                                                        <i class="fas fa-angle-down"></i>
                                                    </div>
                                                    <div class="ln-comment-toolkit" x-show="show" @click.outside="show = false" style="display: none">


                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ln-comment-content long-text">
                                                {!! $comment->content !!}
                                            </div>
                                            <div class="comment_see_more expand none">Xem thêm</div>
                                            <div class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                                <a href="/thao-luan/368-huong-dan-dang-truyen?comment_id=2571363#ln-comment-2571363" class="text-slate-500">
                                                    <time class="timeago" title="29-08-2024 22:07:42" datetime="{{$comment->created_at}}"></time>
                                                </a>
                                                <a class="self-center visible-toolkit-item do-like cursor-pointer">
                                                    <i class="fas fa-thumbs-up me-1"></i>
                                                    <span class="likecount font-semibold"></span>
                                                </a>
                                                <a href="{{route("cmt-child-forum",$data->id)}}?reply_to={{ $comment->id }}#reply-form-{{ $comment->id }}"
                                                    class="self-center visible-toolkit-item cursor-pointer">
                                                    <i class="fas fa-comment me-1"></i>
                                                    <span class="likecount font-semibold">Trả lời</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            


                            @foreach ($data_child_list_forum[$comment->id] as $comment_child)

                            <div class="ln-comment-reply">

                                <div id="ln-comment-{{$comment_child->id}}" class="ln-comment-item mt-3 clear" data-comment="{{$comment_child->id}}" data-parent="{{$comment->id}}">
                                    <div class="flex gap-1 max-w-full">
                                        <div class="w-[50px]">
                                            <div class="mx-1 my-1">
                                                <img src="https://i.docln.net/lightnovel/users/ua59827-01692547-f48f-443a-b1ba-cf142484bc59.jpg" class="w-full rounded-full">
                                            </div>
                                        </div>
                                        <div class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                                            <div class="flex min-w-0 flex-col px-2">
                                                <div class="flex align-top justify-between">
                                                    <div class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                                                        <div class="self-center">
                                                            <a class="font-bold leading-6 md:leading-7 ln-username " href="/thanh-vien/59827">{{$comment_child->user->username}}</a>
                                                        </div>
                                                        <div class="self-center">
                                                            <div class="flex gap-1 rounded-sm bg-[#49d0b2]/50 dark:bg-[#36a189]/50 px-1.5 py-0.5 align-middle text-[10px] font-bold text-[#36a189] dark:text-[#eaeaea]">
                                                                <img class="my-auto h-[14px]" src="/img/badge/trans5.png">
                                                                <div class="leading-4">TRANS</div>
                                                            </div>
                                                        </div>
                                                        <div class="self-center">
                                                            <div class="flex gap-1 rounded-sm bg-[#e3953e]/50 dark:bg-[#9c662a]/50 px-1.5 py-0.5 align-middle text-[10px] font-bold text-[#9c662a] dark:text-[#ecd8c2]">
                                                                <img class="my-auto h-[14px]" src="/img/badge/cvter2.png">
                                                                <div class="leading-4">AI MASTER</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="px-2 md:px-3 md:py-1 text-lg md:text-xl cursor-pointer" x-data="{ show: false }">
                                                        <div class="" @click="show = !show">
                                                            <i class="fas fa-angle-down"></i>
                                                        </div>
                                                        <div class="ln-comment-toolkit" x-show="show" @click.outside="show = false" style="display: none">


                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ln-comment-content long-text">
                                                    {!!$comment_child->content!!}
                                                </div>
                                                <div class="comment_see_more expand none">Xem thêm</div>
                                                <div class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                                    <a href="/thao-luan/368-huong-dan-dang-truyen?comment_id=2571363&amp;reply_id=2571366#ln-comment-2571366" class="text-slate-500">
                                                        <time class="timeago" title="29-08-2024 22:08:48" datetime="{{$comment_child->created_at}}"></time>
                                                    </a>
                                                    <a class="self-center visible-toolkit-item do-like cursor-pointer">
                                                        <i class="fas fa-thumbs-up me-1"></i>
                                                        <span class="likecount font-semibold"></span>
                                                    </a>
                                                    <a href="{{route("cmt-child-forum",$data->id)}}?reply_to={{ $comment->id }}#reply-form-{{ $comment->id }}"
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
                            <form action="{{route("cmt-child-forum",$data->id)}}" method="post">
                                @csrf
                                @method('POST')
                                <div class="ln-comment-reply reply-form">
                                    <div class="ln-comment-form"><input type="hidden" name="forum_parent_id" value="{{$comment->id}}"><textarea name="content" class="comment_reply">{{ '@' . $comment->user->username . ': ' }}</textarea>
                                        <div class="comment_toolkit clear"><input type="submit" class="button" value="Trả lời"></div>
                                    </div>
                                </div>
                            </form>
                            @else
                            <p><strong>Bạn phải <a href="{{ route('login') }}" style="color: red">đăng nhập</a> để trả lời bình
                                    luận.</strong></p>
                            @endif
                        </div>
                        @endif
                            <!-- <div class="fetch_reply" data-parent="2571363">
                Xem thêm 1 trả lời <i class="fas fa-chevron-down" style="margin-left: 4px;"></i>
            </div>
            <img class="loading" src="/img/loading.svg" style="width: auto; height: 15px; margin-left: 10px; display: none"> -->
                        </div>
                        @endforeach
                        

    </div>
</main>

<script>
    var token = 'jwWx2XZgKdafViWEIuBZwpYwXT8I1GyckmudwpxK';
    var comment_type = 'page';
    var comment_typeid = '368';
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