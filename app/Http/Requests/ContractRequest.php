<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContractRequest extends FormRequest
{
    public function authorize()
    {
        // You can add authorization logic here if needed, for now returning true to allow all users
        return true;
    }

    public function rules()
    {
        return [
            'user_id' => 'required|exists:users,id',  // Ensure that the user_id exists in the users table
            'revenue_share' => 'required|numeric|min:0|max:100',  // Revenue share percentage should be between 0 and 100
            'start_date' => 'required|date|before_or_equal:end_date',  // Start date should be before or equal to end date
            'end_date' => 'required|date|after_or_equal:start_date',  // End date must be after or equal to start date
            'address' => 'nullable|string|max:255',  // Address should be a string, optional
            'phone' => 'nullable|string|max:15',  // Phone number should be a string, optional, up to 15 characters
            'tax' => 'nullable|string|max:15',  // Tax ID should be a string, optional, up to 15 characters
            'fullname' => 'nullable|string|max:255',  // Full name of the representative should be a string, optional
            'status' => 'required', // Status must be one of the predefined values
            'contract_code' => 'nullable|string|unique:contracts,contract_code|max:255', // Contract code should be unique and optional
            'contract_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Optional contract image (up to 2MB)
        ];
    }
}
