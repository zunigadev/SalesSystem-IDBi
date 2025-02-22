<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
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
            'SKU'          => 'required|string|max:20|unique:products,SKU',
            'productName'  => 'required|string|max:100',
            'unitPrice'    => 'required|numeric|min:0|max:999999.99',
            'stock'        => 'required|integer|min:0',
        ];
    }
}
