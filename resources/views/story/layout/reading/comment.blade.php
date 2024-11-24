<section id="chapter-comments" class="basic-section dark:bg-[#1f1f1f] dark:text-white dark:border dark:border-[#1f1f1f]">
    <header class="sect-header tab-list dark:bg-[#2a2a2a] dark:border-[#2a2a2a]">
        <span class="sect-title tab-title" data-tab-index="1">Bình luận <span class="comments-count">(2)</span></span>
    </header>
    <main id="fbcmt_root" class="sect-body">
        <span style="padding: 10px; display: inline-block;">Báo cáo bình luận không phù hợp ở <a
                href="/thao-luan/619-bao-cao-binh-luan" style="color: blue">đây</a></span>
        <div id="tab-content-1" class="tab-content clear">
            <section class="ln-comment">
                <header>
                    <h3 class="text-lg font-bold dark:text-white">2 Bình luận </h3>
                    <!-- <i id="refresh_comment" class="fas fa-refresh" aria-hidden="true" style="margin-left: 10px; font-size: 18px"></i></h3> -->
                </header>

                <main class="ln-comment-body">
                    <div id="ln-comment-submit" class="ln-comment-form clear">
                        <form action="{{ route('addChapterComment') }}" method="POST" class="comment_form">
                            @csrf

                            <textarea name="content" class="comment_content"></textarea>
                            <input type="hidden" name="chapter_id" value="{{ $chapter->id }}">
                            <input type="hidden" name="parent_id" value="">
                            <div class="comment_toolkit clear">
                                <input class="button" type="submit" value="Đăng bình luận">
                            </div>
                        </form>

                    </div>
                    <div id="comments-container"></div>
                    <div class="ln-comment-page">
                        <div class="pagination-footer">
                            <div id="pagination-container" class="pagination_wrap">

                            </div>
                        </div>
                    </div>

        </div>
    </main>
