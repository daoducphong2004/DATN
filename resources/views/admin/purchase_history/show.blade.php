@extends('admin.layouts.default')

@section('title')
    @parent
    Danh sách tài khoản đã mua chương
@endsection

@push('styles')
@endpush

@section('content')
    {{-- <div class="container">
        <h2 class="text-primary mb-4">Chương Đã Mua Của Tài Khoản: {{ $user->username }}</h2>

        @if ($purchasedChapters->isEmpty())
            <p>Người dùng này chưa mua chương nào.</p>
        @else
            <table id="show-purchase-history" class="table">
                <thead>
                    <tr>
                        <th>ID Chương</th>
                        <th>Tiêu Đề Chương</th>
                        <th>Tập</th>
                        <th>Truyện</th>
                        <th>Ngày Mua</th>
                        <th>Giá</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($purchasedChapters as $purchase)
                        <tr>
                            <td>{{ $purchase->chapter->id }}</td>
                            <td>{{ $purchase->chapter->title }}</td>
                            <td>{{ $purchase->chapter->episode->title }}</td>
                            <td>{{ $purchase->chapter->episode->book->title }}</td>
                            <td>{{ $purchase->purchase_date }}</td>
                            <td>{{ $purchase->price }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div> --}}

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h5 class="card-title mb-0 flex-grow-1">Chương Đã Mua Của Tài Khoản: {{ $user->username }}</h5>
                </div>
                <div class="card-body">
                    @if ($purchasedChapters->isEmpty())
                        <p>Người dùng này chưa mua chương nào.</p>
                    @else
                        <table id="example" class="table table-bordered dt-responsive table-striped align-middle"
                            style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID Chương</th>
                                    <th>Tiêu Đề Chương</th>
                                    <th>Tập</th>
                                    <th>Truyện</th>
                                    <th>Ngày Mua</th>
                                    <th>Giá</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($purchasedChapters as $purchase)
                                    <tr>
                                        <td>{{ $purchase->chapter->id }}</td>
                                        <td>{{ $purchase->chapter->title }}</td>
                                        <td>{{ $purchase->chapter->episode->title }}</td>
                                        <td>{{ $purchase->chapter->episode->book->title }}</td>
                                        <td>{{ $purchase->purchase_date }}</td>
                                        <td>{{ $purchase->price }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div><!--end col-->
    </div><!--end row-->
@endsection

@push('scripts')
@endpush
