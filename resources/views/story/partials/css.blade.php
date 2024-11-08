<style>
    .toast-message {
    position: fixed;
    top: 50%;
    left: 39%;
    z-index: 9999;
    padding: 10px 20px;
    background-color: #f44336; /* Màu đỏ cho thông báo lỗi */
    color: white;
    border-radius: 5px;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    opacity: 0;
    transition: opacity 0.5s ease-in-out;
}

.toast-message.success {
    background-color: #4CAF50; /* Màu xanh cho thông báo thành công */
}

.toast-message.show {
    opacity: 1;
}
.purchase-modal {
    display: none;
    position: fixed;
    z-index: 1000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
}

.purchase-modal-content {
    background-color: white;
    padding: 20px;
    margin: 15% auto;
    border-radius: 8px;
    width: 300px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

</style>
<style>
    .purchase-modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.4);
    }

    .purchase-modal-content {
        background-color: #fefefe;
        margin: 15% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
        max-width: 500px;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
    }

    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }

    .btn {
        display: inline-block;
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
        text-align: center;
        text-decoration: none;
        outline: none;
        color: #fff;
        background-color: #4CAF50;
        border: none;
        border-radius: 5px;
        box-shadow: 0 4px #999;
    }

    .btn-primary {
        background-color: #007bff;
    }

    .btn-secondary {
        background-color: #6c757d;
    }

    .btn:hover {
        background-color: #3e8e41;
    }

    .btn:active {
        background-color: #3e8e41;
        box-shadow: 0 2px #666;
        transform: translateY(2px);
    }
</style>

<style>
    ..rating {
    direction: rtl;
}

.rating-input {
    display: none;
}

.rating-label {
    font-size: 24px;
    color: #ccc;
    cursor: pointer;
    transition: color 0.2s; /* Hiệu ứng chuyển màu */
}

/* Hover effect */
.rating-label:hover,
.rating-label:hover ~ .rating-label {
    color: #f39c12;
}

.rating-input:checked + .rating-label,
.rating-input:checked + .rating-label ~ .rating-label {
    color: #f39c12;
}
.pos_bookmark small {
    white-space: nowrap;          /* Giới hạn hiển thị chỉ trong một dòng */
    overflow: hidden;             /* Ẩn phần văn bản tràn ra ngoài */
    text-overflow: ellipsis;      /* Thêm dấu ba chấm vào phần bị cắt */
    display: block;
}
</style>
