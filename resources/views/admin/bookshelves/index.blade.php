@extends('admin.layouts.default')

@section('title')
    @parent
    Danh sách thể loại sách
@endsection

@push('styles')
@endpush

@section('content')
    <div class="p-4" style="min-height: 800px;">
        <table class="table table-bordered" style="width: 100%;">
        <thead>
            <tr>
                <th scope="col">name</th>
                <th scope="col">description</th>
                <th scope="col">location</th>
                <th scope="col">status</th>
                <th scope="col">book_id</th>
                <th scope="col">user_id</th>

                <th scope="col">
                    <a class="btn btn-primary" href="{{ route('bookshelves_create') }}">Create</a>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bookshelves as $bookshelve)
                <tr>
                    <td>{{ $bookshelve->name }}</td>
                    <td>{{ $bookshelve->description }}</td>
                    <td>{{ $bookshelve->location }}</td>
                    <td>{{ $bookshelve->status }}</td>
                    <td>{{ $bookshelve->book_id }}</td>
                    <td>{{ $bookshelve->user_id }}</td>
                    <td>
                        <div class="btn-action" style="display: flex; gap:5px;">
                        <a class="btn btn-success" href="{{ route('bookshelves_edit', $bookshelve->id) }}">Edit</a>
                        <form action="{{ route('bookshelves_delete', $bookshelve->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class=" btn btn-danger" type="submit"
                                onclick="return confirm('Xác nhận xóa')">Delete</button>
                        </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    {{ $bookshelves->links() }}
    @endsection

    @push('scripts')
    @endpush
