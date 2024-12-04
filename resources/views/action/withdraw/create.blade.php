@extends('user.layout.master')

@section('content')
<style>
    .withdraw-form {
        max-width: 400px;
        margin: auto;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        background-color: #f9f9f9;
    }

    .withdraw-form label {
        display: block;
        margin-bottom: 8px;
        font-weight: bold;
    }

    .withdraw-form input[type="number"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    .withdraw-form button {
        width: 100%;
        padding: 10px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }

    .withdraw-form button:hover {
        background-color: #45a049;
    }
</style>

<div class="withdraw-form">
    <h2>Yêu cầu rút tiền</h2>
    <h3>Số coin hiện có: {{ $wallet->balance }}</h3>
    <a href="{{ route('action.') }}">Quay Lại</a>
    <form action="{{ route('action.withdraw.store') }}" method="POST">
        @csrf
        <label for="amount">Số tiền cần rút:</label>
        <input type="number" name="amount" id="amount" required min="1000" max="{{ $wallet->balance }}" >
        <button type="submit">Gửi yêu cầu</button>
    </form>
</div>
@endsection
