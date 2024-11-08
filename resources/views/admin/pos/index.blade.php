@extends('admin.layouts.default')

@section('title')
    @parent
    Danh sách nơi mua
@endsection

@push('styles')
@endpush

@section('content')
    <div class="p-4" style="min-height: 800px;">
        <table class="table table-bordered" style="width: 100%;">
        <thead>
            <tr>
                <th scope="col">name</th>
                <th scope="col">link</th>
                <th scope="col">copyrights</th>

                <th scope="col">
                    <a class="btn btn-primary" href="{{ route('pos_create') }}">Create</a>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pos as $po)
                <tr>
                    <td>{{ $po->name }}</td>
                    <td>{{ $po->link }}</td>
                    <td>{{ $po->copyright_id }}</td>
                    <td>
                        <div class="btn-action" style="display: flex; gap:5px;">
                        <a class="btn btn-success" href="{{ route('pos_edit', $po->id) }}">Edit</a>
                        <form action="{{ route('pos_delete', $po->id) }}" method="post">
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
    {{ $pos->links() }}
    @endsection

    @push('scripts')
    @endpush
