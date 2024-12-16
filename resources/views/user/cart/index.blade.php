@extends('home.layout.master')
@section('title')
    Giỏ hàng - Cổng Light Novel - Đọc Light Novel
@endsection
@section('content')
    @include('partials.banner')

    <main id="mainpart" class="project-page py-8">
        <div class="container mx-auto mt-5">
    
            @if (session('message'))
                <div
                    class="alert alert-success bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-6">
                    {{ session('message') }}
                </div>
            @endif
    
            @if (session('error'))
                <div
                    class="alert alert-danger bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-6">
                    {{ session('error') }}
                </div>
            @endif
    
            @if ($unpurchasedItems->isEmpty() && $purchasedItems->isEmpty())
                <div
                    class="alert alert-info bg-blue-100 border border-blue-400 text-blue-700 px-4 py-3 rounded relative text-center">
                    Giỏ hàng của bạn hiện tại trống.
                </div>
            @else
                <form method="POST" action="{{ route('order.create') }}" id="checkout-form">
                    @csrf
                    <div class="row">
                        <div class="col-md-8 bg-white shadow-md rounded-lg p-6">
                            @if (!$unpurchasedItems->isEmpty())
                                <h2 class="text-xl font-semibold mb-4">Sản phẩm chưa mua</h2>
                                <table class="table-auto w-full">
                                    <thead class="bg-gray-800 text-white">
                                        <tr>
                                            <th class="px-4 py-2"><input type="checkbox" id="select-all" /></th>
                                            <th class="px-4 py-2">Chương</th>
                                            <th class="px-4 py-2">Giá</th>
                                            <th class="px-4 py-2 text-center">Hành Động</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white">
                                        @foreach ($unpurchasedItems as $item)
                                            <tr class="border-b">
                                                <td class="px-4 py-3 text-center">
                                                    <input type="checkbox" name="selected_items[]" value="{{ $item->id }}" class="item-checkbox">
                                                </td>
                                                <td class="px-4 py-3">{{ $item->chapter->title }}</td>
                                                <td class="px-4 py-3 text-right price">{{ $item->chapter->price }} coins</td>
                                                <td class="px-4 py-3 text-center">
                                                    <button type="button" class="text-red-500 hover:text-red-700 delete-item" data-id="{{ $item->id }}">
                                                        <i class="fas fa-trash-alt"></i> Xóa
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @endif
    
                            @if (!$purchasedItems->isEmpty())
                                <h2 class="text-xl font-semibold mt-8 mb-4">Sản phẩm đã mua</h2>
                                <table class="table-auto w-full">
                                    <thead class="bg-gray-800 text-white">
                                        <tr>
                                            <th class="px-4 py-2">Chương</th>
                                            <th class="px-4 py-2">Giá</th>
                                            <th class="px-4 py-2 text-center">Hành Động</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white">
                                        @foreach ($purchasedItems as $item)
                                            <tr class="border-b">
                                                <td class="px-4 py-3">{{ $item->chapter->title }}</td>
                                                <td class="px-4 py-3 text-right">{{ $item->chapter->price }} coins</td>
                                                <td class="px-4 py-3 text-center">
                                                    <button type="button" class="text-red-500 hover:text-red-700 delete-item" data-id="{{ $item->id }}">
                                                        <i class="fas fa-trash-alt"></i> Xóa
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @endif
                        </div>
                        <div class="col-md-4 bg-white shadow-md rounded-lg p-6">
                            <h3 class="text-lg font-semibold mb-4">Thông tin thanh toán</h3>
                            <p><strong>Số coin hiện tại:</strong> {{ Auth::user()->coin_earned }} coins</p>
                            <p><strong>Tổng tiền các mục đã chọn:</strong> <span id="selected-total">0</span> coins</p>
                            <p><strong>Số dư còn lại:</strong> <span id="remaining-balance">{{ Auth::user()->coin_earned }}</span> coins</p>
                            <button type="submit" class="button bg-success">
                                Thanh Toán
                            </button>
                        </div>
                    </div>
                </form>
            @endif
        </div>
    </main>

    <style>
        .mt-6.text-right {
            margin-top: 1.5rem;
            text-align: right;
        }

        .mt-6.text-right strong {
            font-size: 1.25rem;
            color: #374151;
            /* Darker gray color for better readability */
            display: block;
            /* To ensure each item appears on a new line */
            margin-bottom: 0.5rem;
        }

        .btn-primary {
            background-color: #3b82f6;
            color: #fff;
            font-weight: bold;
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 0.375rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #2563eb;
            /* Slightly darker shade on hover */
        }

        .btn-primary:active {
            background-color: #1d4ed8;
            /* Even darker shade for active state */
        }

        .btn-primary:focus {
            outline: 2px solid #93c5fd;
            /* Light blue outline when focused */
            outline-offset: 2px;
        }
    </style>


    <script>
        document.getElementById('select-all').addEventListener('change', function() {
            const isChecked = this.checked;
            document.querySelectorAll('.item-checkbox').forEach(checkbox => {
                checkbox.checked = isChecked;
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            // Handle the 'Xóa' button click
            document.querySelectorAll('.delete-item').forEach(button => {
                button.addEventListener('click', function() {
                    const id = this.dataset.id;
                    fetch(`/cart/${id}`, {
                            method: 'DELETE',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': document.querySelector(
                                    'meta[name="csrf-token"]').getAttribute('content')
                            }
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.status === 'success') {
                                location.reload();
                                updateCartCount(); // Update cart count after adding item

                            } else {
                                alert(data.message);
                            }
                        })
                        .catch(error => console.error('Error:', error));
                });
            });

            // Handle the 'Thanh Toán' button click
            document.querySelector('button[style*="background-color: #3b82f6"]').addEventListener('click',
                function() {
                    fetch('/order/create', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')
                                    .getAttribute('content')
                            }
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.status === 'success') {
                                alert(data.message);
                                location.reload();
                            } else {
                                alert(data.message);
                            }
                        })
                        .catch(error => console.error('Error:', error));
                });
        });
    </script>
<script>
    const checkboxes = document.querySelectorAll('.item-checkbox');
    const selectAllCheckbox = document.getElementById('select-all');
    const totalSpan = document.getElementById('selected-total');
    const remainingBalanceSpan = document.getElementById('remaining-balance');
    const currentCoins = parseFloat({{ Auth::user()->coin_earned }});

    // Cập nhật tổng tiền và số dư còn lại
    function updateTotal() {
        let total = 0;
        checkboxes.forEach(checkbox => {
            if (checkbox.checked) {
                const price = parseFloat(checkbox.closest('tr').querySelector('.price').textContent);
                total += price;
            }
        });
        totalSpan.textContent = total.toFixed(2);

        // Tính toán số dư còn lại
        const remainingBalance = currentCoins - total;
        remainingBalanceSpan.textContent = remainingBalance.toFixed(2);
    }

    // Xử lý "Chọn tất cả"
    selectAllCheckbox.addEventListener('change', function () {
        const isChecked = this.checked;
        checkboxes.forEach(checkbox => {
            checkbox.checked = isChecked;
        });
        updateTotal();
    });

    // Xử lý chọn từng mục
    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', updateTotal);
    });
</script>

@endsection
