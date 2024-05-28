<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class designator extends Model
{
    protected $primaryKey = 'designators_id';
    protected $fillable = [
        'designators_id', 'designators_name','designators_unit', 'designators_material', 'designators_jasa', 'designators_uraian',
    ];
}
