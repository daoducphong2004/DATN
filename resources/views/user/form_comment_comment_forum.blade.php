<form action="{{route("cmt-child-forum",$id)}}" method="post">
    @csrf
    @method('POST')
    <div class="ln-comment-reply reply-form">
        <div class="ln-comment-form"><input type="hidden" name="parent_id" value="{{$id}}"><textarea class="comment_reply"></textarea>
            <div class="comment_toolkit clear"><input type="button" class="button" value="Trả lời"></div>
        </div>
    </div>
</form>