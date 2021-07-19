<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Blog extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['author' , 'blog_image' , 'title' , 'status' , 'content' , 'slug'];

    public function author(){

       return $this->belongsTo(User::class , 'user_id');
       
    }


}
