@if($data->isEmpty())
<p>Không tìm thấy kết quả nào.</p>
@else
@foreach ($data as $item)
<div class="thumb-item-flow col-4 col-md-3 col-lg-2">
    <div class="thumb-wrapper ln-tooltip"
        data-tooltip-content="#series_{{ $item->id }}">
        <a href="truyen/{{ $item->slug }}"
            title="{{ $item->episodes->last()->latestChapter->title ?? 'Chưa có chương truyện' }}">
            <div class="a6-ratio">
                <div class="content img-in-ratio lazyload"
                    style="background-image: url('{{ !empty($item->book_path) ? asset(Storage::url($item->book_path)) : asset('img/noava.png') }}');">
                </div>
            </div>
        </a>
        <div class="thumb-detail">
            <div class="thumb_attr chapter-title"
                title="{{ $item->episodes->last()->latestChapter->title ?? 'Chưa có chương truyện' }}">
                <a href="truyen/{{ $item->slug }}"
                    title="{{ $item->episodes->last()->latestChapter->title ?? 'Chưa có chương truyện' }}">
                    {{ $item->episodes->last()->latestChapter->title ?? 'Chưa có chương truyện' }}
                </a>
            </div>
            <div class="thumb_attr volume-title">
                {{ $item->episodes->last()->title ?? 'Chưa có tập truyện' }}
            </div>
        </div>
    </div>
    <div class="thumb_attr series-title">
        <a href="truyen/{{ $item->title }}"
            title="{{ $item->title }}">{{ $item->title }}</a>
    </div>
</div>
<!-- Tooltip -->
<div style="display: none">
    <div id="series_{{ $item->id }}">
        <div style="margin: 10px 0; width: 250px">
            <p style="color: white; font-weight: bold">{{ $item->title }}</p>
            <p>
                {{-- <div>Số từ: 1.625.237</div> --}}
            <div>Lượt xem: {{ $item->view }}</div>
            <div>Lượt thích: {{ $item->like }}</div>
            </p>
            {!! $item->description !!}
        </div>
    </div>
</div>
@endforeach
@endif