function _toConsumableArray(e) {
    return (
        _arrayWithoutHoles(e) ||
        _iterableToArray(e) ||
        _unsupportedIterableToArray(e) ||
        _nonIterableSpread()
    );
}
function _nonIterableSpread() {
    throw new TypeError(
        "Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."
    );
}
function _unsupportedIterableToArray(e, t) {
    if (e) {
        if ("string" == typeof e) return _arrayLikeToArray(e, t);
        var n = Object.prototype.toString.call(e).slice(8, -1);
        return (
            "Object" === n && e.constructor && (n = e.constructor.name),
            "Map" === n || "Set" === n
                ? Array.from(e)
                : "Arguments" === n ||
                    /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)
                    ? _arrayLikeToArray(e, t)
                    : void 0
        );
    }
}
function _iterableToArray(e) {
    if (
        ("undefined" != typeof Symbol && null != e[Symbol.iterator]) ||
        null != e["@@iterator"]
    )
        return Array.from(e);
}
function _arrayWithoutHoles(e) {
    if (Array.isArray(e)) return _arrayLikeToArray(e);
}
function _arrayLikeToArray(e, t) {
    (null == t || t > e.length) && (t = e.length);
    for (var n = 0, o = new Array(t); n < t; n++) o[n] = e[n];
    return o;
}
function _typeof(e) {
    return (
        (_typeof =
            "function" == typeof Symbol && "symbol" == typeof Symbol.iterator
                ? function (e) {
                    return typeof e;
                }
                : function (e) {
                    return e &&
                        "function" == typeof Symbol &&
                        e.constructor === Symbol &&
                        e !== Symbol.prototype
                        ? "symbol"
                        : typeof e;
                }),
        _typeof(e)
    );
}
function listab(e, t) {
    (t = t || 0),
        $(e + " .tab-title")
            .filter(function (e) {
                return e != t;
            })
            .addClass("tab-off"),
        $(".tab-content").eq(t).removeClass("none"),
        $(".tab-content")
            .filter(function (e) {
                return e != t;
            })
            .hide(),
        $(e + " .tab-title").on("click", function () {
            var t = $(this).data("tab-index");
            $(this).hasClass("tab-off") &&
                ($(e + " .tab-title").addClass("tab-off"),
                    $(this).removeClass("tab-off")),
                $(".tab-content").hide(),
                $("#tab-content-" + t).fadeIn("slow");
        });
}
function scrollhide(e) {
    var t,
        n = 0;
    $(e).outerHeight();
    $(window).scroll(function (e) {
        t = !0;
    }),
        setInterval(function () {
            t &&
                (!(function () {
                    var t = $(this).scrollTop();
                    if (Math.abs(n - t) <= 1) return;
                    t >= n
                        ? $(e).hide()
                        : t + $(window).height() < $(document).height() &&
                        $(e).show();
                    n = t;
                })(),
                    (t = !1));
        }, 250);
}
function scrollmenuside(e) {
    var t,
        n = 0;
    $(e).outerHeight();
    $(window).scroll(function (e) {
        t = !0;
    }),
        setInterval(function () {
            t &&
                (!(function () {
                    var t = $(this).scrollTop();
                    if (Math.abs(n - t) <= 1) return;
                    t >= n
                        ? ($(e).hide(), $("#mainpart").removeClass("menuside"))
                        : t + $(window).height() < $(document).height() &&
                        ($(e).show(), $("#mainpart").addClass("menuside"));
                    n = t;
                })(),
                    (t = !1));
        }, 250);
}
function getParameterByName(e, t) {
    t || (t = window.location.href), (e = e.replace(/[\[\]]/g, "\\$&"));
    var n = new RegExp("[?&]" + e + "(=([^&#]*)|&|#|$)").exec(t);
    return n
        ? n[2]
            ? decodeURIComponent(n[2].replace(/\+/g, " "))
            : ""
        : null;
}
if (
    ($(document).ajaxError(function (e, t, n, o) {
        var i = "",
            a = t.responseJSON;
        if (a) {
            if ("object" === _typeof(a.errors))
                for (var s in a.errors)
                    a.errors.hasOwnProperty(s) &&
                        a.errors[s].forEach(function (e) {
                            i += e + "\n";
                        });
            else i = a.message;
            alert(i);
        } else console.log(t.statusText);
    }),
        $("time.timeago").timeago(),
        (token = $('meta[name="csrf-token"]').attr("content")),
        $("#mainpart").css({
            "min-height": window.innerHeight - $("#footer").outerHeight(!0),
        }),
        $(window).on("resize", function () {
            $("#mainpart").css({
                "min-height": window.innerHeight - $("#footer").outerHeight(!0),
            });
        }),
        !$("main.reading-page").length)
) {
    var headroom = new Headroom(document.querySelector("#navbar"));
    headroom.init();
}
var sliderOptions = {
    controls: !1,
    mouseDrag: !0,
    navPosition: "bottom",
    slideBy: "page",
};
if (
    ($(".daily-recent_views .slider").length &&
        tns(
            Object.assign(
                {
                    container: ".daily-recent_views .slider",
                    items: 4,
                    loop: !1,
                    responsive: {
                        0: {
                            items: 2,
                        },
                        768: {
                            items: 3,
                        },
                        980: {
                            items: 4,
                        },
                        1200: {
                            items: 4,
                        },
                    },
                },
                sliderOptions
            )
        ),
        $(".js-finished-series .slider").length &&
        tns(
            Object.assign(
                {
                    container: ".js-finished-series .slider",
                    items: 8,
                    loop: !1,
                    responsive: {
                        0: {
                            items: 2,
                        },
                        768: {
                            items: 4,
                        },
                        980: {
                            items: 6,
                        },
                        1200: {
                            items: 8,
                        },
                    },
                },
                sliderOptions
            )
        ),
        $(".mobile-toggle header").click(function () {
            $(this).parent().find(".summary.at-series").toggle(),
                $(this).parent().find(".listall_summary.at-volume").toggle(),
                $(this).parent().find("main").toggle();
        }),
        $(window).on("scroll", function () {
            $(window).scrollTop() > 50
                ? $(".backtoTop").show()
                : $(".backtoTop").hide();
        }),
        $(".backtoTop").on("click", function () {
            var e = $(this).data("scrollto");
            $("html, body").animate({
                scrollTop: $(e).offset().top,
            });
        }),
        $(
            "#sidenav-icon, .nav-user_icon, #noti-icon, .nav-has-submenu, #guest-menu"
        ).on("click", function (e) {
            e.stopPropagation();
            var t = $(this),
                n = t.find(".hidden-block");
            t.parents(".hidden-block").first().is(":visible") ||
                ($(".active").not(t).removeClass("active"),
                    $(".hidden-block").not(n).addClass("none")),
                t.toggleClass("active"),
                n.toggleClass("none");
        }),
        $(document).on("click", function () {
            $("#navbar .hidden-block").addClass("none"),
                $("#navbar .active").removeClass("active");
        }),
        $("div.navbar-search").on("click", function (e) {
            e.stopPropagation();
        }),
        $(".nightmode-toggle").on("click", function (e) {
            e.stopPropagation(),
                $(this)
                    .find(".toggle-icon")
                    .find("i")
                    .toggleClass("fa-toggle-off fa-toggle-on"),
                Cookies.get("night_mode")
                    ? (Cookies.remove("night_mode"),
                        $("#night-mode-css").remove(),
                        $("html").removeClass("dark"))
                    : (Cookies.set("night_mode", !0, {
                        expires: 365,
                    }),
                        $("html").addClass("dark"),
                        window.location.reload());
        }),
        $(document).ajaxComplete(function () {
            $("time.timeago").timeago();
        }),
        document.addEventListener("alpine:init", function () {
            Alpine.store("toast", {
                on: !1,
                message: null,
                timeout: null,
                resetTime: function () {
                    this.timeout &&
                        (clearTimeout(this.timeout), (this.timeout = null));
                },
                show: function (e) {
                    var t = this;
                    (this.on = !0),
                        (this.message = e),
                        this.resetTime(),
                        (this.timeout = setTimeout(function () {
                            return t.hide();
                        }, 3e3));
                },
                hide: function () {
                    (this.on = !1), this.resetTime();
                },
                toggle: function () {
                    this.on = !this.on;
                },
            });
        }),
        "undefined" != typeof chapter_id &&
        chapter_id > 0 &&
        ((bookmark_data = {
            _token: token,
            chapter_id: chapter_id,
            line_id: 0,
        }),
            $("#bookmark_top").on("click", function () {
                if (($(this).addClass("on"), !isLoggedIn))
                    return alert("Bạn phải đăng nhập để sử dụng bookmark"), !1;
                var e =
                    $(".reading-content p#" + bookmark_data.line_id)
                        .text()
                        .trim()
                        .substring(0, 30) + "...";
                bookmark_data.line_id > 0 &&
                    $.post(
                        "/action/chapter/bookmark",
                        bookmark_data,
                        function (t) {
                            "success" == t.status
                                ? ($("ul#bookmarks_list").append(
                                    '<li data-line="' +
                                    t.line_id +
                                    '"><span class="pos_bookmark">Đoạn thứ ' +
                                    t.line_id +
                                    '</span><small style="display: block">' +
                                    e +
                                    '</small><span data-item="' +
                                    t.bookmark_id +
                                    '" class="del_bookmark remove_bookmark"><i class="fas fa-times"></i></span></li>'
                                ),
                                    alert(
                                        "Bạn đã lưu bookmark thành công đoạn thứ " +
                                        t.line_id
                                    ))
                                : alert(t.message);
                        },
                        "json"
                    );
            }),
            $(window).on("scroll", function () { }),
            $(function () {
                $(".reading-content p").on("click", function () {
                    var e = $(this);
                    if ($(window).width() > 979) {
                        var t =
                            e.offset().top -
                            $("body").offset().top +
                            e.scrollTop(),
                            n =
                                e.offset().left -
                                $(".reading-content").offset().left -
                                $(".save_bookmark").outerWidth(!0);
                        $(".save_bookmark").css({
                            height: e.height() + 28 + "px",
                            right: n + "px",
                            top: t + "px",
                            display: "",
                        });
                    } else $("#bookmark_top").toggleClass("on"), $("#rd-side_icon").toggle();
                    bookmark_data.line_id = e.attr("id");
                });
            }),
            $(".save_bookmark").on("click", function () {
                if (!isLoggedIn)
                    return alert("Bạn phải đăng nhập để sử dụng bookmark"), !1;
                $(window).width() > 979 &&
                    bookmark_data.line_id > 0 &&
                    $.post(
                        "/action/chapter/bookmark",
                        bookmark_data,
                        function (e) {
                            "success" == e.status
                                ? ($("ul#bookmarks_list").append(
                                    '<li data-line="' +
                                    e.line_id +
                                    '"><span class="pos_bookmark">Đoạn thứ ' +
                                    e.line_id +
                                    '</span><span data-item="' +
                                    e.bookmark_id +
                                    '" class="del_bookmark remove_bookmark"><i class="fas fa-times"></i></span></li>'
                                ),
                                    alert(
                                        "Bạn đã lưu bookmark thành công đoạn thứ " +
                                        e.line_id
                                    ))
                                : alert(e.message);
                        },
                        "json"
                    );
            }),
            $("ul#bookmarks_list").on("click", "span.pos_bookmark", function () {
                var e = $("#" + $(this).parent().data("line"));
                $("body,html").animate({
                    scrollTop:
                        e.offset().top - $("body").offset().top + e.scrollTop(),
                });
            }),
            $("ul#bookmarks_list").on("click", "span.remove_bookmark", function () {
                (_this = $(this)),
                    (bookmark_id = _this.data("item")),
                    $.post(
                        "/action/chapter/removebookmark",
                        {
                            _token: token,
                            bookmark_id: bookmark_id,
                        },
                        function (e) {
                            "success" == e.status &&
                                _this.parent().fadeOut("normal", function () {
                                    $(this).parent("li").remove();
                                });
                        },
                        "json"
                    );
            }),
            $(document).keydown(function (e) {
                if (
                    "INPUT" != e.target.nodeName &&
                    "TEXTAREA" != e.target.nodeName &&
                    1 != e.target.isContentEditable
                ) {
                    var t = e.which || e.keyCode,
                        n = $(".fa-backward").parent().attr("href") || "",
                        o = $(".fa-forward").parent().attr("href") || "";
                    switch (t) {
                        case 37:
                            "" != n && (window.location.href = n);
                            break;
                        case 39:
                            "" != o && (window.location.href = o);
                            break;
                        case 27:
                            $(".black-click").click();
                    }
                }
            }),
            Object.keys(readingObject).length))
) {
    var readingSeries =
        JSON.parse(localStorage.getItem("reading_series")) || [];
    for (i = 0; i < readingSeries.length; i++)
        if (readingSeries[i].series_id == series_id) {
            readingSeries.splice(i, 1);
            break;
        }
    readingSeries.unshift(readingObject),
        readingSeries.length > 100 && readingSeries.pop(),
        localStorage.setItem("reading_series", JSON.stringify(readingSeries));
}
function seeMoreButton(e) {
    (e.find("img[alt]").length || e[0].scrollHeight >= 90) &&
        e.next(".comment_see_more").removeClass("none");
}
function seeMoreButtons() {
    $(".ln-comment-content").each(function () {
        seeMoreButton($(this));
    });
}
function clickSeeMore(e) {
    e.prev().css("max-height", "initial"), e.remove();
}
function br2nl(e) {
    return e.replace(/\r|\n|\r\n/g, "").replace(/<br(\s?\/?)?>/g, "\n");
}
function nl2br(e) {
    return e.replace(/\n/g, "<br>");
}
function strip_tags(e) {
    return e.replace(/<[^>]+>/gi, "");
}
function getEditor(e) {
    return tinymce.activeEditor;
}
let currentPage = 1; // Trang hiện tại
let lastPage = 1; // Tổng số trang

