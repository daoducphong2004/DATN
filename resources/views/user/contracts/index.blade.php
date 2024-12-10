@extends('user.layout.master')

@section('content')
    <div class="container">
        <h1>Danh sách Hợp đồng</h1>
        <a href="{{ route('contracts.create') }}" class="btn btn-primary mb-3">Tạo Hợp đồng Mới</a>
        <a href="{{ asset('public/hopdong.docx') }}" class="btn btn-primary mb-3" download>Tải xuống hợp đồng mẫu</a>
        <a href="{{ route('contract.qa') }}"class="btn btn-primary mb-3">Các bước để hoàn thiện hợp đồng!</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Mã hợp đồng</th>
                    <th>Tác giả</th>
                    <th>Ngày bắt đầu</th>
                    <th>Ngày kết thúc</th>
                    <th>Trạng Thái</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contracts as $contract)
                    <tr>
                        <td class="contract-id">{{ $contract->id }}</td>
                        <td class="contract-code">{{ $contract->contract_code }}</td>
                        <td class="contract-author">{{ $contract->fullname }}</td>
                        <td class="contract-start">{{ $contract->start_date }}</td>
                        <td class="contract-end">{{ $contract->end_date }}</td>
                        <td class="contract-status">{{ $contract->status }}</td>
                        <td style="display: none;" class="contract-address">{{ $contract->address }}</td>
                        <td style="display: none;" class="contract-tax">{{ $contract->tax }}</td>
                        <td style="display: none;" class="contract-phone">{{ $contract->phone }}</td>
                        <td style="display: none;" class="contract-revenue">{{ $contract->revenue_share }}</td>
                        <td>
                            <a href="{{ route('contracts.show', $contract) }}" class="btn btn-info btn-sm">Xem</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Include PizZip script -->
    {{-- <script src="{{ asset('scripts/plugins/pizzip.min.js') }}"></script> --}}
    <script src="
            https://cdn.jsdelivr.net/npm/pizzip@3.1.7/dist/pizzip.min.js
            "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/docxtemplater/3.29.1/docxtemplater.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.5/FileSaver.min.js"></script>
@endsection
