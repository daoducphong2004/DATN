<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            // 'username' => 'required|string|max:255', // Tên người dùng phải là chuỗi và có giới hạn độ dài
            // 'email' => 'required|email|unique:users,email,' . $this->route('id'), // Đảm bảo email hợp lệ và không trùng
            // 'password' => 'nullable|string|min:6', // Mật khẩu là chuỗi và có độ dài tối thiểu là 6 ký tự, cho phép để trống khi không thay đổi
            // 'full_name' => 'required|string|max:255', // Tên đầy đủ phải là chuỗi và có giới hạn độ dài
            // 'date_of_birth' => 'required|date|before:today', // Ngày sinh phải hợp lệ và không được sau ngày hiện tại
            // 'avatar_url' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // Ảnh đại diện là hình ảnh hợp lệ với các định dạng cho phép và có kích thước tối đa là 2MB
            // 'gender' => 'required|in:male,female,other', // Giới tính phải là một trong ba giá trị: male, female, hoặc other
            // 'status' => 'required|in:active,inactive,banned', // Trạng thái phải là một trong ba giá trị: active, inactive hoặc banned
            // 'coin_earned' => 'required|integer|min:0', // Số xu phải là một số nguyên và không được nhỏ hơn 0
        ];
        
    }
}
