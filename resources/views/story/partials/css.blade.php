<style>
    /* Modal Background */
    .modal {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 1;
        /* Sit on top */
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        height: 100%;
        /* Full height */
        background-color: rgba(0, 0, 0, 0.4);
        /* Black background with opacity */
        padding-top: 60px;
        /* Adjust top margin */
    }

    /* Modal Content */
    .modal-content {
        background-color: #fefefe;
        margin: 5% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
        max-width: 500px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    /* Close Button (X) */
    .close {
        color: #aaa;
        font-size: 28px;
        font-weight: bold;
        position: absolute;
        right: 20px;
        top: 10px;
        cursor: pointer;
    }

    /* Close Button on Hover */
    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }

    /* Modal Title */
    #modalTitle {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 15px;
    }

    /* Modal Price */
    #chapterPrice {
        font-size: 18px;
        color: #ff6347;
        /* Tomato color for emphasis */
        font-weight: bold;
    }

    /* Button Styling */
    .btn-success {
        background-color: #28a745;
        /* Green */
        color: white;
        padding: 12px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        width: 100%;
    }

    .btn-success:hover {
        background-color: #218838;
        /* Darker green on hover */
    }

    /* Responsive Design for Small Screens */
    @media screen and (max-width: 600px) {
        .modal-content {
            width: 90%;
            /* Make the modal a bit wider on small screens */
            padding: 15px;
        }

        #modalTitle {
            font-size: 20px;
        }

        .btn-success {
            font-size: 14px;
        }
    }

    .toast-message {
        position: fixed;
        top: 50%;
        left: 39%;
        z-index: 9999;
        padding: 10px 20px;
        background-color: #f44336;
        /* Màu đỏ cho thông báo lỗi */
        color: white;
        border-radius: 5px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        opacity: 0;
        transition: opacity 0.5s ease-in-out;
    }

    #mainpart,
    h1,
    h2,
    h3,
    h4,
    h5,
    p,
    span,
    li,
    div,
    label {
        transition: color 0.3s ease, background-color 1s ease;
    }

    .toast-message.success {
        background-color: #4CAF50;
        /* Màu xanh cho thông báo thành công */
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
        transition: color 0.2s;
        /* Hiệu ứng chuyển màu */
    }

    /* Hover effect */
    .rating-label:hover,
    .rating-label:hover~.rating-label {
        color: #f39c12;
    }

    .rating-input:checked+.rating-label,
    .rating-input:checked+.rating-label~.rating-label {
        color: #f39c12;
    }

    .pos_bookmark small {
        white-space: nowrap;
        /* Giới hạn hiển thị chỉ trong một dòng */
        overflow: hidden;
        /* Ẩn phần văn bản tràn ra ngoài */
        text-overflow: ellipsis;
        /* Thêm dấu ba chấm vào phần bị cắt */
        display: block;
    }

    /* Base styles for popup */
    .popup-window,
    .popup {
        display: block;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 1000;
    }

    #music-settings {
        width: 50%;
        height: fit-content;
    }

    .popup-header {
        display: flex;
        justify-content: space-between;
        padding: 10px;
        background-color: #333;
        color: white;
    }

    .popup-title {
        font-size: 18px;
    }

    .popup-close {
        background: none;
        border: none;
        color: white;
        font-size: 20px;
        cursor: pointer;
    }

    /* Section styles */
    .re_set-in {
        padding: 20px;
        background-color: #fff;
        margin: 20px;
        border-radius: 8px;
        overflow-y: auto;
    }

    #setting {
        left: 40%;
    }

    /* Media query for responsiveness */
    @media screen and (max-width: 768px) {
        #setting {
            left: -6%;
        }

        .popup-window,
        .popup {
            padding: 10px;
        }

        .popup-header {
            flex-direction: column;
            align-items: flex-start;
            text-align: left;
        }

        .popup-title {
            font-size: 16px;
            margin-bottom: 10px;
        }

        .set-list {
            margin-bottom: 15px;
        }

        .set-input {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            width: 100%;
        }

        .set-input input,
        .set-input button {
            width: 100%;
            margin-bottom: 10px;
        }

        .set-list label {
            font-size: 14px;
            margin-bottom: 5px;
        }

        .black-click {
            display: block;
        }
    }

    /* Small screen adjustments for popups */
    @media screen and (max-width: 480px) {
        .popup-header {
            padding: 5px;
        }

        .popup-window,
        .popup {
            padding: 0px;
        }

        #music-settings {
            width: 100%;
            margin: 0;

        }

        .popup-close {
            font-size: 18px;
        }

        .set-input input,
        .set-input button {
            padding: 8px;
        }

        .set-list {
            margin-bottom: 10px;
        }

        .set-input button {
            padding: 10px;
        }
    }

    .highlight {
        background-color: yellow;
        /* Màu nền nổi bật */
        transition: background-color 0.5s ease;
    }

    .popup {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: #fff;
        padding: 20px;
        border: 1px solid #ccc;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        z-index: 1000;
    }

    .hidden {
        display: none;
    }

    #speech-settings {
        width: 80%;
        height: fit-content;
    }

    #speech-settings h3 {
        margin-top: 0;
    }

    label {
        display: block;
        margin: 10px 0 5px;
    }

    input {
        width: 100%;
    }

    select {
        width: 100%;
    }

    button {
        margin-top: 10px;
        padding: 5px 10px;
        background-color: #007bff;
        color: #fff;
        border: none;
        cursor: pointer;
    }

    button:hover {
        background-color: #0056b3;
    }

    /* Popup styles */
    .popup-window {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 400px;
        background: white;
        border: 1px solid #ccc;
        border-radius: 8px;
        z-index: 1000;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .popup-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px;
        border-bottom: 1px solid #ddd;
    }

    .popup-title {
        font-size: 18px;
        font-weight: bold;
    }

    .popup-close {
        background: none;
        border: none;
        font-size: 20px;
        cursor: pointer;
    }

    .popup-close:hover {
        color: red;
    }

    .black-click {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        z-index: 999;
        display: none;
    }

    .popup-window.active,
    .black-click.active {
        display: block;
    }


    
</style>
