<?php

namespace App\Http\Requests\Categories;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequest extends FormRequest
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
        $category = $this->route()->parameter('category');

        return [
            'categories' => 'required|min:3|max:20|unique:categories,categories,'.$category->id,
            'slug' => 'required|min:3|unique:categories,slug,'.$category->id ,
        ];
    }
}
