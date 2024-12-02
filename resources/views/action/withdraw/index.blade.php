@extends('user.layout.master')
@section('content')

<style>
    .withdraw-table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
        font-size: 18px;
        text-align: left;
    }

    .withdraw-table thead tr {
        background-color: #009879;
        color: #ffffff;
        text-align: left;
    }

    .withdraw-table th,
    .withdraw-table td {
        padding: 12px 15px;
        border: 1px solid #dddddd;
    }

    .withdraw-table tbody tr {
        border-bottom: 1px solid #dddddd;
    }

    .withdraw-table tbody tr:nth-of-type(even) {
        background-color: #f3f3f3;
    }

    .withdraw-table tbody tr:last-of-type {
        border-bottom: 2px solid #009879;
    }

    .withdraw-table tbody tr.active-row {
        font-weight: bold;
        color: #009879;
    }
</style>
<div class="container">
    <a href="{{ route('action.') }}">Quay lại</a>
<table class="withdraw-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Người dùng</th>
            <th>Số tiền</th>
            <th>Trạng thái</th>
            <th>note</th>
            <th>Ngày Duyệt</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($withdraws as $request)
            <tr class="{{ $loop->even ? '' : 'active-row' }}">
                <td>{{ $request->id }}</td>
                <td>{{ $request->user->username }}</td>
                <td>{{ $request->amount }}</td>
                <td>{{ $request->status }}</td>
                <td>{{ $request->note }}</td>
                <td>{{ $request->updated_at }}</td>
            </tr>
        @endforeach
    </tbody>
</table>    
</div>

@endsection
