<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PropertyRequest extends FormRequest
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
            'title' => 'required',
            'description' => '',
            'price' => 'required',
            'location' => 'required',
            'area' => 'required',
            'rooms' => '',
            'bathrooms' => '',
            'category_id' => 'required',
            'user_id' => 'required',
            'media.*' => '',
            //'media.*' => 'mimes:jpg,png,jpeg',
            'type' => 'required',
            'is_featured' => 'required',
        ];
    }
}
