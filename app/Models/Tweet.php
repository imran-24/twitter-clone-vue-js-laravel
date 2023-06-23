<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'handle',
        'image',
        'tweet',
        'file',
        'is_valid'
    ];
}
