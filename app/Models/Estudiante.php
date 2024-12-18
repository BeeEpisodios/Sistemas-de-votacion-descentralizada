<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
  /***********************Estudiantes Model ***********************/
  use HasFactory;

  protected $primaryKey = 'codigo';

  protected $fillable = ['codigo', 'token', 'publickey', 'estado'];

  protected $casts = [
    'codigo' => 'string',
  ];
}
