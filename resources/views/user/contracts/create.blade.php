<!-- resources/views/contracts/create.blade.php -->
@extends('user.layout.master')

@section('content')
    <div class="container">
        <h1>Tạo Hợp đồng Mới</h1>
        @if ($errors->has('errors'))
    <div class="alert alert-danger">
        {{ $errors->first('errors') }}
    </div>
@endif
        <a href="/Hợp đồng dịch vụ và chia sẻ doanh thu.docx" download>
            <button style="padding: 10px 20px; font-size: 16px; background-color: #4CAF50; color: white; border: none; cursor: pointer;">
                Tải Hợp Đồng Mẫu
            </button>
        </a>
        <a href="{{ route('contracts.dieu-khoan') }}">
            <button style="padding: 10px 20px; font-size: 16px; background-color: #4CAF50; color: white; border: none; cursor: pointer;">
               Xem hợp đồng
            </button>
        </a>
        
        <form action="{{ route('contracts.store') }}" method="POST">
            @csrf
            <input type="hidden" name="user_id" value="{{ Auth::id() }}">
            @include('user.contracts.form')
            <button type="submit" class="btn btn-success">Lưu</button>
            <a href="{{ route('contracts.index') }}" class="btn btn-secondary">Quay lại</a>
        </form>
    </div>
<script>
   document.addEventListener("DOMContentLoaded", function() {
    const startDateInput = document.getElementById('start_date');
    const endDateInput = document.getElementById('end_date');

    // Lấy ngày hôm nay dưới định dạng yyyy-mm-dd
    const today = new Date();
    const todayString = today.toISOString().split('T')[0]; // "yyyy-mm-dd"

    // Đặt giá trị min cho ngày bắt đầu
    startDateInput.setAttribute('min', todayString);

    // Đặt giá trị min cho ngày kết thúc phải là ngày bắt đầu hoặc sau đó
    startDateInput.addEventListener('change', function() {
        const startDate = startDateInput.value;
        endDateInput.setAttribute('min', startDate); // Ngày kết thúc phải >= ngày bắt đầu

        // Kiểm tra lại nếu ngày kết thúc không hợp lệ
        if (endDateInput.value && endDateInput.value < startDate) {
            alert("Ngày kết thúc không thể trước ngày bắt đầu!");
            endDateInput.setCustomValidity("Ngày kết thúc không thể trước ngày bắt đầu.");
        } else {
            endDateInput.setCustomValidity(""); // Xóa lỗi nếu hợp lệ
        }
    });

    // Kiểm tra khi ngày kết thúc thay đổi
    endDateInput.addEventListener('change', function() {
        const startDate = startDateInput.value;
        if (endDateInput.value && endDateInput.value < startDate) {
            alert("Ngày kết thúc không thể trước ngày bắt đầu!");
            endDateInput.setCustomValidity("Ngày kết thúc không thể trước ngày bắt đầu.");
        } else {
            endDateInput.setCustomValidity(""); // Xóa lỗi nếu hợp lệ
        }
    });
});


</script>
@endsection
