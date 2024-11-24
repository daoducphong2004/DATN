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
                    <th scope="col">page_number</th>
                    <th scope="col">note</th>
                    <th scope="col">status</th>
                    <th scope="col">book_id</th>
                    <th scope="col">user_id</th>
                    <th scope="col">
                        <a class="btn btn-primary" href="{{ route('bookmarks_create') }}">Create</a>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bookmarks as $bookmark)
                    <tr>
                        <td>{{ $bookmark->name }}</td>
                        <td>{{ $bookmark->description }}</td>
                        <td>{{ $bookmark->page_number }}</td>
                        <td>{{ $bookmark->note }}</td>
                        <td>{{ $bookmark->status }}</td>
                        <td>{{ $bookmark->book_id }}</td>
                        <td>{{ $bookmark->user_id }}</td>
                        <td>
                            <div class="btn-action" style="display: flex; gap:5px;">
                                <a class="btn btn-success" href="{{ route('bookmarks_edit', $bookmark->id) }}">Edit</a>
                                <form action="{{ route('bookmarks_delete', $bookmark->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit"
                                        onclick="return confirm('Xác nhận xóa')">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{ $bookmarks->links() }}
    </div>
@endsection

@push('scripts')
@endpush
