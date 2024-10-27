@if($data_book->isEmpty())
<p>Không tìm thấy kết quả nào.</p>
@else
@foreach($data_book as $item)
<div class="">
    <div class="">
        <a href="{{ route('truyen.truyen', $item->slug) }}" title="{{ $item->title }}">
            <div class="">
                <div class=""
                    style="background-image: url('{{ !empty($item->book_path) ? asset(Storage::url($item->book_path)) : asset('img/noava.png') }}">
                </div>
            </div>
        </a>
        <div class="">
            <div class="" title="{{ $item->title }}"><a
                    href="{{ route('truyen.truyen', $item->slug) }}">{{ $item->title }}</a>
            </div>
        </div>
    </div>
</div>
@endforeach
@endif