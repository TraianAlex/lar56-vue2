<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GibberishRequest extends FormRequest
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
            'author'=> 'required|string|max:100',
            'cite'=> 'required|string|max:255',
            'date'=> 'required|date_format:Y-m-d',
        ];
    }
}
