<?php

namespace App\Console\Commands;

use App\Models\Estudiante;
use App\Models\Partido;
use Illuminate\Console\Command;

class RegistrarDatos extends Command
{
  /**
   * The name and signature of the console command.
   *
   * @var string
   */
  protected $signature = 'app:registrar-datos';

  /**
   * The console command description.
   *
   * @var string
   */
  protected $description = 'Command description';

  /**
   * Execute the console command.
   */
  public function handle()
  {
    $listas = ["Nexus", "Info Unity", "Unidad Central", "Blanco"];
    foreach ($listas as $lista) {
      $existe = Partido::where('nombre', $lista)->exists();

      if (!$existe) {
        Partido::create(['nombre' => $lista]);
      }
    }

    $this->info("Datos de partidos añadidos con exito.");

    $codigos = ['182932'];
    foreach ($codigos as $codigo) {
      // Verificar si el estudiante ya existe
      $existe = Estudiante::where('codigo', $codigo)->exists();

      if (!$existe) {
        // Guardar el estudiante si no existe
        Estudiante::create(['codigo' => $codigo]);
      }
    }
    $this->info("Datos de estudiantes añadidos con exito.");
  }
}
