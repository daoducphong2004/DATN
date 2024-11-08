<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCopyrightRequest extends FormRequest
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
            'title' => 'required|string',
            'cover' => 'required|string',
            'author' => 'required|string|',
            'painter' => 'required|string',
            'translater' => 'required|string',
            'nop' => 'nullable|integer',
            'form' => 'required|string|',
            'try_reading' => 'required|string',
            'price' => 'required|integer',
            'summary' => 'required|string',

        ];
    }
}
