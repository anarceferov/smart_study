<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Carbon\Carbon;

class UserRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {

        return [
            'name' => 'required|min:3',
            'email' => 'email|required|min:10|unique:users,email',
            'tel' => 'required',
            'age' => 'required',
            'date_birth' => 'required|before:'.now(),
            'job' => 'required|min:2',
            'password' => 'confirmed|required|min:5',
            'cv' => 'required|max:2048|mimes:jpg,jpeg,png,pdf',
            'image' => 'required|max:2048|mimes:jpg,jpeg,png'

        ];
    }

    public function attributes(){
        return [
            'name'=> 'Name:',
            'email' => 'Email:',
            'tel' => 'Telephone:',
            'age' => 'Age:',
            'date_birth' => 'Birth Date:',
            'job' => 'Job:',
            'password' => 'Password:',
            'cv' => 'FIle:',
            'image' => "Image:"
        ];
    }
}
