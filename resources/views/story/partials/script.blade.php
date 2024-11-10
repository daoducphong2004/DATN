<script>
    function turnoffall() {
        $(".rdtoggle").removeClass("on");
        $(".rdtoggle_body").removeClass("animation fade-in-left-big fade-in-down");
        $("html").removeClass("overflow-hiden");
    }

    function rdtoggle(classicon, effect) {
        if ($(classicon).hasClass("on")) {
            turnoffall();
        } else {
            turnoffall();
            $(classicon).addClass("on");
            $("html").addClass("overflow-hiden");
            $(classicon + " .rdtoggle_body").addClass("animation " + effect);
        }
    };

    $("#rd-setting_icon").on('click', function() {
        rdtoggle("#setting", "fade-in-down");
    });

    $("#rd-info_icon").on('click', function() {
        rdtoggle("#chapters", "fade-in-left-big");
    });

    $("#rd-bookmark_icon").on('click', function() {
        rdtoggle("#bookmarks", "fade-in-left-big");
    });

    $(".black-click").on('click', function() {
        turnoffall();
        $("#rd-side_icon").hide();
        $("#bookmark_top").removeClass("on");
    });

    var bgcolor = Cookies.get('color') || (Cookies.get('night_mode') ? 6 : 4);
    var fontfamily = Cookies.get('fontfamily') || '';
    var fontsize = Cookies.get('font') || 18;
    var margin = Cookies.get('margin') || 0;
    var textAlign = Cookies.get('textAlign') || 'text-justify';

    function setcolor(alter = true) {
        var switcher = $(".set-color .set-input span").eq(bgcolor);
        switcher.addClass("current");

        if (alter) {
            for (var i = 0; i < $(".set-color .set-input span").length; i++) {
                $("#mainpart").removeClass('style-' + i);
                $("#mainpart").removeClass('dark');
            }
            $("#mainpart").addClass('style-' + bgcolor);

            // Manually hardcoded to dark
            if (bgcolor >= 6) {
                $("#mainpart").addClass('dark');
            }
        }
    }

    // This creates unsmooth experience so we only use it for select box
    function setfontfamily() {
        $('.set-font-family select option').filter(function() {
            return fontfamily.split(',')[0].indexOf($(this).text()) != -1;
        }).attr('selected', true);
    }

    function setfontstyle(alter = true) {
        $(".set-font input.set-slide_input").val(fontsize + "px");

        if (alter) {
            $("div#chapter-content").css("font-size", fontsize + "px");

            var lineheight = +fontsize + 10;
            $("#chapter-content").css("line-height", lineheight + "px");
        }
    }

    function setmargin() {
        $(".set-margin input.set-slide_input").val(margin + "px");
        $("#chapter-content").css({
            'padding-left': margin + "px",
            'padding-right': margin + "px"
        });
    }

    function setTextAlign(alter = true) {
        var switcher = $(".set-text-align .set-input span[data-align='" + textAlign + "']");
        switcher.addClass("current");

        if (alter) {
            $(".set-text-align .set-input span").each(function() {
                $("#chapter-content").removeClass($(this).attr('data-align'));
            });

            $("#chapter-content").addClass(textAlign);
        }
    }

    setcolor(false);
    setfontfamily();
    setfontstyle(false);
    setmargin();
    setTextAlign(true);

    //1px = 0.0625rem;
    //16px = 1rem (default);

    $(".set-color .set-input span").click(function() {
        bgcolor = $(this).data("id");
        $(".set-color .set-input span").removeClass("current");
        setcolor();
        Cookies.set('color', bgcolor, {
            expires: 365
        });
    });

    $('.set-font-family select').on('change', function() {
        fontfamily = "'" + $('option:selected', this).text() + "', " + '\'Times New Roman\', Georgia, serif';

        $('div#chapter-content').css('font-family', fontfamily);

        Cookies.set('fontfamily', fontfamily, {
            expires: 365
        });
    });

    $(".set-font .set-slide_button.set-smaller").click(function() {
        fontsize = fontsize - 2;
        if (fontsize < 0) fontsize = 0;
        setfontstyle();
        Cookies.set('font', fontsize, {
            expires: 365
        });
    });

    $(".set-font .set-slide_button.set-bigger").click(function() {
        fontsize = +fontsize + 2;
        setfontstyle();
        Cookies.set('font', fontsize, {
            expires: 365
        });
    });

    $(".set-margin .set-slide_button.set-smaller").click(function() {
        margin = margin - 20;
        if (margin < 0) margin = 0;
        setmargin();
        Cookies.set('margin', margin, {
            expires: 365
        });
    });

    $(".set-margin .set-slide_button.set-bigger").click(function() {
        margin = +margin + 20;
        setmargin();
        Cookies.set('margin', margin, {
            expires: 365
        });
    });

    $(".set-text-align .set-input span").click(function() {
        textAlign = $(this).data("align");
        $(".set-text-align .set-input span").removeClass("current");
        setTextAlign();
        Cookies.set('textAlign', textAlign, {
            expires: 365
        });
    });
    $(document).ready(function() {
        // Iterate over each bookmark in the list
        $("#bookmarks_list li").each(function() {
            var linepr = $(this).data("line"); // Get data-line value from the li
            console.log(linepr);

            // Find the corresponding paragraph based on the linepr
            var element = $(".reading-content #" + linepr); // Select the element with the given ID

            if (element.length > 0) {
                var preview = element.text(); // Get the text content of the element
                var shortText = preview.trim().substring(0, 30) +
                "..."; // Trim and shorten text if too long
                $(this).find(".pos_bookmark small").text(
                shortText); // Update the small element with the short text
            } else {
                console.log("Không tìm thấy phần tử với id " + linepr);
            }
        });
    });



    $('div#chapter-content').html(
        $('div#chapter-content').html().replace(
            /\[note(\d+)\]/gi,
            '<span id="anchor-note$1" class="note-icon none-print inline note-tooltip" data-tooltip-content="#note$1 .note-content" data-note-id="note$1"><i class="fas fa-sticky-note"></i></span><a id="anchor-note$1" class="inline-print none" href="#note$1">[note]</a>'
        )
    )

    tippy('.note-tooltip', {
        delay: 50,
        maxWidth: 240,
        interactive: true,
        content(ref) {
            const selector = ref.getAttribute('data-tooltip-content');
            const template = document.querySelector(selector);
            return template ? template.innerHTML : 'Đặt sai ID của note';
        }
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var toast = document.getElementById('toast-message');

        if (toast) {
            // Thêm class 'show' để hiển thị toast
            toast.classList.add('show');

            // Tự động ẩn sau 3 giây (3000 milliseconds)
            setTimeout(function() {
                toast.classList.remove('show');
            }, 3000); // 3000 ms = 3s
        }
    });

    function confirmPurchase(title, price, url) {
        // Hiển thị modal
        var modal = document.getElementById("purchaseModal");
        modal.style.display = "block";

        // Thay đổi nội dung modal
        document.getElementById("modalTitle").innerText = `Xác nhận mua chương: ${title}`;
        document.getElementById("chapterPrice").innerText = price;

        // Thay đổi href của nút xác nhận để chuyển đến URL mua chương
        document.getElementById("confirmPurchaseButton").href = url;
    }

    function closeModal() {
        var modal = document.getElementById("purchaseModal");
        modal.style.display = "none";
    }

    // Đóng modal khi nhấn ra ngoài khung
    window.onclick = function(event) {
        var modal = document.getElementById("purchaseModal");
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

    function addToCart(chapterId, chapterTitle, chapterPrice) {

        // Kiểm tra xem người dùng đã đăng nhập chưa
        if (!document.querySelector('meta[name="user-id"]')) {
            window.location.href = '/login';
            return;
        }
        // Gửi yêu cầu AJAX để thêm chương vào giỏ hàng
        fetch('/cart/add', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({
                    chapter_id: chapterId
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'success') {
                    showNotification(
                        `Chương "${chapterTitle}" với giá ${chapterPrice} coin đã được thêm vào giỏ hàng.`,
                        'success');
                } else {
                    showNotification(data.message, 'danger');
                }
            })
            .catch(error => console.error('Error:', error));
    }

    function showNotification(message, type) {
        const notification = document.getElementById('notification');
        const notificationMessage = document.getElementById('notificationMessage');

        notification.className = 'alert alert-' + type; // Thay đổi lớp CSS dựa trên loại thông báo
        notificationMessage.innerText = message; // Đặt thông báo
        notification.style.display = 'block'; // Hiển thị thông báo

        // Tự động đóng thông báo sau 5 giây
        setTimeout(closeNotification, 5000);
    }

    function closeNotification() {
        const notification = document.getElementById('notification');
        notification.style.display = 'none';
    }

    $(document).ready(function() {
        $('.purchase-chapter').on('click', function() {
            var title = $(this).data('title');
            var price = $(this).data('price');
            var url = $(this).data('url');

            // Xác nhận mua chương
            if (confirm('Bạn có chắc chắn muốn mua chương "' + title + '" với giá ' + price +
                    ' coin?')) {
                $.ajax({
                    url: url,
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}' // Thêm CSRF token
                    },
                    success: function(response) {
                        alert(response.message); // Hiển thị thông báo thành công
                        location.reload(); // Tải lại trang
                        // Cập nhật giao diện nếu cần thiết (vd: số dư coin, danh sách đã mua, ...)
                    },
                    error: function(xhr) {
                        var errorMessage = xhr.responseJSON ? xhr.responseJSON.message :
                            'Đã xảy ra lỗi, vui lòng thử lại.';
                        alert(errorMessage); // Hiển thị thông báo lỗi
                    }
                });
            }
        });
    });
</script>


<script src="{{ asset('scripts/app.js') }}"></script>
