@extends('admin.layouts.default')

@section('title')
    @parent
    Duyệt truyện
@endsection

@section('content')
    <div class="p-4" style="min-height: 800px;">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <h2 class="text-primary mb-4">Danh Sách Truyện Cần Duyệt</h2>
        <a href="{{ route('admin_storylist') }}" class="btn btn-primary mb-4">
            <i class="fas fa-arrow-left"></i> Quay lại danh sách truyện
        </a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Tên truyện</th>
                    <th>Người đăng</th>
                    <th>Lý do</th>
                    <th>Tình trạng</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($Histories as $history)
                    <tr>
                        <td>{{ $history->book->title }}</td>
                        <td>{{ $history->user->username }}</td>
                        <td>{{ $history->reason }}</td>
                        <td>{{ $history->status }}</td>

                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $Histories->links() }}
    </div>
@endsection
