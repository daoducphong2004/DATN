@extends('admin.layouts.default')

@section('title')
    @parent
    Danh sách yêu cầu quyền tác giả - Cổng Light Novel - Đọc Light Novel
@endsection

@push('styles')
@endpush

@section('content')
    @auth
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-2 flex-grow-1">Danh sách tác giả chờ duyệt</h5>
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @elseif(session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                    </div>
                    <div class="card-body">
                        <table id="example" class="table table-bordered dt-responsive table-striped align-middle"
                            style="width:100%">
                            <thead>
                                <tr>
                                    <th>Họ tên</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Trạng thái</th>
                                    <th>Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($requests as $request)
                                    <tr>
                                        <td>{{ $request->user->username }}</td>
                                        <td>{{ $request->user->email }}</td>
                                        <td>{{ $request->phone }}</td>
                                        <td>
                                            @if ($request->is_approve == 'pending')
                                                <span class="badge badge-warning" style="background-color: #f7b84b">Đang chờ duyệt</span>
                                            @elseif($request->is_approve == 'accepted')
                                                <span class="badge badge-success" style="background-color: rgb(127, 253, 65)">Đã chấp nhận</span>
                                            @elseif($request->is_approve == 'rejected')
                                                <span class="badge badge-danger" style="background-color: red">Đã từ chối</span>
                                            @endif
                                        </td>
                                        <td>
                                            <button class="btn btn-warning toggle-collapse" data-bs-target="#collapse-{{ $request->id }}" type="button" style="padding: 3px 13px; ">
                                                <span>....</span>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="collapse" id="collapse-{{ $request->id }}">
                                        <td colspan="5">
                                            <div class="card card-body">
                                                <p><h5>Lý do:</h5> {{ $request->reason }}</p>
                                                <hr>
                                                <p><h5>Ảnh:</h5>
                                                <div class="d-flex justify-content-between">
                                                    <div class="flex-grow-1 text-center">
                                                        <strong>Ảnh CMND/CCCD (Trước):</strong><br>
                                                        @if ($request->front_id_image)
                                                            <img src="{{ Storage::url($request->front_id_image) }}" alt="CMND/CCCD Trước" width="100" class="img-fluid">
                                                        @else
                                                            Không có ảnh
                                                        @endif
                                                    </div>
                                                    <div class="flex-grow-1 text-center">
                                                        <strong>Ảnh CMND/CCCD (Sau):</strong><br>
                                                        @if ($request->back_id_image)
                                                            <img src="{{ asset('storage/' . $request->back_id_image) }}" alt="CMND/CCCD Sau" width="100" class="img-fluid">
                                                        @else
                                                            Không có ảnh
                                                        @endif
                                                    </div>
                                                    <div class="flex-grow-1 text-center">
                                                        <strong>Ảnh chân dung:</strong><br>
                                                        @if ($request->portrait_image)
                                                            <img src="{{ asset('storage/' . $request->portrait_image) }}" alt="Ảnh chân dung" width="100" class="img-fluid">
                                                        @else
                                                            Không có ảnh
                                                        @endif
                                                    </div>
                                                </div>

                                                <hr>
                                                {{-- <p><h5>Thao tác:</h5> --}}
                                                @if ($request->is_approve == 'pending')
                                                <p><h5>Thao tác:</h5>
                                                    <div class="form ms-5" style="display: flex; align-items: center;">
                                                        <form action="{{ route('accept_request', $request->id) }}" method="POST" class="d-inline-block">
                                                            @csrf
                                                            <button type="submit" class="btn btn-success" onclick="return confirm('Bạn có chắc muốn xác nhận?')">Chấp nhận</button>
                                                        </form>
                                                        <button type="button" class="btn btn-danger ms-3" data-bs-toggle="modal" data-bs-target="#delete" data-id="{{ $request->id }}">
                                                            Từ chối
                                                        </button>

                                                        <!-- Modal từ chối -->
                                                        <div class="modal fade" id="delete" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <form method="POST" action="{{ route('reject_request',  $request->id) }}" id="rejectForm">
                                                                        @csrf
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="deleteModalLabel">Lý do từ chối</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="mb-3">
                                                                                <label for="reason_reject" class="form-label">Lý do từ chối</label>
                                                                                <textarea class="form-control" name="reason_reject" rows="3" required></textarea>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                                                                            <button type="submit" class="btn btn-danger">Từ chối</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @elseif ($request->is_approve == 'rejected')
                                                    <p><h5>Mô tả:</h5>
                                                    <div class="text-muted ms-5">
                                                        <strong>Lý do từ chối:</strong> {{ $request->reason_reject }}
                                                    </div>
                                                @else
                                                    <p><h5>Mô tả:</h5>
                                                    <span class="text-muted ms-5" style="background-color: rgb(127, 253, 65); color: white; padding: 3px 10px; border-radius: 20px; font-weight: bold; text-align: center; display: inline-block;">
                                                        Đã hoàn thành
                                                    </span>
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="text-center" style="padding: 5px">
                        <div id="pagination">
                            {{ $requests->links() }}
                        </div>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    @else
        <div class="alert alert-warning">
            Bạn cần đăng nhập để xem nội dung này.
        </div>
    @endauth
@endsection

@push('scripts')
    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Duyệt qua tất cả các phần tử có class 'toggle-collapse'
            const toggles = document.querySelectorAll('.toggle-collapse');

            toggles.forEach(toggle => {
                toggle.addEventListener('click', function() {
                    // Lấy target của collapse
                    const target = document.querySelector(this.getAttribute('data-bs-target'));
                    const icon = this.querySelector('i');  // Lấy icon của nút

                    // Kiểm tra xem target có đang hiển thị không
                    if (target.classList.contains('show')) {
                        // Nếu có, ẩn phần chi tiết
                        target.classList.remove('show');
                        icon.classList.remove('fa-minus');
                        icon.classList.add('fa-plus');
                    } else {
                        // Nếu chưa, hiển thị phần chi tiết
                        target.classList.add('show');
                        icon.classList.remove('fa-plus');
                        icon.classList.add('fa-minus');
                    }
                });
            });
        });
    </script>
@endpush


