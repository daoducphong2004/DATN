<div class="container mt-4 p-4 border rounded shadow-sm bg-light">
    <h4 class="mb-4 text-primary">Chỉnh Sửa Hợp Đồng</h4>

    <!-- Contract ID (Hidden) -->
    <input type="hidden" name="id" value="{{ $contract->id }}">

    <!-- Contract Code -->
    <div class="mb-3">
        <label for="contract_code" class="form-label fw-bold">Mã Hợp Đồng</label>
        <input type="text" class="form-control" id="contract_code" name="contract_code"
            value="{{ $contract->contract_code }}" disabled>
    </div>

    <!-- Full Name -->
    <div class="mb-3">
        <label for="fullname" class="form-label fw-bold">Họ và Tên</label>
        <input type="text" class="form-control" id="fullname" name="fullname" value="{{ $contract->fullname }}"
            disabled>
    </div>

    <!-- Phone -->
    <div class="mb-3">
        <label for="phone" class="form-label fw-bold">Số Điện Thoại</label>
        <input type="text" class="form-control" id="phone" name="phone" value="{{ $contract->phone }}" disabled>
    </div>

    <!-- Address -->
    <div class="mb-3">
        <label for="address" class="form-label fw-bold">Địa Chỉ</label>
        <input type="text" class="form-control" id="address" name="address" value="{{ $contract->address }}"
            disabled>
    </div>

    <div class="row">
        <!-- Upload Contract Image -->
        <div class="col-md-6 mb-3">
            <label for="contract_image" class="form-label fw-bold">Ảnh Hợp Đồng</label>
            <input type="file" class="form-control" id="contract_image" name="contract_image" accept="image/*">
            <small class="text-muted">Chỉ tải ảnh định dạng JPG, PNG, JPEG.</small>
        </div>

        <!-- Contract Status -->
        <div class="col-md-6 mb-3">
            <label for="status" class="form-label fw-bold">Trạng Thái Hợp Đồng</label>
            <select class="form-control" id="status" name="status" style="width: fit-content;" required>
                <option value="rejected" {{ $contract->status == 'rejected' ? 'selected' : '' }}>Từ Chối</option>
                <option value="active" {{ $contract->status == 'active' ? 'selected' : '' }}>Active</option>
            </select>
        </div>
    </div>