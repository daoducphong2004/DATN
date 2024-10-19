@extends('admin.layouts.default')

@section('title')
    @parent
    Duyệt Truyện
@endsection

@push('styles')

@endpush

@section('content')
<div class="container">
    <h1>Danh sách truyện chưa duyệt</h1>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Tiêu đề</th>
                <th>Tác giả</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
                <tr>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>
                        <form action="{{ route('books.approve', $book->id) }}" method="POST">
                            @csrf
                            <button type="submit" name="approve" value="1" class="btn btn-success">Duyệt</button>
                            <button type="submit" name="approve" value="0" class="btn btn-danger">Từ chối</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@push('scripts')
    <script>
        jQuery(document).ready(function() {
            console.log("jQuery version:", jQuery.fn.jquery);
            jQuery('#list-category').DataTable();
        });
    </script>
@endpush

