<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|min:3|max:200',
            'sku' => 'nullable|string|min:3|max:30',
            'description' => 'string|min:3|max:1000',
            'prices' => 'nullable|numeric',
            'category_id' => 'nullable|exists:categories,id',
            'status' => 'in:active,inactive',
            'meta_title' => 'nullable|string',
            'meta_description' => 'nullable|string',
            'image' => 'image',
            'image.*' => 'image|mimes:jpg,jpeg,png',
            'attributes' => 'nullable|string|array',
        ];
    }
}
