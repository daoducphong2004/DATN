<!-- resources/views/contracts/form.blade.php -->

<!-- Trường chọn User (Tác giả) -->
<div class="form-group">
    <label for="user_id">Tác giả</label>
    <input value="{{ Auth::id() }}" type="hidden" name="user_id" id="user_id" class="form-control @error('user_id') is-invalid @enderror"  required>
    <input value="{{ $user->username }}" type="text" name="" id="user_id" class="form-control @error('user_id') is-invalid @enderror"  disabled>

    @error('user_id')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<!-- Phần trăm chia sẻ doanh thu -->
<div class="form-group">
    <label for="revenue_share">Phần trăm chia sẻ doanh thu (%)</label>
    <input type="number" name="revenue_share" id="revenue_share" class="form-control @error('revenue_share') is-invalid @enderror" value="{{ old('revenue_share', $contract->revenue_share ?? '') }}" required>
    @error('revenue_share')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<script>
    // Hàm tạo mã hợp đồng ngẫu nhiên
    function generateRandomContractCode() {
        const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'; // Các ký tự có thể sử dụng
        let contractCode = '';
        const codeLength = 10; // Độ dài của mã hợp đồng

        for (let i = 0; i < codeLength; i++) {
            const randomIndex = Math.floor(Math.random() * characters.length);
            contractCode += characters[randomIndex];
        }

        return contractCode;
    }

    // Gán mã hợp đồng vào input ẩn
    document.addEventListener('DOMContentLoaded', function() {
        const contractCodeInput = document.querySelector('input[name="contract_code"]');
        if (!contractCodeInput.value) {
            contractCodeInput.value = generateRandomContractCode();
        }
    });
</script>
<input type="hidden" name="contract_code" value="{{ $contract->contract_code ?? '' }}">


<!-- Ngày bắt đầu -->
<div class="form-group">
    <label for="start_date">Ngày bắt đầu</label>
    <input type="date" name="start_date" id="start_date" class="form-control @error('start_date') is-invalid @enderror" value="{{ old('start_date', $contract->start_date ?? '') }}" required>
    @error('start_date')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<!-- Ngày kết thúc -->
<div class="form-group">
    <label for="end_date">Ngày kết thúc</label>
    <input type="date" name="end_date" id="end_date" class="form-control @error('end_date') is-invalid @enderror" value="{{ old('end_date', $contract->end_date ?? '') }}">
    @error('end_date')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<!-- Trạng thái hợp đồng -->
<div class="form-group">
    <input type="hidden" name="status" value="pending">
    @error('status')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
{{-- @include('layouts.TinyMCEscript') --}}
<!-- Textarea để sửa điều khoản -->
<div class="form-group">
    <label for="terms">Điều Khoản Hợp Đồng</label>
    <textarea name="terms" id="terms" class="form-control @error('terms') is-invalid @enderror" rows="10" required>{{ old('terms', $contract->terms ?? '') }}</textarea>
    @error('terms')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

{{-- @include('admin.contracts.dieukhoan') --}}
