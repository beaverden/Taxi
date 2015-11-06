<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
/**
 * Login from /admin
 */
class LoginFormRequest extends Request
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
            'password' => 'required|max:20',
            'captcha' => 'required|captcha'
        ];
    }
}
