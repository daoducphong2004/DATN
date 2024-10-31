<!-- resources/views/contracts/form.blade.php -->
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

<!-- Trường chọn Book (Sách) -->
<div class="form-group">
    <label for="book_id">Sách</label>
    <select name="book_id" id="book_id" class="form-control @error('book_id') is-invalid @enderror" required>
        <option value="">Chọn sách</option>
        @foreach($books as $book)
            <option value="{{ $book->id }}" {{ old('book_id', $contract->book_id ?? '') == $book->id ? 'selected' : '' }}>
                {{ $book->title }}
            </option>
        @endforeach
    </select>
    @error('book_id')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>


<div class="form-group">
    <label for="contract_number">Mã hợp đồng</label>
    <input type="text" name="contract_number" id="contract_number" class="form-control @error('contract_number') is-invalid @enderror" value="{{ old('contract_number', $contract->contract_number ?? '') }}" required>
    @error('contract_number')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="author_name">Tên tác giả</label>
    <input type="text" name="author_name" id="author_name" class="form-control @error('author_name') is-invalid @enderror" value="{{ old('author_name', $contract->author_name ?? '') }}" required>
    @error('author_name')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="author_address">Địa chỉ tác giả</label>
    <input type="text" name="author_address" id="author_address" class="form-control @error('author_address') is-invalid @enderror" value="{{ old('author_address', $contract->author_address ?? '') }}" required>
    @error('author_address')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="author_phone">Số điện thoại tác giả</label>
    <input type="text" name="author_phone" id="author_phone" class="form-control @error('author_phone') is-invalid @enderror" value="{{ old('author_phone', $contract->author_phone ?? '') }}" required>
    @error('author_phone')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="author_email">Email tác giả</label>
    <input type="email" name="author_email" id="author_email" class="form-control @error('author_email') is-invalid @enderror" value="{{ old('author_email', $contract->author_email ?? '') }}" required>
    @error('author_email')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="start_date">Ngày bắt đầu</label>
    <input type="date" name="start_date" id="start_date" class="form-control @error('start_date') is-invalid @enderror" value="{{ old('start_date', $contract->start_date ?? '') }}" required>
    @error('start_date')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="end_date">Ngày kết thúc</label>
    <input type="date" name="end_date" id="end_date" class="form-control @error('end_date') is-invalid @enderror" value="{{ old('end_date', $contract->end_date ?? '') }}">
    @error('end_date')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="payment_amount">Số tiền thanh toán</label>
    <input type="number" name="payment_amount" id="payment_amount" class="form-control @error('payment_amount') is-invalid @enderror" value="{{ old('payment_amount', $contract->payment_amount ?? '') }}" required>
    @error('payment_amount')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="payment_method">Phương thức thanh toán</label>
    <input type="text" name="payment_method" id="payment_method" class="form-control @error('payment_method') is-invalid @enderror" value="{{ old('payment_method', $contract->payment_method ?? '') }}" required>
    @error('payment_method')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="content">Nội dung hợp đồng</label>
    <textarea name="content" id="content" class="form-control @error('content') is-invalid @enderror" required>{{ old('content', $contract->content ?? '') }}</textarea>
    @error('content')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="payment_due_date">Ngày hạn thanh toán</label>
    <input type="date" name="payment_due_date" id="payment_due_date" class="form-control @error('payment_due_date') is-invalid @enderror" value="{{ old('payment_due_date', $contract->payment_due_date ?? '') }}">
    @error('payment_due_date')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
