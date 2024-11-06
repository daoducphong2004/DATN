@extends('admin.layouts.default')

@section('title')
    @parent
    Danh sách bình luận
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
        @if (session('message'))
            <div class="alert alert-primary" role="alert">
                {{ session('message') }}
            </div>
        @endif
        <h2 class="text-primary mb-4">Danh Sách Bình Luận</h2>
        <table id="list-comment" class="table">
            <thead>
                <tr>
                    <th>Người Bình Luận</th>
                    <th>Nội Dung</th>
                    <th>Ngày Bình Luận</th>
                    <th>Hành Động</th>
                </tr>
            </thead>
            <tbody>
                {{-- @foreach ($comments as $comment) --}}
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <a class="btn btn-info" href="">Chi tiết</a>
                        <a class="btn btn-danger" href="" onclick="return confirmDelete()">Xoá</a>
                    </td>
                </tr>
                {{-- @endforeach --}}
            </tbody>
        </table>
    </div>
@endsection

@push('scripts')
    <script>
        jQuery(document).ready(function() {
            console.log("jQuery version:", jQuery.fn.jquery);
            jQuery('#list-comment').DataTable();
        });
    </script>
@endpush
