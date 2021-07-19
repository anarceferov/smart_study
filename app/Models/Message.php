<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'number',
        'topic',
        'message',
        'lastName',
        'status',
        'user_name',
        'baxilir_date',
        'arasdirilir_date',
        'tamamlanib_date'
    ];
}

