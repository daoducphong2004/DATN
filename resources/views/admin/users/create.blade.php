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
    {{-- <div class="p-4" style="min-height: 800px;">
        <form action="{{ route('user_store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Tên người dùng</label>
                <input type="text" class="form-control" name="username" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="text" class="form-control" name="email" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Mật khẩu</label>
                <input type="string" class="form-control" name="password" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Tên đầy đủ</label>
                <input type="text" class="form-control" name="full_name" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Giới tính</label>
                <select name="gender" id="" class="form-control">
                    <option value="male" selected>male</option>
                    <option value="female">female</option>
                    <option value="other">other</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Ngày sinh</label>
                <input type="date" class="form-control" name="date_of_birth" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Ảnh Đại Diện</label>
                <input type="file" class="form-control" name="avatar_url" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Trạng thái</label>
                <select name="status" id="" class="form-control">
                    <option value="active" selected>active</option>
                    <option value="inactive">inactive</option>
                    <option value="banned">banned</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Số xu</label>
                <input type="number" class="form-control" name="coin_earned" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="mt-3 btn btn-success">Create</button>
        </form>
    </div> --}}

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Thêm User</h4>
                </div><!-- end card header -->
                <div class="card-body">
                    <form action="{{ route('user_store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên người dùng</label>
                            <input type="text" class="form-control" name="username" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group mt-3">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="text" class="form-control" name="email" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group mt-3">
                            <label for="exampleInputEmail1">Mật khẩu</label>
                            <input type="string" class="form-control" name="password" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group mt-3">
                            <label for="exampleInputEmail1">Tên đầy đủ</label>
                            <input type="text" class="form-control" name="full_name" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group mt-3">
                            <label for="exampleInputEmail1">Giới tính</label>
                            <select name="gender" id="" class="form-control">
                                <option value="male" selected>male</option>
                                <option value="female">female</option>
                                <option value="other">other</option>
                            </select>
                        </div>
                        <div class="form-group mt-3">
                            <label for="exampleInputEmail1">Ngày sinh</label>
                            <input type="date" class="form-control" name="date_of_birth"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="form-group mt-3">
                            <label for="exampleInputEmail1">Ảnh Đại Diện</label>
                            <input type="file" class="form-control" name="avatar_url" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group mt-3">
                            <label for="exampleInputEmail1">Trạng thái</label>
                            <select name="status" id="" class="form-control">
                                <option value="active" selected>active</option>
                                <option value="inactive">inactive</option>
                                <option value="banned">banned</option>
                            </select>
                        </div>
                        <div class="form-group mt-3">
                            <label for="exampleInputEmail1">Số xu</label>
                            <input type="number" class="form-control" name="coin_earned" aria-describedby="emailHelp">
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