function loadComments(chapterId, page = 1) {
    // Lấy user-id từ thẻ meta
    const userId = document.querySelector('meta[name="user-id"]').getAttribute('content');

    // Gửi yêu cầu GET bằng Fetch API
    fetch(`/comments-chapter/${chapterId}?page=${page}`)
        .then((response) => {
            if (!response.ok) {
                throw new Error("Network response was not ok");
            }
            return response.json();
        })
        .then((data) => {
            const commentsContainer = document.getElementById("comments-container");
            commentsContainer.innerHTML = ""; // Xóa nội dung hiện tại

            // Kiểm tra xem data.data có phải là mảng hay không
            if (Array.isArray(data.data.data)) {
                // Lặp qua các bình luận nếu data.data là mảng
                data.data.data.forEach((comment) => {
                    let deleteButton = '';
                    let commentClass = '';

                    // Kiểm tra nếu comment đã bị xóa
                    if (comment.is_delete) {
                        // Thay đổi nội dung bình luận nếu bị xóa
                        commentClass = 'deleted disabled';
                        comment.content =
                            `Bình luận đã bị xóa bởi ${comment.deleted_by.username}`;
                        deleteButton = ''; // Ẩn nút xoá nếu bình luận đã bị xóa
                    } else {
                        // Nếu comment không bị xóa, cho phép thêm nút xoá
                        if (comment.user.id == userId) {
                            deleteButton = `
                            <a class="self-center visible-toolkit-item span-delete cursor-pointer" data-id-delete='${comment.id}'>
                                <i class="fas fa-times"></i>
                                <span class="font-semibold">Xoá</span>
                            </a>`;
                        }
                    }

                    // Tạo HTML cho comment chính
                    const commentHtml = `
                        <div class="ln-comment-group">
                            <div id="ln-comment-${comment.id}" class="ln-comment-item mt-3 clear ${commentClass}" data-comment="${comment.id}">
                                <div class="flex gap-1 max-w-full">
                                    <div class="w-[50px]">
                                        <div class="mx-1 my-1">
                                        <img src="/storage/${comment.user.avatar_url ?? '/img/noava.png'}" class="w-full rounded-full" />
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
                            <div id="ln-comment-replies-${comment.id}" class="ln-comment-replies"></div>
                        </div>`;

                    commentsContainer.innerHTML += commentHtml;

                    // Chèn các reply của comment cha
                    if (comment.replies && comment.replies.length > 0) {
                        const repliesContainer = document.getElementById(`ln-comment-replies-${comment.id}`);
                        comment.replies.forEach(reply => {
                            let deleteButtonRL = '';
                            let replyClass = reply.is_delete ? 'deleted disabled' : '';

                            if (reply.user.id == userId) {
                                deleteButtonRL = `
                                <a class="self-center visible-toolkit-item span-delete cursor-pointer"  data-id-delete='${reply.id}'>
                                    <i class="fas fa-times"></i>
                                    <span class="font-semibold">Xoá</span>
                                </a>`;
                            }

                            const replyHtml = `
                                <div class="ln-comment-reply ${replyClass}">
                                    <div id="ln-comment-${reply.id}" class="ln-comment-item mt-3 clear" data-comment="${reply.id}">
                                        <div class="flex gap-1 max-w-full">
                                            <div class="w-[50px]">
                                                <div class="mx-1 my-1">
                                        <img src="/storage/${comment.user.avatar_url ?? '/img/noava.png'}" class="w-full rounded-full" />
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
                                                        ${deleteButtonRL}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>`;
                            repliesContainer.innerHTML += replyHtml;
                        });
                    }
                });
            }

            // Cập nhật số trang hiện tại và số trang cuối
            currentPage = data.data.current_page;
            lastPage = data.data.last_page;
            updatePagination(); // Cập nhật phân trang
        })
        .catch((error) => {
            console.error("Error loading comments:", error);
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


if (
    ($(".ln-comment-body").on("click", "span.span-pin", function () {
        $.post(
            "/action/comment/pin_comment",
            {
                _token: token,
                comment_id: $(this).closest(".ln-comment-item").data("comment"),
            },
            function (e) {
                "success" == e.status
                    ? window.location.replace(e.url)
                    : alert(e.message);
            }
        );
    }),
        $(".ln-comment-body").on("click", "a.do-like", function () {
            var e = $(this);
            $.post(
                "/action/comment/like-unlike",
                {
                    _token: token,
                    comment_id: $(this).closest(".ln-comment-item").data("comment"),
                },
                function (t) {
                    "success" == t.status
                        ? (console.log(e),
                            t.liked
                                ? (e.addClass("liked"),
                                    e.find("span.likecount").text(t.like_count))
                                : (e.removeClass("liked"),
                                    e.find("span.likecount").text(t.like_count)))
                        : alert(t.message);
                }
            );
        }),
        seeMoreButtons(),
        $(".ln-comment-body").on("click", ".comment_see_more", function (e) {
            clickSeeMore($(this));
        }),
        // Sự kiện khi nhấn nút comment
        $("form.comment_form input.button").on("click", function (e) {
            e.preventDefault(); // Ngăn form tự submit
            var form = $(this).closest("form");
            var formData = {
                _token: form.find('input[name="_token"]').val(),
                chapter_id: form.find('input[name="chapter_id"]').val(),
                parent_id: form.find('input[name="parent_id"]').val() || null,
                content: tinymce.activeEditor.getContent(), // Lấy nội dung từ TinyMCE
            };

            $.ajax({
                url: form.attr("action"),
                method: "POST",
                data: formData,
                dataType: "json",
                success: function (response) {
                    if (response.status === "success") {
                        tinymce.activeEditor.setContent(""); // Xóa nội dung editor
                        // Tải lại danh sách bình luận
                        loadComments(formData.chapter_id);
                    } else {
                        alert(response.message);
                    }
                },
                error: function () {
                    alert("Đã xảy ra lỗi. Vui lòng thử lại.");
                },
            });
        }),

        $(".ln-comment-body").on("click", ".do-reply", function () {
            $(".reply-form").remove(); // Xóa bất kỳ form reply nào trước đó

            // Lấy giá trị từ data attributes
            const commentId = $(this).data("comment-id");
            const chapterId = $(this).data("chapter-id");
            const parentId = $(this).data("parent-id");

            // Tạo nội dung mặc định cho form reply
            var replyContent = "";
            if (commentId !== parentId) {
                replyContent = "@" +
                    $("#ln-comment-" + commentId + " a.ln-username").text().trim() +
                    ":&nbsp;";
            }

            // Tạo form reply
            const formHtml = `
            <form class="reply-form ln-comment-reply mt-3" action='/comments/add' method="POST">
                <input type="hidden" name="_token" value="${$('meta[name="csrf-token"]').attr('content')}">
                <input type="hidden" name="chapter_id" value="${chapterId}">
                <input type="hidden" name="parent_id" value="${commentId}">
                <div class="ln-comment-form">
                    <textarea name="content" class="comment_reply">${replyContent}</textarea>
                    <div class="comment_toolkit clear">
                        <input type="submit" class="button submit_reply" value="Trả lời">
                    </div>
                </div>
            </form>
            `;

            // Thêm form reply ngay dưới comment
            $("#ln-comment-" + commentId).after(formHtml);

            // Khởi tạo TinyMCE sau khi form được thêm vào DOM
            tinymce.init({
                selector: "textarea.comment_reply", // Chỉ khởi tạo trên textarea có class comment_reply
                setup: function (editor) {
                    editor.on('change', function () {
                        editor.save();
                    });
                }
            });
        }),
        // Gửi form reply bằng AJAX
        $(document).on('submit', '.reply-form', function (e) {
            e.preventDefault(); // Ngừng việc gửi form mặc định

            // Lấy dữ liệu từ các input và textarea
            const csrfToken = $('meta[name="csrf-token"]').attr('content');
            const chapterId = $(this).find('input[name="chapter_id"]').val();
            const parentId = $(this).find('input[name="parent_id"]').val();

            // Kiểm tra xem TinyMCE đã khởi tạo chưa và lấy nội dung từ TinyMCE
            const content = tinymce.get($(this).find('textarea.comment_reply')[0].id).getContent();

            // Gửi dữ liệu qua AJAX
            $.ajax({
                url: '/comments/add', // Đường dẫn gửi đến
                method: 'POST',
                data: {
                    _token: csrfToken,
                    chapter_id: chapterId,
                    parent_id: parentId,
                    content: content
                },
                success: function (response) {
                    // Xử lý sau khi gửi thành công
                    if (response.status === "success") {
                        $(this).remove(); // Xóa form reply sau khi gửi thành công
                        alert('comment thành công');
                        loadComments(chapterId, 1);

                    } else {
                        alert("Có lỗi xảy ra. Vui lòng thử lại.");
                    }
                },
                error: function () {
                    alert("Có lỗi xảy ra khi gửi bình luận.");
                }
            });
        }),
        $(".ln-comment-body").on("click", ".span-delete", function () {
            var e = $(this);
            commentId = parseInt(e.closest(".ln-comment-item").data("comment"));
            var csrfToken = $('meta[name="csrf-token"]').attr('content');

            if (!confirm("Bạn có muốn xóa bình luận?")) return !1;
            // Cấu hình jQuery để gửi CSRF token trong header của tất cả các yêu cầu Ajax
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                }
            });
            $.ajax({
                url: '/chapter-comment/' + commentId, // commentId là ID của bình luận cần xóa
                type: 'DELETE',
                success: function (response) {
                    if (response.success) {
                        alert(response.message);
                        loadComments(chapterId, 1);
                    } else {
                        alert(response.message);
                    }
                },
                error: function (xhr, status, error) {
                    alert('Có lỗi xảy ra!');
                }
            });
        }),
        "undefined" != typeof series_id &&
        series_id > 0 &&
        (-1 == (Cookies.getJSON("mature_confirm") || []).indexOf(series_id) &&
            $("#mature_modal").css("display", "block"),
            $("button#mature_confirm").on("click", function (e) {
                var t = Cookies.getJSON("mature_confirm") || [];
                -1 == t.indexOf(series_id) &&
                    (t.push(series_id),
                        Cookies.set("mature_confirm", t, {
                            expires: 3,
                        })),
                    $("#mature_modal").css("display", "none");
            })),
        "1" == $('meta[name="logged-in"]').attr("content") &&
        !$("main.reading-page").length)
) {
    var handleNotiData = function (e) {
        e.notification_count > 0
            ? ($("#noti-icon").find(".noti-unread").remove(),
                $("#noti-icon .icon-wrapper").append(
                    '<span class="noti-unread">' +
                    e.notification_count +
                    "</span>"
                ),
                $("#noti-icon #noti-sidebar")
                    .find("#noti-content")
                    .prepend(e.html))
            : $("#noti-icon").find(".noti-unread").remove(),
            e.seriesunread_count > 0
                ? ($("#series-unread-icon").find(".noti-unread").remove(),
                    $("#series-unread-icon .icon-wrapper").append(
                        '<span class="noti-unread">' +
                        e.seriesunread_count +
                        "</span>"
                    ))
                : $("#series-unread-icon").find(".noti-unread").remove(),
            e.pmunread_count > 0
                ? ($(".at-user_avatar").addClass("icon-notify"),
                    $(".at-user_list").addClass("icon-notify"))
                : ($(".at-user_avatar").removeClass("icon-notify"),
                    $(".at-user_list").removeClass("icon-notify")),
            (unreadCount = parseInt(e.total)),
            setDocumentTitle(
                unreadCount > 0
                    ? "(" + unreadCount + ") " + pageTitle
                    : pageTitle
            );
    },
        setDocumentTitle = function (e) {
            document.title = e;
        },
        pageTitle = document.title,
        unreadCount = 0,
        refreshTime = 180;
    $("span.noti-unread").each(function () {
        unreadCount += parseInt($(this).text());
    }),
        unreadCount > 0 &&
        (document.title = "(" + unreadCount + ") " + document.title),
        $("#noti-icon").on("click", (function (e) {
            e.stopPropagation();
            $(this).find(".noti-sidebar");
            var t = $(this).find("span.noti-unread");
            "" != t.text().trim() && $.post("/action/notification/clearunread", {
                _token: token
            }, (function (e) {
                "success" == e.status ? (t.remove(),
                    unreadCount = 0,
                    $("span.noti-unread").each((function () {
                        unreadCount += parseInt($(this).text())
                    }
                    )),
                    document.title = unreadCount > 0 ? "(" + unreadCount + ") " + pageTitle : pageTitle) : alert(e.message)
            }
            ), "json")
        }
        )),
        $(".noti-sidebar").on("click", function (e) {
            e.stopPropagation();
        }),
        $(document).on("click", function () {
            var e = $(".noti-sidebar");
            e.hasClass("block") && e.toggleClass("none block");
        }),
        $("#noti-icon #noti-sidebar").on(
            "mousedown",
            ".noti-item",
            function () {
                var e = $(this);
                e.hasClass("untouch") &&
                    $.post(
                        "/action/notification/touch",
                        {
                            _token: token,
                            notification_id: $(this).data("notification"),
                        },
                        function (t) {
                            "success" == t.status || "touched" == t.status
                                ? e.removeClass("untouch")
                                : alert(t.message);
                        },
                        "json"
                    );
            }
        ),
        (function e() {
            setTimeout(function () {
                var t =
                    $(".noti-item time.timeago").first().attr("title") || "";
                ((new Date().getTime() / 1e3) | 0) -
                    (localStorage.getItem("ln_refresh_time") || 0) <
                    refreshTime
                    ? e()
                    : localStorage.setItem(
                        "ln_refresh_time",
                        (new Date().getTime() / 1e3) | 0
                    );
            }, 1e3 * refreshTime);
        })(),
        $(window).on("storage", function (e) {
            "ln_crosstab" == e.originalEvent.key &&
                handleNotiData(JSON.parse(localStorage.getItem("ln_crosstab")));
        });
}
if (
    ($(".spoiler_toggle").on("click", function (e) {
        e.preventDefault();
        var t,
            n = $(this);
        return (
            (t = n.parent().next()).is(":visible")
                ? (t.hide(), n.text("Click vào để hiển thị nội dung"))
                : (t.show(), n.text("Click vào để ẩn nội dung")),
            !1
        );
    }),
        "undefined" != typeof series_id &&
        series_id > 0 &&
        $("span.star-evaluate-item").on("click", function () {
            if ("1" == $('meta[name="logged-in"]').attr("content")) {
                var e = $(this).data("value");
                $.post(
                    "/action/series/updaterating",
                    {
                        _token: $('meta[name="csrf-token"]').attr("content"),
                        series_id: series_id,
                        value: e,
                    },
                    function (e) {
                        "success" == e.status
                            ? alert("Cảm ơn bạn đã đánh giá truyện")
                            : e.message
                                ? alert(e.message)
                                : alert("Error");
                    },
                    "json"
                );
            } else alert("Bạn phải đăng nhập để đánh giá truyện");
        }),
        $("main.search-page div.search-advance").length)
) {
    var selectGenres = new Set(),
        rejectGenres = new Set();
    $(".search-advance_toggle").on("click", function () {
        $(".search-advance").toggle(), $(this).toggleClass("on");
    }),
        $(".genre_label").on("click", function () {
            var e = $(this);
            e.data("genre-id");
            1 == e.find("i.fa-square").length
                ? e.find("i.far").toggleClass("far fas fa-square fa-check")
                : 1 == e.find("i.fa-check").length
                    ? e.find("i.fas").toggleClass("fa-check fa-times")
                    : e.find("i.fas").toggleClass("far fas fa-times fa-square");
        }),
        $("form").on("submit", function (e) {
            e.preventDefault(),
                $(".gerne-icon i").each(function (e, t) {
                    var n = $(this),
                        o = n.parents("label").data("genre-id");
                    n.hasClass("fa-check")
                        ? selectGenres.add(o)
                        : n.hasClass("fa-times") && rejectGenres.add(o);
                });
            var t =
                "?selectgenres=" +
                _toConsumableArray(selectGenres).join(",") +
                "&rejectgenres=" +
                _toConsumableArray(rejectGenres).join(",");
            (t += "&" + $(this).serialize()),
                (window.location.href = window.location.href.split("?")[0] + t);
        });
}
$(".container").width() <= 768 && $(".gradual-mobile").find("main").hide(),
    $(".gradual-mobile header").on("click", function () {
        var e = $(this).parent();
        e.find(".see_more").click(),
            e.find("main").toggle(),
            $(this)
                .find(".mobile-icon i")
                .toggleClass("fa-chevron-down fa-chevron-up");
    }),
    $("#collect").on("click", function (e) {
        $.post(
            "/action/series/collect",
            {
                _token: token,
                series_id: series_id,
            },
            function (e) {
                var t = $("#collect");
                if ("success" == e.status) {
                    var n = e.collected
                        ? "Bạn đã theo dõi truyện."
                        : "Bạn đã ngừng theo dõi truyện.";
                    t.toggleClass("follow followed"),
                        t.find("i").toggleClass("far fas"),
                        Alpine ? Alpine.store("toast").show(n) : alert(n);
                } else
                    $(".summary-content").css({
                        maxHeight: "150px",
                        overflow: "hidden",
                    }),
                        _this.html(
                            '<i class="fa fa-angle-double-down" aria-hidden="true"></i> Xem thêm'
                        );
            },
            "json"
        );
    }),
    $(".feature-section .summary-content").length &&
    $(".feature-section .summary-content")[0].scrollHeight >= 100 &&
    $(".feature-section .summary-more").removeClass("none"),
    $(".mobile-more").click(function (e) {
        e.preventDefault(),
            $(this).parent().find("li").removeClass("none"),
            $(this).remove();
    }),
    $(".summary-more").click(function (e) {
        e.preventDefault();
        var t = $(this),
            n = $(this).find(".see_more");
        return (
            t.hasClass("more-state")
                ? ($(".feature-section .summary-content").css({
                    maxHeight: "none",
                    overflow: "",
                }),
                    n.html("Ẩn đi"))
                : ($(".feature-section .summary-content").css({
                    maxHeight: "100px",
                    overflow: "hidden",
                }),
                    n.html("Xem thêm")),
            t.toggleClass("more-state less-state"),
            !1
        );
    });
