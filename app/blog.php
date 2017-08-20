<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    protected $fillable = ['title', 'subtitle', 'body', 'image_url'];
}
