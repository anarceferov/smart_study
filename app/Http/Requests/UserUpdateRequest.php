<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Carbon\Carbon;

class UserUpdateRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {

        return [
            'name' => 'min:3',
            'email' => 'email|min:10|unique:users,email,'.$this->id.'|nullable',
            'date_birth' => 'before:'.now(),
            'job' => 'min:2',
            'password' => 'confirmed',
            'cv' => 'max:2048|mimes:jpg,jpeg,png,pdf',
            'image' => 'max:2048|mimes:jpg,jpeg,png',

        ];
    }

    public function attributes(){
        return [
            'name'=> 'Name:',
            'email' => 'Email:',
            'date_birth' => 'Birth Date:',
            'job' => 'Job:',
            'password' => 'Password:',
            'cv' => 'FIle:',
            'image' => 'Image:'
        ];
}
}
