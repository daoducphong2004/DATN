token = "JW2dwQwjwvBYDwGCSwWAddvymJSsyKtKznjguqAf";

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
}

$("#rd-setting_icon").on("click", function () {
    rdtoggle("#setting", "fade-in-down");
});

$("#rd-info_icon").on("click", function () {
    rdtoggle("#chapters", "fade-in-left-big");
});

$("#rd-bookmark_icon").on("click", function () {
    rdtoggle("#bookmarks", "fade-in-left-big");
});

$(".black-click").on("click", function () {
    turnoffall();
    $("#rd-side_icon").hide();
    $("#bookmark_top").removeClass("on");
});

var bgcolor = Cookies.get("color") || (Cookies.get("night_mode") ? 6 : 4);
var fontfamily = Cookies.get("fontfamily") || "";
var fontsize = Cookies.get("font") || 18;
var margin = Cookies.get("margin") || 0;
var textAlign = Cookies.get("textAlign") || "text-justify";

function setcolor(alter = true) {
    var switcher = $(".set-color .set-input span").eq(bgcolor);
    switcher.addClass("current");

    if (alter) {
        for (var i = 0; i < $(".set-color .set-input span").length; i++) {
            $("#mainpart").removeClass("style-" + i);
            $("#mainpart").removeClass("dark");
        }
        $("#mainpart").addClass("style-" + bgcolor);

        // Manually hardcoded to dark
        if (bgcolor == 6) {
            $("#mainpart").addClass("dark");
        }
    }
}

// This creates unsmooth experience so we only use it for select box
function setfontfamily() {
    $(".set-font-family select option")
        .filter(function () {
            return fontfamily.split(",")[0].indexOf($(this).text()) != -1;
        })
        .attr("selected", true);
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
        "padding-left": margin + "px",
        "padding-right": margin + "px",
    });
}

function setTextAlign(alter = true) {
    var switcher = $(
        ".set-text-align .set-input span[data-align='" + textAlign + "']"
    );
    switcher.addClass("current");

    if (alter) {
        $(".set-text-align .set-input span").each(function () {
            $("#chapter-content").removeClass($(this).attr("data-align"));
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

$(".set-color .set-input span").click(function () {
    bgcolor = $(this).data("id");
    $(".set-color .set-input span").removeClass("current");
    setcolor();
    Cookies.set("color", bgcolor, {
        expires: 365,
    });
});

$(".set-font-family select").on("change", function () {
    fontfamily =
        "'" +
        $("option:selected", this).text() +
        "', " +
        "'Times New Roman', Georgia, serif";

    $("div#chapter-content").css("font-family", fontfamily);

    Cookies.set("fontfamily", fontfamily, {
        expires: 365,
    });
});

$(".set-font .set-slide_button.set-smaller").click(function () {
    fontsize = fontsize - 2;
    if (fontsize < 0) fontsize = 0;
    setfontstyle();
    Cookies.set("font", fontsize, {
        expires: 365,
    });
});

$(".set-font .set-slide_button.set-bigger").click(function () {
    fontsize = +fontsize + 2;
    setfontstyle();
    Cookies.set("font", fontsize, {
        expires: 365,
    });
});

$(".set-margin .set-slide_button.set-smaller").click(function () {
    margin = margin - 20;
    if (margin < 0) margin = 0;
    setmargin();
    Cookies.set("margin", margin, {
        expires: 365,
    });
});

$(".set-margin .set-slide_button.set-bigger").click(function () {
    margin = +margin + 20;
    setmargin();
    Cookies.set("margin", margin, {
        expires: 365,
    });
});

$(".set-text-align .set-input span").click(function () {
    textAlign = $(this).data("align");
    $(".set-text-align .set-input span").removeClass("current");
    setTextAlign();
    Cookies.set("textAlign", textAlign, {
        expires: 365,
    });
});

$("#bookmarks_list li").each(function () {
    var linepr = $(this).data("line");
    var preview = $(".reading-content p#" + linepr).text();

    var shortText = preview.trim().substring(0, 30) + "...";
    $(this).find(".pos_bookmark small").text(shortText);
});

$("div#chapter-content").html(
    $("div#chapter-content")
        .html()
        .replace(
            /\[note(\d+)\]/gi,
            '<span id="anchor-note$1" class="note-icon none-print inline note-tooltip" data-tooltip-content="#note$1 .note-content" data-note-id="note$1"><i class="fas fa-sticky-note"></i></span><a id="anchor-note$1" class="inline-print none" href="#note$1">[note]</a>'
        )
);

tippy(".note-tooltip", {
    delay: 50,
    maxWidth: 240,
    interactive: true,
    content(ref) {
        const selector = ref.getAttribute("data-tooltip-content");
        const template = document.querySelector(selector);
        return template ? template.innerHTML : "Đặt sai ID của note";
    },
});

isLoggedIn = 0;
series_id = parseInt("18741");
chapter_id = parseInt("139028");

readingObject = {
    series_id: series_id,
    series_title:
        "Tôi Bị Cô Gái Yandere Ẩn Mình Trong Ngục Tối Giết Chết Vô Số Lần.",
    series_url: $("i.fa-home").first().parent().attr("href"),
    series_cover: $(".rd_sidebar-header a.img").css("background-image"),
    chapter_title: $("ul.sub-chap_list li.current a").text().trim(),
    chapter_url: $("ul.sub-chap_list li.current a").attr("href"),
    book_title: $("ul#chap_list > li.current a").text(),
    book_url: $("ul#chap_list > li.current a").attr("href"),
    read_time: (+new Date() / 1000) | 0,
};
var quill = new Quill("#editor-container", {
    modules: {
        toolbar: "#toolbar-container",
    },
    theme: "snow",
});

// Store the editor content in the hidden input on form submit
document.querySelector("form").onsubmit = function () {
    var content = document.querySelector("input[name=content]");
    content.value = quill.root.innerHTML;
};

// Undo and redo functionality
document.querySelector(".ql-undo").onclick = function () {
    quill.history.undo();
};

document.querySelector(".ql-redo").onclick = function () {
    quill.history.redo();
};

// Fullscreen functionality
document.querySelector(".ql-fullscreen").onclick = function () {
    document.getElementById("fullscreen-editor").style.display = "block";
    var fullscreenQuill = new Quill("#fullscreen-editor-container", {
        modules: {
            toolbar: "#fullscreen-toolbar-container",
        },
        theme: "snow",
    });
    fullscreenQuill.root.innerHTML = quill.root.innerHTML;
    fullscreenQuill.on("text-change", function () {
        quill.root.innerHTML = fullscreenQuill.root.innerHTML;
    });
};

//
function toggleSubmenu(element) {
    const submenu = element.nextElementSibling;
    const dropdownIcon = element.querySelector(".dropdown-icon");

    submenu.classList.toggle("hidden-block");
    dropdownIcon.classList.toggle("fa-chevron-down");
    dropdownIcon.classList.toggle("fa-chevron-right");
}
//
