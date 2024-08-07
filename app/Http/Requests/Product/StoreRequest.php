<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>'required|min:2|string|max:255',
            'description'=>'required|string|min:2|max:2000',
            'price'=>'required|numeric|max:9999999999',
            'category_id'=>'required|integer|exists:categories,id',
            'path'=>'required|image|max:5120',
        ];
    }
}
