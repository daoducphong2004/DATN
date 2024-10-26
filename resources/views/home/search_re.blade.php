@if($data_book->isEmpty())
    <p>Không tìm thấy kết quả nào.</p>
@else
    @foreach($data_book as $book)
        <p>{{ $book->title }}</p>
    @endforeach
@endif
