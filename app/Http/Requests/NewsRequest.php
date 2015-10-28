<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class NewsRequest extends Request
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
            'title' => ['required', 'min:2'],
            'content' => 'required'
        ];

        if($this->isMethod('post')) {
            array_push($rules['title'], 'unique:news');
        }

        return $rules;
    }
}
