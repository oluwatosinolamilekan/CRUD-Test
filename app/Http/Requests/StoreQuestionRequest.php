<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreQuestionRequest extends FormRequest
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
             'category_id' => [
                'required',
                'integer',
            ],
            'question'    => [
                'required',
            ],
            'points'      => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'option_text' => [
                'required',
                'array',
            ],
            'option_text.*' => [
                'required',
                'string'
            ],
            'is_correct' => [
                'required',
                'array',
            ],
            'is_correct.*' => [
                'required',
                'boolean',
            ]
        ];
    }

    public function messages()
    {
        return [
            'is_correct.required' => 'Question must have at least one correct option.'
        ];
    }
}
