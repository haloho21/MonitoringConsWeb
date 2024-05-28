<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class evals extends Model
{
    public $table = "eval";
    protected $primaryKey = 'eval_id';
    protected $fillable = [
        'text',
    ];
}
