<?php

namespace App\Http\Requests\HomePage;

use Illuminate\Foundation\Http\FormRequest;

class EditHomePageRequest extends FormRequest
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
            'first_title' => 'required',
            'first_brief' => 'required',
            'first_main_text' => 'required',
            'second_title' => 'required',
            'second_main_text' => 'required',
            'third_title' => 'required',
            'fourth_title' => 'required'
        ];
    }
}
