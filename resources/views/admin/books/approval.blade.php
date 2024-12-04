@extends('admin.layouts.default')

@section('title')
    @parent
    Duyệt Truyện
@endsection

@push('styles')
@endpush

@section('content')
    {{-- <div class="container">
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
    </div> --}}

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h5 class="card-title mb-0 flex-grow-1">Danh Sách Truyện Chưa Duyệt</h5>
                </div>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="card-body">
                    <table id="example" class="table table-bordered dt-responsive table-striped align-middle"
                        style="width:100%">
                        <thead>
                            <tr>
                                <th>Tiêu đề</th>
                                <th>Tác giả</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($books as $book)
                                <tr>
                                    <td>{{ $book->title }}</td>
                                    <td>{{ $book->author }}</td>
                                    <td>
                                        <form action="{{ route('admin_stories_approval', $book->id) }}" method="POST">
                                            @csrf
                                            <button type="submit" name="approve" value="1"
                                                class="btn btn-success edit-item-btn">Duyệt</button>
                                            <button type="submit" name="approve" value="0"
                                                class="btn btn-danger remove-item-btn">Từ chối</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!--end col-->
    </div><!--end row-->
@endsection

@push('scripts')
@endpush
