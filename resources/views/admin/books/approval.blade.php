@extends('admin.layouts.default')

@section('title')
    @parent
    Duyệt Truyện
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
    <div class="container">
        <h2 class="text-primary mb-4">Danh Sách Truyện Chưa Duyệt</h2>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <table id="approval" class="table">
            <thead>
                <tr>
                    <th>Tiêu đề</th>
                    <th>Tác giả</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
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
            jQuery('#approval').DataTable();
        });
    </script>
@endpush
