<?php

namespace App\Http\Requests\Auth\Admin;

use Illuminate\Foundation\Http\FormRequest;

class LoginValidation extends FormRequest
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
        $rules = [
            'email' => ['required', 'email:rfc,dns'],
            'password' => ['required'],
        ];

        return $rules;
    }

    public function messages()
    {
        $messages = [
            'email.required' => __('Required rule', ['input' => __('Email')]),
            'email.email' => __('Email rule'),
            'password.required' => __('Required rule', ['input' => __('Password')]),
        ];

        return $messages;
    }
}
