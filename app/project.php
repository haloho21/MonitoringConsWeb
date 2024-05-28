<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    protected $primaryKey = 'project_id';
    protected $dates = ['created_at', 'updated_at', 'project_start', 'project_end'];
    protected $fillable = [
        'project_id', 'project_code', 'name_location', 'inserted_by', 'witel', 'sto', 'material', 'jasa', 'user_id', 'status_project', 'persentase', 'vendor_id',
    ];
}