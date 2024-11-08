@extends('admin.layouts.default')

@section('title')
    @parent
    Danh sách thể loại sách
@endsection

@push('styles')
    <style>
        .table th,
        .table td {
            vertical-align: middle !important;
            text-align: center;
        }

        .table th {
            font-size: 1.4rem;
            font-weight: 600;
        }

        .table td {
            font-size: 1.2rem;
        }

        .table img {
            max-width: 100%;
            height: auto;
        }

        .btn {
            margin: 2px;
        }
    </style>
@endpush

@section('content')
    <div class="p-4" style="min-height: 800px;">
        <h2 class="text-primary mb-4">Danh Sách Thể Loại</h2>
        <table id="list-genre" class="table">
            <thead>
                <tr>
                    <th scope="col">Đường dẫn</th>
                    <th scope="col">Tên thể loại</th>
                    <th scope="col">Mô tả</th>

                    <th scope="col">
                        <a class="btn btn-primary" href="{{ route('genres_create') }}">Thêm</a>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($genres as $genre)
                    <tr>
                        <td>{{ $genre->slug }}</td>
                        <td>{{ $genre->name }}</td>
                        <td>{{ $genre->description }}</td>

                        <td>
                            <div class="btn-action" style="display: inline-flex;">
                                <a class="btn btn-success" href="{{ route('genres_edit', $genre->id) }}">Sửa</a>
                                <form action="{{ route('genres_delete', $genre->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit"
                                        onclick="return confirm('Xác nhận xóa')">Xóa</button>
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
        <script>
            jQuery(document).ready(function() {
                console.log("jQuery version:", jQuery.fn.jquery);
                jQuery('#list-genre').DataTable();
            });
        </script>
    @endpush
