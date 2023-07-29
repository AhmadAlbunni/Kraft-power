<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductCategoryRequest extends FormRequest
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
            'slug' => 'required|string|min:3|max:20',
            'description' => 'required|nullable|string|min:10',
            'status' => 'required|in:active,inactive',
            'parent_id' => 'nullable|integer|min:1',
            'meta_title' => 'nullable|string',
            'meta_description' => 'nullable|string',
            'image' => 'required|image',
            'image.*' => 'image|mimes:jpg,jpeg,png,webp',
        ];
    }
}
