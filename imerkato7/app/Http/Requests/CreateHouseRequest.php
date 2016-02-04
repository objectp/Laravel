<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateHouseRequest extends Request
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
            'category' => 'required|min:3',
            'type' => 'required',
            'title' => 'required',
            'price' => 'required',
            /*'currency_type' => 'required',*/
            'currency_type' => 'required',
            'detail' => 'required',
            /*'contact_imerkato' => 'required',
            'contact_phone' => 'required'*/
        ];
    }
}
