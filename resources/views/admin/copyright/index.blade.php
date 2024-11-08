@extends('admin.layouts.default')

@section('title')
    @parent
    Danh sách bản quyền
@endsection

@push('styles')
@endpush

@section('content')
    <div class="p-4" style="min-height: 800px;">
        <table class="table table-bordered" style="width: 100%;">
        <thead>
            <tr>
                <th scope="col">title</th>
                <th scope="col">cover</th>
                <th scope="col">author</th>
                <th scope="col">painter</th>
                <th scope="col">translater</th>
                <th scope="col">nop</th>
                <th scope="col">form</th>
                <th scope="col">try_reading</th>
                <th scope="col">price</th>
                <th scope="col">summary</th>
                <th scope="col">publishing_companys_id</th>
                <th scope="col">
                    <a class="btn btn-primary" href="{{ route('copyright_create') }}">Create</a>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($copyrights as $copyright)
                <tr>
                    <td>{{ $copyright->title }}</td>
                    <td>{{ $copyright->cover }}</td>
                    <td>{{ $copyright->author }}</td>
                    <td>{{ $copyright->painter }}</td>
                    <td>{{ $copyright->translater }}</td>
                    <td>{{ $copyright->nop }}</td>
                    <td>{{ $copyright->form }}</td>
                    <td>{{ $copyright->try_reading }}</td>
                    <td>{{ $copyright->price }}</td>
                    <td>{{ $copyright->summary }}</td>
                    <td>{{ $copyright->publishing_companys_id }}</td>
                    <td>
                        <div class="btn-action" style="display: flex; gap:5px;">
                        <a class="btn btn-success" href="{{ route('copyright_edit', $copyright->id) }}">Edit</a>
                        <form action="{{ route('copyright_delete', $copyright->id) }}" method="post">
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
    {{ $copyrights->links() }}
    @endsection

    @push('scripts')
    @endpush
