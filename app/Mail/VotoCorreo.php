<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class VotoCorreo extends Mailable
{
  use Queueable, SerializesModels;

  public $codigo;
  public $token;
  public $publicKey;

  /**
   * Crear una nueva instancia de mensaje.
   *
   * @param string $codigo
   * @param string $token
   * @param string $publicKey
   */
  public function __construct($codigo, $token, $publicKey)
  {
    $this->codigo = $codigo;
    $this->token = $token;
    $this->publicKey = $publicKey;
  }

  /**
   * Construir el mensaje.
   *
   * @return $this
   */
  public function build()
  {
    return $this->subject('CENTRO FEDERADO DE INFORMÁTICA')
      ->view('emails.voto_correo'); // Vista que crearás a continuación
  }
}
