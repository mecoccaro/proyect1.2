<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class inasistencia extends Model
{
    protected $table = 'inasistencia_reunion';
    public $timestamps = false;
    protected $primaryKey = 'id_reunion';

}
