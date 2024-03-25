<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstudanteModel extends Model
{
    use HasFactory;
    protected $table = 'estudante';
    protected $fillable = ['id_estudante','classe','turma','num_processo','data_matricula','id_funcionario','id_curso'];
}
