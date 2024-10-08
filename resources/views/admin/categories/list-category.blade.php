@extends('admin.layouts.default')

@section('title')
    @parent
     Danh sách thể loại sách
@endsection

@push('styles')
    
@endpush

@section('content')
    <div class="p-4" style="min-height: 800px;">
        @if (session('message'))
            <div class="alert alert-primary" role="alert">
                {{ session('message') }}
            </div>
        @endif
        <h2 class="text-primary mb-4">Danh Sách Thể Loại Sách</h2>
        <table border="1" id="list-category" class="table">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Thể loại</th>
                    <th>Mô tả</th>
                    <th>
                        <a class="btn btn-primary" href="">Thêm thể loại</a>
                    </th>
                </tr>
            </thead>
            <tbody>
                {{-- @foreach ($comments as $comment) --}}
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <a class="btn btn-warning" href="">Sửa</a>
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
            jQuery('#list-category').DataTable();
        });
    </script>
@endpush

