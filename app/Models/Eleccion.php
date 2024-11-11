<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eleccion extends Model
{
  use HasFactory;

  protected $fillable = ['id', 'semestre'];

  public function partidos()
  {
    return $this->belongsToMany(Partido::class, 'eleccion_partido', 'eleccion_id', 'partido_id');
  }
}
