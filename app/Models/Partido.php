<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partido extends Model
{
  use HasFactory;

  protected $fillable = [
    'codigo',
    'publickey',
  ];

  public function elecciones()
  {
    return $this->belongsToMany(Eleccion::class, 'eleccion_partido', 'partido_id', 'eleccion_id');
  }
}
