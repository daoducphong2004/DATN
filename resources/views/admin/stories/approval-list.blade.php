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
        <a href="{{ route('admin_story_approvalhistory') }}" class="btn btn-primary mb-4">
            <i class="fas fa-clock-rotate-left"></i> Lịch sử duyệt truyện
        </a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Tên truyện</th>
                    <th>Người đăng</th>
                    <th>Số chương</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pendingStories as $story)
                    <tr>
                        <td>{{ $story->title }}</td>
                        <td>{{ $story->user->username }}</td>
                        <td>{{ $story->chapters_count }}</td>
                        <td>
                            <form action="{{ route('admin_story_approve', $story->id) }}" method="POST"
                                style="display:inline-block;">
                                @csrf
                                <button type="submit" class="btn btn-success">Duyệt</button>
                            </form>

                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                data-id="{{ $story->id }}">
                                Từ chối
                            </button>

                            <!-- Modal nhập lý do từ chối -->
                            <div id="rejectModal-{{ $story->id }}" class="modal" style="display: none;">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Từ chối truyện</h5>
                                        <button type="button" class="close-modal"
                                            data-id="{{ $story->id }}">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('admin_story_reject', $story->id) }}" method="POST">
                                            @csrf
                                            <label for="reason-{{ $story->id }}">Lý do từ chối:</label>
                                            <textarea name="reason" id="reason-{{ $story->id }}" class="form-control" rows="4" required></textarea>
                                            <div class="modal-footer">
                                                <button type="button" class="close-modal btn btn-secondary"
                                                    data-id="{{ $story->id }}">Hủy</button>
                                                <button type="submit" class="btn btn-danger">Từ chối</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <style>
                                .modal {
                                    position: fixed;
                                    top: 0;
                                    left: 0;
                                    width: 100%;
                                    height: 100%;
                                    background: rgba(0, 0, 0, 0.5);
                                    display: flex;
                                    justify-content: center;
                                    align-items: center;
                                    z-index: 1000;
                                }

                                .modal-content {
                                    background: #fff;
                                    border-radius: 8px;
                                    width: 90%;
                                    max-width: 500px;
                                    padding: 20px;
                                    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
                                }

                                .modal-header {
                                    display: flex;
                                    justify-content: space-between;
                                    align-items: center;
                                }

                                .close-modal {
                                    background: none;
                                    border: none;
                                    font-size: 1.5rem;
                                    cursor: pointer;
                                }

                                .modal-footer {
                                    margin-top: 20px;
                                    display: flex;
                                    justify-content: flex-end;
                                    gap: 10px;
                                }
                            </style>

                            <a class="btn btn-primary" href="{{ route('admin_storyshow', $story->id) }}">Chi tiết</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $pendingStories->links() }}
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
@endsection
