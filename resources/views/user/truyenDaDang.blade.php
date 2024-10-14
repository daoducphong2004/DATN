@extends('user.layout.master')

@section('content')
    <div class="container" style="margin-top: 60px;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Series of tên đăng nhập
                    </div>
                    <div class="panel-body">

                        <div style="float: right; margin-bottom: 20px">
                            <form class="form-inline" method="post">
                                <input type="hidden" name="_token" value="2jWxkFxRgh4jHZZhX91HqtG38rhoyVQmdPpewFZ9">
                                <div class="input-group">
                                    <input style="width: 300px" type="text" class="form-control" name="keywords"
                                        placeholder="Tên truyện" id="keywords_input" value="">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="submit" value="Tìm kiếm">Tìm kiếm</button>
                                    </span>
                                </div>
                            </form>
                        </div>

                        <table class="table">
                            <tbody>
                                <tr>
                                    <th class="col-xs-7 col-sm-6 col-md-5 col-lg-6">Tên truyện</th>
                                    <th class="hidden-xs col-sm-3 col-md-2 col-lg-2">Người đăng</th>
                                    <th class="hidden-xs hidden-sm col-md-2 col-lg-2">Nhóm dịch</th>
                                    <th class="col-xs-5 col-sm-3 col-md-3 col-lg-2 text-right">Quản lý</th>
                                </tr>

                                <tr>
                                    @forelse ($books as $book)
                                <tr>
                                    <!-- Tên truyện -->
                                    <td>{{ $book->title }}</td>

                                    <!-- Người đăng (lấy từ quan hệ user) -->
                                    <td>{{ $book->user->username ?? 'N/A' }}</td>

                                    <!-- Nhóm dịch (lấy từ quan hệ group) -->
                                    <td>{{ $book->group->name ?? 'Không có nhóm' }}</td>

                                    <!-- Quản lý (các thao tác như xem, sửa, xóa) -->
                                    <td class="text-right">
                                        <a href="{{ route('truyen.truyen', $book->slug) }}"
                                            class="btn btn-info btn-sm">Xem</a>
                                        <a href="#" class="btn btn-warning btn-sm">Sửa</a>
                                        <form action="#" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Xóa</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4">Không có truyện nào</td>
                                </tr>
                                @endforelse
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
