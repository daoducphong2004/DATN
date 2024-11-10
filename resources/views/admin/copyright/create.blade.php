@extends('admin.layouts.default')


@section('title')
    @parent
    Danh sách bản quyền
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
        <form action="{{ route('copyright_store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">title</label>
                <input type="text" class="form-control" name="title" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">cover</label>
                <input type="text" class="form-control" name="cover" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">author</label>
                <input type="text" class="form-control" name="author" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">painter</label>
                <input type="text" class="form-control" name="painter" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">translater</label>
                <input type="required" class="form-control" name="translater" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">nop</label>
                <input type="number" class="form-control" name="nop" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">form</label>
                <input type="text" class="form-control" name="form" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">try_reading</label>
                <input type="text" class="form-control" name="try_reading" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">price</label>
                <input type="number" class="form-control" name="price" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">summary</label>
                <input type="text" class="form-control" name="summary" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">publishing_companys_id</label>
                <input type="number" class="form-control" name="publishing_companys_id" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="mt-3 btn btn-success">Create</button>
        </form>
    </div>
@endsection

@push('scripts')
@endpush
