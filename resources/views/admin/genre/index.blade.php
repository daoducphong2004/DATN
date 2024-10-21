@extends('admin.layouts.default')

@section('title')
    @parent
    Danh sách thể loại sách
@endsection

@push('styles')
@endpush

@section('content')
    <div class="p-4" style="min-height: 800px;">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Slug</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>

                <th scope="col">
                    <a class="btn btn-primary" href="{{ route('genres_create') }}">Create</a>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($genres as $genre)
                <tr>
                    <td>{{ $genre->slug }}</td>
                    <td>{{ $genre->name }}</td>
                    <td>{{ $genre->description}}</td>

                    <td>
                        <div class="btn-action" style="display: flex; gap:5px;">
                        <a class="btn btn-success" href="{{ route('genres_edit', $genre->id) }}">Edit</a>
                        <form action="{{ route('genres_delete', $genre->id) }}" method="post">
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

    {{ $genres->links() }}
    @endsection

    @push('scripts')
    @endpush
    
