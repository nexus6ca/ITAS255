<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    // Turn off Eloquent's default auto-timestamp feature
    public $timestamps = false;
}