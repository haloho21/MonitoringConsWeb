<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class history_progress extends Model
{
    public $table = "history_progress";
    protected $primaryKey = 'hp_id';
    protected $fillable = [
        'hp_designator', 'hp_volume','hp_percent', 'hp_status', 'hp_approval', 'hp_deskripsi', 'hp_unit', 'hp_tot_material', 'hp_tot_jasa', 'created_at',
    ];
}
