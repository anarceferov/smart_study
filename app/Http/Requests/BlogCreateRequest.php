<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogCreateRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'content' => 'required|min:5',
            'title' => 'required|min:5',
            'blog_image' => 'required|max:2048|mimes:jpg,jpeg,png',

        ];
    }

    public function attributes(){
        return [
            'title'=> 'Title:',
            'blog_image' => 'Blog Image:',
            'content' => 'Content:',
        ];
    }
}
