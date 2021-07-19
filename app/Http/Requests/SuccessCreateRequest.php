<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SuccessCreateRequest extends FormRequest
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

    public function rules()
    {
        return [
            'name' => 'required|min:5',
            'uni' => 'required|min:3',
            'image' => 'required|max:2048|mimes:jpg,jpeg,png',
            'faculty' => 'required',
            'degree' => 'required',
        ];
    }

    public function attributes(){
        return [
            'name'=> 'Name:',
            'Image' => 'Image:',
            'uni' => 'University:',
            'faculty' => 'Faculty:',
            'degree' => 'Degree'
        ];
    }
}
