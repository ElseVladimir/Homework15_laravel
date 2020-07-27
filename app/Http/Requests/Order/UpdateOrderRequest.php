<?php

namespace App\Http\Requests\Order;

use Illuminate\Foundation\Http\FormRequest;

class UpdateOrderRequest extends FormRequest
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
        /**
         * $order = $this->route()->parameter('order');
         *
         */
        return [
            'customer_name' => 'required|min:10|max:40',
            'email' => 'required|min:5',
            'phone' => 'required|min:10',
            'feedback' => 'required|min:10'
        ];
    }
}
