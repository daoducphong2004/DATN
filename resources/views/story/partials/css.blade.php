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
