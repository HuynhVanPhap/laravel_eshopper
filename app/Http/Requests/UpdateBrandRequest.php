<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBrandRequest extends FormRequest
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
            'name' => ['required', 'unique:brands,id,name'],
            'categories' => ['required']
        ];

        return $rules;
    }

    public function messages()
    {
        $messages = [
            'name.required' => __('Required rule', ['input' => __('Category')]),
            'name.unique' => __('Unique rule', ['input' => __('Brand')]),
            'categories.required' => __('Required rule', ['input' => __('Category')])
        ];

        return $messages;
    }
}
