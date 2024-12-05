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
        <table class="table">
            <thead>
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

                            <a class="btn btn-primary" href="{{ route('admin_chapter_approval', $story->id) }}">Chi tiết</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center">Không có truyện cần duyệt</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

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
@endsection
