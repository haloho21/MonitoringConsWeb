<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    protected $primaryKey = 'user_id';
    protected $fillable = [
        'user_id', 'username', 'password', 'email', 'kontak','alamat','user_type'
    ];
}
