@extends('admin.layouts.default')

@section('title')
    @parent
    Thêm mới thể loại sách - Cổng Light Novel - Đọc Light Novel
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
    {{-- <div class="p-4" style="min-height: 800px;">
        <form action="{{ route('genres_store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">slug</label>
                <input type="text" class="form-control" name="slug" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">name</label>
                <input type="text" class="form-control" name="name" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">description</label>
                <input type="text" class="form-control" name="description" aria-describedby="emailHelp">
            </div>

            <button type="submit" class="mt-3 btn btn-success">Create</button>
        </form>
    </div> --}}

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Thêm Thể Loại</h4>
                </div><!-- end card header -->
                <div class="card-body">
                    <form action="{{ route('genres_store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Slug</label>
                            <input type="text" class="form-control" name="slug" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group mt-3">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" name="name" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group mt-3">
                            <label for="exampleInputEmail1">Description</label>
                            <input type="text" class="form-control" name="description" aria-describedby="emailHelp">
                        </div>
            
                        <button type="submit" class="mt-3 btn btn-success">Create</button>
                    </form>
                </div>
            </div>
        </div>
        <!--end col-->
    </div>
    <!--end row-->
@endsection

@push('scripts')
@endpush
