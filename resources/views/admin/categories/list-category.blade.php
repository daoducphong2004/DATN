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
        <table border="1" class="table">
            <tr>
                <th>STT</th>
                <th>Thể loại</th>
                <th>
                    <a class="btn btn-primary" href="">Thêm thể loại</a>
                </th>
            </tr>
            {{-- @foreach ($comments as $comment) --}}
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <a class="btn btn-warning" href="">Sửa</a>
                        <a class="btn btn-danger" href="" onclick="return confirmDelete()">Xoá</a>
                    </td>
                </tr>
            {{-- @endforeach --}}
        </table>
    </div>
@endsection

@push('scripts')

@endpush

