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
  protected $signature = 'app:enviar-datos';

  // Descripción del comando
  protected $description = 'Generar y enviar tokens y claves públicas a los estudiantes para que puedan votar';

  // Funcionalidad: Se genera y envia un token a cada estudiante junto con la llave publica
  public function handle()
  {
    //$estudiantes = Estudiante::all();
    $estudiantes = Estudiante::where('enviado', false)->get();

    foreach ($estudiantes as $estudiante) {
      // Generar un token
      $token = Str::random(10);
      $estudiante->token = $token;
      $estudiante->enviado = true;
      $estudiante->save();

      // Enviar el correo con el token y la clave pública
      Mail::to($estudiante->codigo . '@unsaac.edu.pe')->send(new VotoCorreo($estudiante->codigo, $estudiante->token, $estudiante->publickey));

      $this->info("Correo enviado a {$estudiante->codigo} con su token y clave pública.");
    }
    $this->info('Datos enviados a los estudiantes --- Exito.');
  }
}
