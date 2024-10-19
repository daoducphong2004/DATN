<div id="ln-comment-submit" class="ln-comment-form clear">
                    <form class="comment_form" action="{{route('cmt-child-forum',$id)}}" method="post">
                        @csrf
                        @method('POST')
                    <textarea  name="content" aria-hidden="true" ></textarea>
                    <input type="hidden" name="parent_id" value="null">
                        <div class=" ">
                            <input class="button" type="submit" value="Đăng bình luận">
                        </div>
                    </form>
                </div>