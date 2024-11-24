@extends('admin.layouts.default')

@section('title')
    @parent
    Danh sách báo cáo
@endsection

@push('styles')
@endpush
@section('content')
    {{-- <div class="p-4" style="min-height: 800px;">
        @if (session('message'))
            <div class="alert alert-primary" role="alert">
                {{ session('message') }}
            </div>
        @endif
        <h2 class="text-primary mb-4">Danh Sách Báo Cáo</h2>
        <table id="list-report" class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Truyện bị báo cáo</th>
                    <th>Người báo cáo</th>
                    <th>Lý do</th>
                    <th>Mô tả</th>
                    <th>Trạng thái</th>
                    <th>Xử lý</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reports as $report)
                    <tr>
                        <td>{{ $report->id }}</td>
                        <td>{{ $report->book->title }} (ID:{{ $report->book->id }})</td>
                        <td>{{ $report->user->username }} (ID:{{ $report->user->id }})</td>
                        <td>{{ implode(', ', json_decode($report->reason, true) ?? []) }}</td>
                        <td>{{ $report->description }}</td>
                        <td
                            class="{{ $report->status === 'Đã duyệt' ? 'text-success' : ($report->status === 'Chờ duyệt' ? 'text-warning' : 'text-danger') }}">
                            {{ $report->status }}
                        </td>
                        <td>
                            <form action="{{ route('reports.approve', $report->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('PATCH')
                                <button class="btn btn-info" type="submit">Đồng ý</button>
                            </form>

                            <form action="{{ route('reports.reject', $report->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('PATCH')
                                <button class="btn btn-danger" type="submit">Từ chối</button>
                            </form>

                            <form action="{{ route('reports.review', $report->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('PATCH')
                                <button class="btn btn-warning" type="submit">Chờ duyệt</button>
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
                    <h5 class="card-title mb-0 flex-grow-1">Danh Sách Báo Cáo</h5>
                    @if (session('message'))
                        <div class="alert alert-primary" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif
                </div>
                <div class="card-body">
                    <table id="example" class="table table-bordered dt-responsive table-striped align-middle"
                        style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Truyện bị báo cáo</th>
                                <th>Người báo cáo</th>
                                <th>Lý do</th>
                                <th>Mô tả</th>
                                <th>Trạng thái</th>
                                <th>Xử lý</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reports as $report)
                                <tr>
                                    <td>{{ $report->id }}</td>
                                    <!-- Hiển thị tên sách bị báo cáo -->
                                    <td>{{ $report->book->title }} (ID:{{ $report->book->id }})</td>
                                    <!-- Hiển thị tên người báo cáo -->
                                    <td>{{ $report->user->username }} (ID:{{ $report->user->id }})</td>
                                    <td>{{ implode(', ', json_decode($report->reason, true) ?? []) }}</td>
                                    <td>{{ $report->description }}</td>
                                    {{-- <td>{{ $report->status }}</td> --}}
                                    <td>
                                        <span
                                            class="{{ $report->status === 'Đã duyệt' ? 'badge bg-success' : ($report->status === 'Chờ duyệt' ? 'badge bg-warning' : 'badge bg-danger') }}">
                                            {{ $report->status }}
                                        </span>
                                    </td>
                                    <td>
                                        <div class="d-flex gap-1 justify-content-center">
                                            <!-- Nút Đồng ý -->
                                            <form action="{{ route('reports.approve', $report->id) }}" method="POST">
                                                @csrf
                                                @method('PATCH')
                                                <button class="btn btn-sm btn-success" type="submit">Đồng ý</button>
                                            </form>

                                            <!-- Nút Từ chối -->
                                            <form action="{{ route('reports.reject', $report->id) }}" method="POST">
                                                @csrf
                                                @method('PATCH')
                                                <button class="btn btn-sm btn-danger" type="submit">Từ chối</button>
                                            </form>

                                            <!-- Nút Xem xét lại -->
                                            <form action="{{ route('reports.review', $report->id) }}" method="POST">
                                                @csrf
                                                @method('PATCH')
                                                <button class="btn btn-sm btn-warning" type="submit">Chờ duyệt</button>
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
