<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comments_replies extends Model
{
    use HasFactory;
    protected $fillable=[
        'content',
        'comment_id',
        // 'post_id'
    ];
}
