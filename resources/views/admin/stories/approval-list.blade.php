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
        {{-- <a href="{{ route('admin_storylist') }}" class="btn btn-primary mb-4">
            <i class="fas fa-arrow-left"></i> Quay lại danh sách truyện
        </a> --}}
        {{-- <a href="{{ route('admin_story_approvalhistory') }}" class="btn btn-primary mb-4">
            <i class="fas fa-clock-rotate-left"></i> Lịch sử duyệt truyện
        </a> --}}

        <ul class="nav nav-tabs" id="approvalTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="stories-tab" data-bs-toggle="tab" data-bs-target="#stories"
                    type="button" role="tab" aria-controls="stories" aria-selected="true">
                    Truyện có chương
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="no-chapters-tab" data-bs-toggle="tab" data-bs-target="#no-chapters"
                    type="button" role="tab" aria-controls="no-chapters" aria-selected="false">
                    Truyện không có chương
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="approval-history" data-bs-toggle="tab" data-bs-target="#approvalhistory"
                    type="button" role="tab" aria-controls="approvalhistory" aria-selected="false">
                    Lịch sử duyệt truyện
                </button>
            </li>
        </ul>
        <style>
            /* Tab đang được chọn */
            .nav-tabs .nav-link.active {
                font-weight: bold;
                color: #364574;
            }

            /* Tab không được chọn */
            .nav-tabs .nav-link {
                font-weight: normal;
                color: #6c757d;

            }

            /* Hover hiệu ứng */
            .nav-tabs .nav-link:hover {
                color: #364574;
                /* Chữ sáng lên khi hover */
            }
        </style>


        <div class="tab-content mt-4" id="approvalTabsContent">
            <div class="tab-pane fade show active" id="stories" role="tabpanel" aria-labelledby="stories-tab">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead class="table-secondary">
                            <tr>
                                <th>Tiêu đề</th>
                                <th>Tác giả</th>
                                <th>Số chương chưa duyệt</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($pendingStories as $story)
                                <tr>
                                    <td>{{ $story->title }}</td>
                                    <td>{{ $story->user->username }}</td>
                                    <td>{{ $story->pending_chapters_count }}</td>
                                    <td>
                                        <a class="btn btn-sm btn-primary"
                                            href="{{ route('admin_chapter_approval', $story->id) }}">
                                            <i class="fas fa-eye"></i> Chi tiết
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center text-muted">Không có truyện cần duyệt</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="tab-pane fade" id="no-chapters" role="tabpanel" aria-labelledby="no-chapters-tab">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead class="table-secondary">
                            <tr>
                                <th>ID</th>
                                <th>Tiêu đề</th>
                                <th>Tác giả</th>
                                <th>Trạng thái</th>
                                <th>Ngày tạo</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($noChapterStories as $story)
                                <tr>
                                    <td>{{ $story->id }}</td>
                                    <td>{{ $story->title }}</td>
                                    <td>{{ $story->user->username }}</td>
                                    <td>Chưa có chương</td>
                                    <td>{{ $story->created_at->format('d-m-Y H:i') }}</td>
                                    <td>
                                        <a href="{{ route('Letter.create') }}?receiver={{ $story->user->username }}"
                                            class="btn btn-sm btn-success">
                                            <i class="fas fa-ban"></i> Liên hệ
                                        </a>
                                        <!-- Nút Xóa -->
                                        <a href="#" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#deleteModal" data-id="{{ $story->id }}">
                                            <i class="fas fa-ban"></i> Xoá truyện
                                        </a>

                                        <!-- Modal -->
                                        <div class="modal fade" id="deleteModal" tabindex="-1"
                                            aria-labelledby="deleteModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <form id="deleteForm" method="POST"
                                                        action="{{ route('admin_booksdelete') }}">
                                                        @csrf
                                                        <input type="hidden" name="book_id" id="deleteBookId">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="deleteModalLabel">Xóa Truyện</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="mb-3">
                                                                <label for="reason" class="form-label">Lý do xóa</label>
                                                                <textarea class="form-control" name="reason" id="reason" rows="3" required></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Hủy</button>
                                                            <button type="submit" class="btn btn-danger">Xóa</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center text-muted">Không có truyện nào</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="tab-pane fade" id="approvalhistory" role="tabpanel" aria-labelledby="approval-history">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead class="table-secondary">
                            <tr>
                                <th>Tên truyện</th>
                                <th>Chương</th>
                                <th>Người đăng</th>
                                <th>Lý do</th>
                                <th>Tình trạng</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($combined as $history)
                            {{-- {{    dd($combined) }} --}}
                                <tr>
                                    <td>{{ $history->chapter->book->title ?? 'Không có dữ liệu' }}</td>
                                    <td>{{ $history->chapter->title ?? 'N/A' }}</td>
                                    <td>{{ $history->user->username ?? 'N/A' }}</td>
                                    <td>{{ $history->reason }}</td>
                                    <td>{{ $history->status }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        <div class="mt-3">
            {{ $pendingStories->links() }}
        </div>

    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Hiển thị modal khi bấm nút "Từ chối"
            document.querySelectorAll("[data-bs-toggle='modal']").forEach(button => {
                button.addEventListener("click", function() {
                    const storyId = this.getAttribute("data-id");
                    const modal = document.getElementById(`rejectModal-${storyId}`);
                    if (modal) {
                        modal.style.display = "flex";
                    }
                });
            });

            // Đóng modal khi bấm nút "Hủy" hoặc nút đóng
            document.querySelectorAll(".close-modal").forEach(button => {
                button.addEventListener("click", function() {
                    const storyId = this.getAttribute("data-id");
                    const modal = document.getElementById(`rejectModal-${storyId}`);
                    if (modal) {
                        modal.style.display = "none";
                    }
                });
            });

            // Đóng modal khi click bên ngoài nội dung modal
            document.querySelectorAll(".modal").forEach(modal => {
                modal.addEventListener("click", function(e) {
                    if (e.target === this) {
                        this.style.display = "none";
                    }
                });
            });
        });
    </script>

    <script>
        const deleteModal = document.getElementById('deleteModal');
        deleteModal.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget; // Nút được bấm
            const bookId = button.getAttribute('data-id'); // Lấy ID truyện
            document.getElementById('deleteBookId').value = bookId; // Truyền vào form
        });
    </script>
@endsection
