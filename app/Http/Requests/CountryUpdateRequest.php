<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CountryUpdateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'min:5',
            'content' => 'min:5',
            'image' => 'max:2048|mimes:jpg,jpeg,png',

        ];
    }

    public function attributes(){
        return [
            'name'=> 'Country:',
            'Image' => 'Image:',
            'content' => 'Content:',
        ];
    }
}
