<style>
    .search-dropdown {
        background-color: #fffff8;
        width: 300px;
        height: 100px;
        border-bottom: solid 1px gainsboro;

    }

    .search-dropdown:hover {
        background-color: gray;
    }

    .search-dropdown a {
        padding: 10px;
        display: flex;
    }

    .search-dropdown-right {
        margin-left: 10px;
    }

    #search-results {
        margin-top: 5px;
        margin-left: -10%;
    }
</style>
@if($data_book->isEmpty())
<p>Không tìm thấy kết quả nào.</p>
@else
@foreach($data_book as $item)
<div class="search-dropdown">
    <a href="{{ route('truyen.truyen', $item->slug) }}">
        <div class="search-dropdown-left">
            <img width="80px" height="80px" src="{{Storage::url($item->book_path)}}" alt="">
        </div>
        <div class="search-dropdown-right">
            {{ $item->title }}
        </div>
    </a>
</div>
@endforeach
@endif