<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'category_id' => 'required|exists:product_categories,id',
            'name' => 'required|string|min:3|max:200',
            'slug' => 'required|string|min:3|max:200',
            'sku' => 'required|string|min:3|max:200',
            'short_description' => 'required|string|min:3',
            'description' => 'required|string|min:3',
            'prices' => 'nullable|numeric',
            'status' => 'required|in:active,inactive',

            'meta_title' => 'nullable|string',
            'meta_description' => 'nullable|string',

            'image' => '',
            'image.*' => 'image|mimes:jpg,jpeg,png,webp',

            'product_tags'=>'nullable|string',

           //'gallery' => 'nullable|array',
           'gallery.*' => 'image|mimes:jpg,jpeg,png,webp',

            'attributes' => 'array',
            'attributes.*.name' => 'required|string',
            'attributes.*.value' => 'required|string',
        ];
    }
}
