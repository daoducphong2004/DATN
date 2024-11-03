<!-- resources/views/contracts/index.blade.php -->
@extends('user.layout.master')

@section('content')
    <div class="container">
        <h1>Danh sách Hợp đồng</h1>
        <a href="{{ route('contracts.create') }}" class="btn btn-primary mb-3">Tạo Hợp đồng Mới</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Mã hợp đồng</th>
                    <th>Tác giả</th>
                    <th>Ngày bắt đầu</th>
                    <th>Ngày kết thúc</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contracts as $contract)
                    <tr>
                        <td>{{ $contract->id }}</td>
                        <td>{{ $contract->contract_number }}</td>
                        <td>{{ $contract->author_name }}</td>
                        <td>{{ $contract->start_date }}</td>
                        <td>{{ $contract->end_date }}</td>
                        <td>
                            <a href="{{ route('contracts.show', $contract) }}" class="btn btn-info btn-sm">Xem</a>
                            <a href="{{ route('contracts.edit', $contract) }}" class="btn btn-warning btn-sm">Sửa</a>
                            <form action="{{ route('contracts.destroy', $contract) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Xóa</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
