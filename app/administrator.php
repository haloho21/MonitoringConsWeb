<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class administrator extends Model
{
    //
}

class user extends Model
{
    protected $primaryKey = 'user_id';
    protected $fillable = [
        'user_id', 'username', 'password', 'email', 'kontak','alamat','user_type'
    ];
}

class vendor extends Model
{
    protected $primaryKey = 'vendors_id';
    protected $fillable = [
        'vendors_id', 'vendors_name','vendors_address',
    ];
}

class tematik extends Model
{
    protected $primaryKey = 'tematik_id';
    protected $fillable = [
        'tematik_id', 'tematik_name',
    ];
}

class designator extends Model
{
    protected $primaryKey = 'designators_id';
    protected $fillable = [
        'designators_id', 'designators_name','designators_unit', 'designators_material', 'designators_jasa', 'designators_uraian',
    ];
}
