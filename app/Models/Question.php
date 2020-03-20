<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'title', 'slug', 'body', 'view', 'answer', 'votes', 'best_answer_id', 'user_id',
    ];
}