</section>
@include('layouts.TinyMCEscriptNoImport')
<script>
    $(document).ready(function() {
        const chapterId = {{ $chapter->id }};
        let currentPage = 1; // Trang hiện tại
        let lastPage = 1; // Tổng số trang
        function loadComments(chapterId, page = 1) {
            // Lấy user-id từ thẻ meta
            const userId = document.querySelector('meta[name="user-id"]').getAttribute('content');

            // Gửi yêu cầu GET bằng Fetch API
            fetch(`/comments-chapter?chapter_id=${chapterId}&page=${page}`)
                .then((response) => {
                    if (!response.ok) {
                        throw new Error("Network response was not ok");
                    }
                    return response.json();
                })
                .then((data) => {
                    const commentsContainer = document.getElementById("comments-container");
                    commentsContainer.innerHTML = ""; // Xóa nội dung hiện tại
                    // Lặp qua các bình luận
                    data.data.forEach((comment) => {
                        let repliesHtml = "";
                        let deleteButton = '';
                        if (comment.user.id == userId) {
                            deleteButton = `
                         <a class="self-center visible-toolkit-item span-delete cursor-pointer" data-id-delete='${userId}' >
                            <i class="fas fa-times"></i>
                            <span class="font-semibold">Xoá</span>
                        </a>`;
                        }
                        // Lặp qua các reply của comment
                        if (comment.replies && comment.replies.length > 0) {
                            comment.replies.forEach(reply => {
                                // Kiểm tra nếu user_id của reply trùng với user_id trong meta
                                let deleteButtonRL = '';
                                if (reply.user.id == userId) {
                                    deleteButtonRL = `
                        <a class="self-center visible-toolkit-item span-delete cursor-pointer"  data-id-delete='${userId}>
                            <i class="fas fa-times"></i>
                            <span class="font-semibold">Xoá</span>
                        </a>`;
                                }

                                repliesHtml += `
                                <div class="ln-comment-reply">
                                <div id="ln-comment-${reply.id}" class="ln-comment-item mt-3 clear" data-comment="${reply.id}">
                                    <div class="flex gap-1 max-w-full">
                                        <div class="w-[50px]">
                                            <div class="mx-1 my-1">
                                                <img src="${reply.user.avatar_url ?? '/default-avatar.png'}" class="w-full rounded-full" />
                                            </div>
                                        </div>
                                        <div class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800">
                                            <div class="flex min-w-0 flex-col px-2">
                                                <div class="flex align-top justify-between">
                                                    <div class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                                                        <div class="self-center">
                                                            <a class="font-bold leading-6 md:leading-7 ln-username" href="#">
                                                                ${reply.user.username}
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="px-2 md:px-3 md:py-1 text-lg md:text-xl cursor-pointer" x-data="{ show: false }">
                                                        <div @click="show = !show">
                                                            <i class="fas fa-angle-down"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ln-comment-content long-text">
                                                    ${reply.content}
                                                </div>
                                                <div class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                                    <a href="#" class="text-slate-500">
                                                        <time class="timeago" title="${new Date(reply.created_at).toLocaleString()}" datetime="${reply.created_at}">
                                                            ${moment(reply.created_at).fromNow()}
                                                        </time>
                                                    </a>
                                                    ${deleteButton}
                                                    <a class="self-center visible-toolkit-item do-reply cursor-pointer"
                                                    data-chapter-id="${chapterId}"
                                                    data-comment-id="${comment.id}"
                                                    data-parent-id="${comment.parent_id ?? 0}">
                                                        <i class="fas fa-comment me-1"></i>
                                                        <span class="font-semibold">Trả lời</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>`;
                            });
                        }

                        // Tạo HTML cho comment chính và thêm replies
                        $('#comments-container').append(`
                        <div class="ln-comment-group">
                        <div id="ln-comment-${comment.id}" class="ln-comment-item mt-3 clear" data-comment="${comment.id}">
                            <div class="flex gap-1 max-w-full">
                                <div class="w-[50px]">
                                    <div class="mx-1 my-1">
                                        <img src="${comment.user.avatar_url ?? '/default-avatar.png'}" class="w-full rounded-full" />
                                    </div>
                                </div>
                                <div class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800">
                                    <div class="flex min-w-0 flex-col px-2">
                                        <div class="flex align-top justify-between">
                                            <div class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                                                <div class="self-center">
                                                    <a class="font-bold leading-6 md:leading-7 ln-username" href="#">
                                                        ${comment.user.username}
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="px-2 md:px-3 md:py-1 text-lg md:text-xl cursor-pointer" x-data="{ show: false }">
                                                <div @click="show = !show">
                                                    <i class="fas fa-angle-down"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ln-comment-content long-text">
                                            ${comment.content}
                                        </div>
                                        <div class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                            <a href="#" class="text-slate-500">
                                                <time class="timeago" title="${new Date(comment.created_at).toLocaleString()}" datetime="${comment.created_at}">
                                                    ${moment(comment.created_at).fromNow()}
                                                </time>
                                            </a>
                                            ${deleteButton}
                                            <a class="self-center visible-toolkit-item do-reply cursor-pointer"
                                            data-chapter-id="${chapterId}"
                                            data-comment-id="${comment.id}"
                                            data-parent-id="${comment.parent_id ?? 0}">
                                                <i class="fas fa-comment me-1"></i>
                                                <span class="font-semibold">Trả lời</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ${repliesHtml}
                    </div>`);
                    });
                    // Cập nhật số trang hiện tại và số trang cuối
                    currentPage = data.current_page;
                    lastPage = data.last_page;

                    updatePagination(); // Cập nhật phân trang
                })
                .catch((error) => {
                    console.error("Error loading comments:", error);
                    alert("Đã xảy ra lỗi khi tải danh sách bình luận. Vui lòng thử lại.");
                });
        }


        function updatePagination() {
            const paginationContainer = document.getElementById("pagination-container");
            paginationContainer.innerHTML = ""; // Xóa các nút phân trang hiện tại

            // Nút Previous
            if (currentPage > 1) {
                paginationContainer.insertAdjacentHTML("beforeend",
                    `<a href="#pagination-container" class="paging_item paging_prevnext prev" onclick="loadComments(${chapterId}, ${currentPage - 1})">Trước</a>`
                );
            } else {
                paginationContainer.insertAdjacentHTML("beforeend",
                    `<a href="#pagination-container" class="paging_item paging_prevnext prev disabled">Trước</a>`
                );
            }

            // Nút Next
            if (currentPage < lastPage) {
                paginationContainer.insertAdjacentHTML("beforeend",
                    `<a href="#pagination-container" class="paging_item paging_prevnext next" onclick="loadComments(${chapterId}, ${currentPage + 1})">Sau</a>`
                );
            } else {
                paginationContainer.insertAdjacentHTML("beforeend",
                    `<a href="#pagination-container" class="paging_item paging_prevnext next disabled">Sau</a>`
                );
            }
        }

        // Tải bình luận khi trang được tải
        loadComments(chapterId, page = 1);

    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"></script>
</div>
</main>
</section>
