<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'name' => ['required'],
            'slug' => ['required', 'unique:products,slug'],
            'category_id' => ['required'],
            'brand_id' => ['required'],
            'upload_image' => ['required', 'image'],
            'price' => ['required', 'regex:/^[0-9\.\,]+$/'],
            'discount' => ['nullable', 'numeric', 'min:5', 'max:99'],
            'status' => ['nullable'],
            // 'stock' => ['regex:/^[0-9]+$/'],
            'stock' => ['numeric'],
        ];

        return $rules;
    }

    public function messages()
    {
        $messages = [
            'name.required' => __('Required rule', ['input' => __('Name')]),
            'slug.required' => __('Required rule', ['input' => __('URL')]),
            'slug.slug' => __('Unique rule', ['input' => __('URL')]),
            'category_id.required' => __('Required rule', ['input' => __('Category')]),
            'brand_id.required' => __('Required rule', ['input' => __('Brand')]),
            'upload_image.required' => __('Required rule', ['input' => __('Image')]),
            'upload_image.image' => __('Image rule'),
            'price.required' => __('Required rule', ['input' => __('Price')]),
            'price.regex' => __('Price regex rule'),
            'discount.numeric' => __('Numeric rule', ['input' => __("Discount's percent")]),
            'discount.min' => __('Min rule', ['value' => "5%"]),
            'discount.max' => __('Max rule', ['value' => "99%"]),
            'stock.numeric' => __('Numeric rule', ['input' => __("Stock")])
        ];

        return $messages;
    }
}
