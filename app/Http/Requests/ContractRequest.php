<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContractRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'book_id' => 'required|exists:books,id',
            'user_id' => 'required|exists:users,id',
            'contract_number' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after:start_date',
            'author_name' => 'required|string|max:255',
            'author_address' => 'nullable|string',
            'author_phone' => 'nullable|string|max:20',
            'author_email' => 'nullable|string|email|max:255',
            'content' => 'nullable|string',
            'payment_amount' => 'nullable|numeric|min:0|max:9999999999999.99',
            'payment_method' => 'nullable|string|max:255',
            'payment_due_date' => 'nullable|date|after:start_date',
        ];
    }
}
