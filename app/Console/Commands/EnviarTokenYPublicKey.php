<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Estudiante;
use App\Mail\VotoCorreo;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class EnviarTokenYPublicKey extends Command
{
  // El nombre del comando
  protected $signature = 'enviar:tokensypubkey';

  // Descripción del comando
  protected $description = 'Generar y enviar tokens y claves públicas a los estudiantes para que puedan votar';

  public function handle()
  {
    // Obtener todos los estudiantes
    $estudiantes = Estudiante::all();

    // Iterar sobre los estudiantes
    foreach ($estudiantes as $estudiante) {
      // Generar un token único para cada estudiante
      $token = Str::random(32);
      $estudiante->token = $token;
      $estudiante->save();

      // Enviar el correo con el token y la clave pública
      Mail::to($estudiante->codigo . '@unsaac.edu.pe')->send(new VotoCorreo($estudiante->codigo, $estudiante->token, $estudiante->publickey));

      // Mostrar un mensaje en consola
      $this->info("Correo enviado a {$estudiante->codigo} con su token y clave pública.");
    }

    $this->info('Tokens y claves públicas enviados a todos los estudiantes.');
  }
}
