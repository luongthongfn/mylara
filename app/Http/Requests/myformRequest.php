<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class myformRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    // protected $errorBag = 'login';
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
            'text1' => 'required',
            'text2' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'text1.required' => "required",
            'text2.required' => 'asdf'
        ];
    }
}
