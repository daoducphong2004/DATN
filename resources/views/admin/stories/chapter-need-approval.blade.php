@extends('admin.layouts.default')

@section('title')
    @parent
    Duyệt truyện
@endsection

@section('content')
    <div class="container">
        <h1 class="mb-4">Danh sách Chapter chưa duyệt</h1>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tiêu đề</th>
                    <th>Thuộc truyện</th>
                    <th>Tác giả</th>
                    <th>Ngày tạo</th>
                    <th>Số từ</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($chapters as $chapter)
                    <tr>
                        <td>{{ $chapter->id }}</td>
                        <td>{{ $chapter->title }}</td>
                        <td>{{ $chapter->book->title ?? 'N/A' }}</td>
                        <td>{{ $chapter->user->username ?? 'N/A' }}</td>
                        <td>{{ $chapter->created_at->format('d-m-Y H:i') }}</td>
                        <td>{{ $chapter->word_count }}</td>
                        <td>
                            <form action="{{ route('admin.chapter.approve', $chapter->id) }}" method="POST"
                                style="display:inline-block;">
                                @csrf
                                <button type="submit" class="btn btn-success">Duyệt</button>
                            </form>
                            <!-- Button mở modal Từ chối -->
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#rejectModal-{{ $chapter->id }}">
                                Từ chối
                            </button>
                            <!-- Modal Từ chối -->
                            <div class="modal fade" id="rejectModal-{{ $chapter->id }}" tabindex="-1"
                                aria-labelledby="rejectModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="rejectModalLabel">Từ chối Chapter:
                                                {{ $chapter->title }}</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('admin.chapter.reject', $chapter->id) }}"
                                                method="POST">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="reason-{{ $chapter->id }}" class="form-label">Lý do từ
                                                        chối</label>
                                                    <textarea name="reason" id="reason-{{ $chapter->id }}" class="form-control" rows="4" required></textarea>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Hủy</button>
                                                    <button type="submit" class="btn btn-danger">Từ chối</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#chapterModal" data-id="{{ $chapter->id }}">
                                Chi tiết
                            </button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center">Không có chapter nào cần duyệt</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <div class="mt-3">
            {{ $chapters->links() }}
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>


    <!-- Modal -->
    <div class="modal fade" id="chapterModal" tabindex="-1" aria-labelledby="chapterModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="chapterModalLabel">Chi tiết Chapter</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h3 id="chapter-title"></h3>
                    <div id="chapter-content" class="mt-3">
                        <!-- Nội dung chapter sẽ được hiển thị ở đây -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Tìm tất cả các nút có chức năng mở modal từ chối
        const rejectButtons = document.querySelectorAll(
            '[data-bs-toggle="modal"][data-bs-target^="#rejectModal"]');
        const chapterModal = document.getElementById('chapterModal');
        const chapterTitle = document.getElementById('chapter-title');
        const chapterContent = document.getElementById('chapter-content');

        chapterModal.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget;
            const chapterId = button.getAttribute('data-id');

            // Gọi API để lấy nội dung chapter
            fetch(`/admin/api/chapters/${chapterId}`)
                .then(response => response.json())
                .then(data => {
                    if (data.error) {
                        chapterTitle.textContent = 'Lỗi';
                        chapterContent.textContent = data.error;
                    } else {
                        chapterTitle.textContent = data.title;
                        chapterContent.innerHTML = data
                            .content; // Hiển thị nội dung với định dạng HTML
                    }
                })
                .catch(error => {
                    chapterTitle.textContent = 'Lỗi';
                    chapterContent.textContent = 'Không thể tải nội dung.';
                    console.error('Error fetching chapter content:', error);
                });
        });

    });
</script>
