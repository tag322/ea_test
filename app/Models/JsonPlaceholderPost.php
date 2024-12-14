<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JsonPlaceholderPost extends Model
{
    protected $table = 'posts';

    protected $fillable = ['user_id', 'title', 'body'];
}
