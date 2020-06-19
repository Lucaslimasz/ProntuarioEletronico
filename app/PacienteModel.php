<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PacienteModel extends Model
{
    protected $table = 'pacientes';
    protected $primaryKey = 'id';
    protected $fillable = ['nome', 'cpf', 'sexo'];
}


