@extends('admin.layouts.default')

@section('title')
    @parent
    Danh sách thể loại sách
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
        <form action="{{ route('bookshelves_update', $id->id) }}" method="post">
            @csrf
            @method('PUT')
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
            <div class="form-group">
                <label for="exampleInputEmail1">location</label>
                <input type="text" class="form-control" name="location" aria-describedby="emailHelp"
                    value="{{ $id->location }}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">status</label>
                <input type="text" class="form-control" name="status" aria-describedby="emailHelp"
                    value="{{ $id->status }}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">book_id</label>
                <input type="number" class="form-control" name="book_id" aria-describedby="emailHelp"
                    value="{{ $id->book_id }}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">user_id</label>
                <input type="number" class="form-control" name="user_id" aria-describedby="emailHelp"
                    value="{{ $id->user_id }}">
            </div>
            <button type="submit" class="mt-3 btn btn-success">Save</button>
        </form>
    </div>
@endsection

@push('scripts')
@endpush
