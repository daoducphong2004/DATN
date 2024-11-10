<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule; // Thêm import này

class ContractRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        // Lấy ID hợp đồng từ route
        $contractId = $this->route('contracts_manage') ? $this->route('contracts_manage')->id : null;

        return [
            'user_id' => 'required|exists:users,id', // ID người đăng truyện
            'revenue_share' => 'required|numeric|between:0,100', // Phần trăm chia sẻ doanh thu (0-100)
            'start_date' => 'required|date', // Ngày bắt đầu hợp đồng
            'end_date' => 'nullable|date|after:start_date', // Ngày kết thúc hợp đồng (nếu có)
            'status' => 'required|in:active,expired,terminated,pending', // Trạng thái hợp đồng
            'terms' => 'nullable|string', // Điều khoản hợp đồng
            'contract_code' => [
                'required',
                'string',
                Rule::unique('contracts')->ignore($contractId), // Bỏ qua hợp đồng hiện tại
            ],
            'contract_image' => 'nullable|image|mimes:jpg,jpeg,png', // Đảm bảo ảnh hợp lệ
        ];
    }
}
