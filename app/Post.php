<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  protected $fillable = [
    'content',
    'content_img',
    'author',
    'author_img',
    'updated_at'
    ];
}
