<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tematiks extends Model
{
    public $table = "tematiks";
    protected $primaryKey = 'tematik_id';
    protected $fillable = [
        'tematik_name',
    ];
}
