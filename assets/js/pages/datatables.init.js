function initializeTables() {
    // Bỏ phân trang và thông tin cho bảng example
    new DataTable("#example", {
        paging: false,
        info: false // Tắt dòng thông tin
    });

    // Giữ các cài đặt khác cho các bảng liên quan
    new DataTable("#scroll-vertical", {
        scrollY: "210px",
        scrollCollapse: true,
        paging: false,
        info: false
    });
    new DataTable("#scroll-horizontal", {
        scrollX: true,
        paging: false,
        info: false
    });
    new DataTable("#alternative-pagination", {
        pagingType: "full_numbers",
        info: false
    });
    new DataTable("#fixed-header", {
        fixedHeader: true,
        paging: false,
        info: false
    });

    // Responsive modal
    new DataTable("#model-datatables", {
        responsive: {
            details: {
                display: $.fn.dataTable.Responsive.display.modal({
                    header: function (a) {
                        a = a.data();
                        return "Details for " + a[0] + " " + a[1];
                    }
                }),
                renderer: $.fn.dataTable.Responsive.renderer.tableAll({ tableClass: "table" })
            }
        },
        paging: false,
        info: false
    });

    // Bảng với các nút
    new DataTable("#buttons-datatables", {
        dom: "Bfrtip",
        buttons: ["copy", "csv", "excel", "print", "pdf"],
        paging: false,
        info: false
    });

    // Bảng AJAX
    new DataTable("#ajax-datatables", {
        ajax: "assets/json/datatable.json",
        paging: false,
        info: false
    });

    // Bảng thêm dòng
    var a = $("#add-rows").DataTable({
        paging: false,
        info: false
    });
    var e = 1;
    $("#addRow").on("click", function () {
        a.row.add([e + ".1", e + ".2", e + ".3", e + ".4", e + ".5", e + ".6", e + ".7", e + ".8", e + ".9", e + ".10", e + ".11", e + ".12"]).draw(false);
        e++;
    });
    $("#addRow").trigger("click");
}

// Gọi hàm khi DOM sẵn sàng
document.addEventListener("DOMContentLoaded", function () {
    initializeTables();
});
