<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MarcarModel extends Model
{
    protected $table = 'marcar';
    protected $primaryKey = 'id';
    protected $fillable = ['nomePaciente', 'nomeMedico', 'dataConsulta','
    horaConsulta', 'causa'];
}
