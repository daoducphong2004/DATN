@extends('story.layout.readingmaster')
@section('content')
<div class="container">
    <div class="row">
        <div class="reading-content col-12 col-lg-10 offset-lg-1" style="word-wrap: break-word;">
            <div id="bookmark_top" class="block d-lg-none"><i class="fas fa-bookmark"></i></div>
            <span class="save_bookmark" style="position: absolute; top: 9999px; display: none"><i class="fas fa-bookmark"></i></span>

            <div class="title-top" style="padding-top: 20px">
                <h2 class="title-item text-xl font-bold" align="center">{{ $book->title }}</h2>
                <h4 class="title-item text-base font-bold" align="center">{{ $chapter->title }}</h4>
                <h6 class="title-item font-bold" align="center">
                    <a href="#chapter-comments" style="text-decoration: underline">Sau sẽ làm Bình luận</a> -
                    Độ dài: {{ str_word_count($chapter->content) }} từ - Cập nhật:
                    <time class="topic-time timeago" title="{{ $chapter->updated_at->format('d-m-Y H:i:s') }}" datetime="{{ $chapter->updated_at->toIso8601String() }}"></time>
                </h6>
            </div>

            <div style="text-align: center; margin: 20px auto -20px auto;">
                <!-- Bạn có thể thêm nội dung quảng cáo hoặc hình ảnh ở đây -->
            </div>

            <div id="chapter-content" class="long-text text-justify" style="font-family:'Nunito', 'Times New Roman', Georgia, serif;">
                {!!$chapter->content !!}
            </div>

            <div style="text-align: center; margin: 20px auto 10px auto;">
                <!-- Bạn có thể thêm nội dung quảng cáo hoặc hình ảnh ở đây -->
            </div>

            <section class="rd-basic_icon row">
                <a href="{{ route('truyen.chuong', ['slug' => $book->slug, 'chapter_slug' => $chapter->previous()->slug ?? '#']) }}" class="dark:text-black col text-center {{ $chapter->previous() ? '' : 'disabled' }}"><i class="fas fa-backward"></i></a>
                <a href="{{ route('truyen.truyen',$book->slug) }}" class="dark:text-black col text-center"><i class="fas fa-home"></i></a>
                <a href="{{ route('truyen.chuong', ['slug' => $book->slug, 'chapter_slug' => $chapter->next()->slug ?? '#']) }}" class="dark:text-black col text-center {{ $chapter->next() ? '' : 'disabled' }}"><i class="fas fa-forward"></i></a>
            </section>

            <!--the code style is important to keep this comment section be out of the effect of user reading's setting-->
        </div>
        <div class="col-12 col-lg-10 offset-lg-1">
            @include('story.layout.reading.comment')
        </div>
    </div>
</div>
</main>
<script>
    function saveReadingHistory(storyId) {
    fetch('/reading-history', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify({
            story_id: storyId
        })
    })
    .then(response => response.json())
    .then(data => {
        console.log(data.message);
    });
}

</script>
@include('story.partials.script')
@endsection
