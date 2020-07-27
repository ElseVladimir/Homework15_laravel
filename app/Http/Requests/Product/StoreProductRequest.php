<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'categorie_id' => 'required',
            'title' => 'required|min:3|max:20',
            'slug' => 'required|min:3|unique:products,slug',
            'price' => 'required|min:1|max:11',
            'description' => 'required'
        ];
    }
}
