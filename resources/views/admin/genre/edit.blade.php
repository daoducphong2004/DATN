@extends('admin.layouts.default')

@section('title')
    @parent
    Sửa thể loại sách - Cổng Light Novel - Đọc Light Novel
@endsection

@push('styles')
@endpush

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="p-4" style="min-height: 800px;">
        <form action="{{ route('genres_update', $id->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="exampleInputEmail1">slug</label>
                <input type="text" class="form-control" name="slug" aria-describedby="emailHelp"
                    value="{{ $id->slug }}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">name</label>
                <input type="text" class="form-control" name="name" aria-describedby="emailHelp"
                    value="{{ $id->name }}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">description</label>
                <input type="text" class="form-control" name="description" aria-describedby="emailHelp"
                    value="{{ $id->description }}">
            </div>

            <button type="submit" class="mt-3 btn btn-success">Save</button>
        </form>
    </div>
@endsection

@push('scripts')
@endpush
