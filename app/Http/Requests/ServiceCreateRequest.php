<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceCreateRequest extends FormRequest
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
            'content' => 'required|min:5',
            'image' => 'required|max:2048|mimes:jpg,jpeg,png',
            'single_image' => 'required|max:2048|mimes:jpg,jpeg,png',

        ];
    }

    public function attributes(){
        return [
            'name'=> 'Country:',
            'Image' => 'Image:',
            'content' => 'Content:',
            'single_image' => 'Single Image:'
        ];
    }
}
