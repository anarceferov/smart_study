<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SuccessUpdateRequest extends FormRequest
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
            'image' => 'max:2048|mimes:jpg,jpeg,png',
        ];
    }

    public function attributes(){
        return [
            'Image' => 'Image:',
        ];
    }
}
