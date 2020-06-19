<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedicoModel extends Model
{
    protected $table = 'medicos';
    protected $primaryKey = 'id';
    protected $fillable = ['nome', 'crm', 'sexo'];

}
