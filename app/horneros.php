<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class horneros extends Model
{
    protected $table = 'hist_turno_men';
    protected $primaryKey = 'id_empleado';
    public $timestamps = false;

}
