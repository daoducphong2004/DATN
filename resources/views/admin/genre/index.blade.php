@extends('admin.layouts.default')

@section('title')
    @parent
    Danh sách thể loại sách
@endsection

@push('styles')
@endpush

@section('content')
    {{-- <div class="p-4" style="min-height: 800px;">
        <h2 class="text-primary mb-4">Danh Sách Thể Loại</h2>
        <table id="" class="table">
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
    </div> --}}

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h5 class="card-title mb-0 flex-grow-1">Danh Sách Thể Loại</h5>
                    <div>
                        <a href="{{ route('genres_create') }}" class="btn btn-secondary">
                            <i class="ri-add-circle-fill"></i> Thêm thể loại mới
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <table id="example" class="table table-bordered dt-responsive table-striped align-middle"
                        style="width:100%">
                        <thead>
                            <tr>
                                <th>Đường dẫn</th>
                                <th>Tên thể loại</th>
                                <th>Mô tả</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($genres as $genre)
                                <tr>
                                    <td>{{ $genre->slug }}</td>
                                    <td>{{ $genre->name }}</td>
                                    <td>{{ $genre->description }}</td>

                                    <td>
                                        <div class="hstack gap-2 flex-wrap">
                                            <a class="btn btn-success"
                                            href="{{ route('genres_edit', $genre->id) }}">Sửa</a>
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
                </div>
            </div>
        </div><!--end col-->
    </div><!--end row-->
@endsection

@push('scripts')
@endpush
