document.addEventListener("DOMContentLoaded", function () {
    const viewButtons = document.querySelectorAll(".view-comment");
    const modal = document.getElementById("commentModal");
    const commentContent = document.getElementById("commentContent");
    const modalTitle = document.getElementById("modalTitle");

    // Function to clear the modal content
    window.clearCommentModal = function () {
        commentContent.innerHTML = "";
        modalTitle.textContent = "Chi tiết bình luận";
        $(modal).modal("hide");
    };

    viewButtons.forEach((button) => {
        button.addEventListener("click", function () {
            const title = this.getAttribute("data-title");
            const content = this.getAttribute("data-content");

            modalTitle.textContent = "Chi tiết Thảo luận - " + title;
            commentContent.innerHTML = content;
            $(modal).modal("show");
        });
    });
});
