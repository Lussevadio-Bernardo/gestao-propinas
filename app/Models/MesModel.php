<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MesModel extends Model
{
    use HasFactory;
    protected $table = 'mes';
    protected $fillable = ['nome'];
}