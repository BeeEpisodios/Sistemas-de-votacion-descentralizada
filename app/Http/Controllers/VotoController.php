<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;
use App\Services\MultiChainService;


class VotoController extends Controller
{
  private $mc;

  public function __construct(MultiChainService $multiChainService)
  {
    $this->mc = $multiChainService;
  }

  public function index()
  {
    return view("index");
  }

  public function guardarVoto(Request $request)
  {
    /*
    $estudiante = new Estudiante();
    $estudiante->codigo = '182932';
    $estudiante->save();*/

    $stream = 'informatica';
    $key = 'elecciones25II';

    // Validación y obtención de los datos validados
    $votoData = $request->validate([
      'opcion' => 'required|string',
      'codigo' => 'required|string',
      'token' => 'required|string',
    ]);

    // Verificar que el código del estudiante existe y el token es correcto
    $estudiante = Estudiante::where('codigo', $votoData['codigo'])->first();

    if (!$estudiante || $estudiante->token !== $votoData['token']) {
      // Si no se encuentra el estudiante o el token no coincide, redirigir con un mensaje de error
      return redirect()->route('principal')->with('error', 'Código o token incorrectos.');
    }

    // Si el código y token son correctos, proceder con la publicación en MultiChain
    $address = $estudiante->publickey; // Aquí se toma la llave pública del estudiante
    $txid = $this->mc->publicarVoto($address, $stream, $key, [
      'json' => ['lista' => $votoData['opcion']]
    ]);

    // Redirigir con el txid de la transacción
    return redirect()->route('voto.exito', ['txid' => $txid]);
  }
}
