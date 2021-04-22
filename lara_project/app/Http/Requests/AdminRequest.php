<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
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
            'ad_name' => 'required',
            'ad_email' => 'required',
            'ad_password' => 'required',
            'cpassword' => 'required|same:ad_password',
            'city' => 'required',
            'country' => 'required',
            'salary' => 'required'
        ];
    }

    public function messages()
    {
        return [

            'cpassword.same' => "Pasword not match----"
        ];
    }
}
