<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropinasModel extends Model
{
    use HasFactory;
    protected $table = 'propinas';
    protected $fillable = ['classe','valor','id_funcionario','id_curso'];
}
