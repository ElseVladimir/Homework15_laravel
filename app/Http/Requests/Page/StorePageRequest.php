<?php

namespace App\Http\Requests\Page;

use Illuminate\Foundation\Http\FormRequest;

class StorePageRequest extends FormRequest
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
            'title' => 'required|min:3|max:20|unique:pages,title',
            'slug' => 'required|min:3|max:20|unique:pages,slug',
            'intro' => 'required|min:3|max:20',
            'content' => 'required|min:5'
        ];
    }
}
