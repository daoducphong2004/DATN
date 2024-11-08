<!-- Trường chọn User (Tác giả) -->
<div class="form-group">
    <label for="user_id">Tác giả</label>
    <select name="user_id" id="user_id" class="form-control @error('user_id') is-invalid @enderror" required>
        <option value="">Chọn tác giả</option>
        @foreach($users as $user)
            <option value="{{ $user->id }}" {{ old('user_id', $contract->user_id ?? '') == $user->id ? 'selected' : '' }}>
                {{ $user->username }}
            </option>
        @endforeach
    </select>
    @error('user_id')
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

<!-- Tải ảnh hợp đồng -->
<div class="form-group">
    <label for="contract_image">Ảnh Hợp Đồng</label>
    <input type="file" class="form-control @error('contract_image') is-invalid @enderror" name="contract_image" id="contract_image" accept="image/*">
    @if(isset($contract) && $contract->contract_image)
        <img src="{{ asset(Storage::url($contract->contract_image)) }}" alt="Contract Image" class="img-thumbnail mt-2" style="max-width: 200px;">
    @endif
    @error('contract_image')
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
    <label for="status">Trạng thái hợp đồng</label>
    <select name="status" id="status" class="form-control @error('status') is-invalid @enderror" required>
        <option value="active" {{ old('status', $contract->status ?? '') == 'active' ? 'selected' : '' }}>Active</option>
        <option value="expired" {{ old('status', $contract->status ?? '') == 'expired' ? 'selected' : '' }}>Expired</option>
        <option value="terminated" {{ old('status', $contract->status ?? '') == 'terminated' ? 'selected' : '' }}>Terminated</option>
        <option value="pending" {{ old('status', $contract->status ?? '') == 'pending' ? 'selected' : '' }}>Pending</option>
    </select>
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
