<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\MultiChainService;
use App\Models\Estudiante;

class GenerarLlavesPublicas extends Command
{
  protected $signature = 'app:generar-llaves';
  protected $description = 'Genera llaves públicas para los estudiantes y las guarda en la base de datos';

  private $multiChainService;

  // Construir el sericio de la Multichain API
  public function __construct(MultiChainService $multiChainService)
  {
    parent::__construct();
    $this->multiChainService = $multiChainService;
  }

  // Funcionalidad: Genera una llave publica a cada estudiante
  public function handle()
  {
    $estudiantes = Estudiante::whereNull('publickey')->get();

    foreach ($estudiantes as $estudiante) {
      $publicKey = $this->multiChainService->generarLlavePublica();
      $estudiante->publickey = $publicKey;
      $estudiante->save();
      $this->info("Llave pública generada para el estudiante con código: {$estudiante->codigo}");
    }

    $this->info('Generación de llaves públicas completada.');
  }
}
