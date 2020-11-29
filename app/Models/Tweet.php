<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'tweet',
    ];

    public function comments() {
        return $this->hasMany(Comment::class, 'tweet_id', 'id');
    }
}
