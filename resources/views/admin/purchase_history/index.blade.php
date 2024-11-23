@extends('admin.layouts.default')

@section('title')
    @parent
    Danh sách tài khoản đã mua chương
@endsection

@push('styles')
@endpush

@section('content')
    {{-- <div class="container">
        <h2 class="text-primary mb-4">Danh Sách Tài Khoản Đã Mua Chương</h2>
        <table id="purchase-history" class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>User Name</th>
                    <th>Email</th>
                    <th>Số Chương Đã Mua</th>
                    <th>Chi Tiết</th> <!-- Thêm cột chi tiết -->
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>
                            <a href="{{ route('detailPurchaseUser', $user->id) }}">
                                {{ $user->username }}
                            </a>
                        </td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->purchased_stories_count }}</td>
                        <td>
                            <a href="{{ route('detailPurchaseUser', $user->id) }}" class="btn btn-info">Xem Chi Tiết</a>
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
                    <h5 class="card-title mb-0 flex-grow-1">Danh Sách Tài Khoản Đã Mua Chương</h5>
                </div>
                <div class="card-body">
                    <table id="example" class="table table-bordered dt-responsive table-striped align-middle"
                        style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>User Name</th>
                                <th>Email</th>
                                <th>Số Chương Đã Mua</th>
                                <th>Chi Tiết</th> <!-- Thêm cột chi tiết -->
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>
                                        <a href="{{ route('detailPurchaseUser', $user->id) }}">
                                            {{ $user->username }}
                                        </a>
                                    </td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->purchased_stories_count }}</td>
                                    <td>
                                        <a href="{{ route('detailPurchaseUser', $user->id) }}" class="btn btn-info">Xem Chi
                                            Tiết</a>
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
