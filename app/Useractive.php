<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Useractive extends Model
{
    protected $guarded = [];
    protected $table = 'wp.user_active';

    public $timestamps = false;
}
