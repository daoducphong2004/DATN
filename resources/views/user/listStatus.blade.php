@extends('user.layout.master')

@section('content')
    <div class="container" style="margin-top: 60px;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>Chi tiết truyện: {{ $book->title }}</h3>
                    </div>
                    <div class="panel-body mt-3">
                        @if ($chapters->isNotEmpty())
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="hidden-xs hidden-sm col-md-2 col-lg-1">ID</th>
                                        <th class="col-xs-7 col-sm-6 col-md-5 col-lg-5">Chương</th>
                                        <th class="hidden-xs hidden-sm col-md-2 col-lg-3">Ngày đăng</th>
                                        <th class="hidden-xs hidden-sm col-md-2 col-lg-3">Trạng thái</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($chapters  as $chapter)
                                        <tr>
                                            <td>{{ $chapter->id }}</td>
                                            <td>
                                                <a href="{{ route('chapter.show', [$book->slug, $chapter->slug]) }}">
                                                    {{ $chapter->title }}
                                                </a>
                                            </td>
                                            <td>{{ $chapter->created_at->format('d-m-Y H:i') }}</td>
                                            <td>
                                                @if ($chapter->approval == '1')
                                                    <span class="text-success">Đã duyệt</span>
                                                @elseif ($chapter->approval == '2')
                                                    <span class="text-bg-danger">Từ chối</span>
                                                @else
                                                    <span class="text-warning">Đang chờ duyệt</span>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div>{{ $chapters ->links() }}</div>
                        @else
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="hidden-xs hidden-sm col-md-2 col-lg-1">ID</th>
                                        <th class="col-xs-7 col-sm-6 col-md-5 col-lg-4">Truyện</th>
                                        <th class="col-xs-7 col-sm-6 col-md-5 col-lg-3">Chương</th>
                                        <th class="hidden-xs hidden-sm col-md-2 col-lg-2">Ngày đăng</th>
                                        <th class="hidden-xs hidden-sm col-md-2 col-lg-2">Trạng thái</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $book->id }}</td>
                                        <td>{{ $book->title}}</td>
                                        <td>N/A</td>
                                        <td>{{ $book->created_at->format('d-m-Y H:i') }}</td>
                                        <td>
                                            <span class="text-warning">
                                               @if ($book->approval == '1')
                                                    <span class="text-success">Đã duyệt</span>
                                                @elseif ($book->approval == '2')
                                                    <span class="text-bg-danger">Từ chối</span>
                                                @else
                                                    <span class="text-warning">Đang chờ duyệt</span>
                                                @endif
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
