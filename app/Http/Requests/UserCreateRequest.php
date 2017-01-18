<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserCreateRequest extends Request
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
            'name' => 'required|alpha',
            'document_number' => 'required|numeric',
            'email' => 'required|email|unique:users,email',
            'telephone' => 'required|numeric',
            'city' => 'required|alpha',
            'costume_purchase' => 'required',
            'date_purchase' => 'required|date',
            'invoice_number' => 'required|numeric',
            'radio-group' => 'required'
        ];
    }
}
