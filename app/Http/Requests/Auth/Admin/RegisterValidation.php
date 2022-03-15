<?php

namespace App\Http\Requests\Auth\Admin;

use Illuminate\Foundation\Http\FormRequest;

class RegisterValidation extends FormRequest
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
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required', 'email:rfc,dns', 'unique:users,email'],
            'password' => ['required'],
            'password_verify' => ['required', 'same:password'],
        ];

        return $rules;
    }

    public function messages()
    {
        $messages = [
            'first_name.required' => __('Required rule', ['input' => __('First name')]),
            'last_name.required' => __('Required rule', ['input' => __('Last name')]),
            'email.required' => __('Required rule', ['input' => __('Email')]),
            'email.email' => __('Email rule'),
            'email.unique' => __('Unique rule'),
            'password.required' => __('Required rule', ['input' => __('Password')]),
            'password_verify.required' => __('Required rule', ['input' => __('Password verify')]),
            'password_verify.same' => __('Same rule', ['input' => __('Password verify')]),
        ];

        return $messages;
    }
}
