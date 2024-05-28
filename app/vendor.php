<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vendor extends Model
{
    protected $primaryKey = 'vendors_id';
    protected $fillable = [
        'vendors_id', 'vendors_name','vendors_address',
    ];
}
