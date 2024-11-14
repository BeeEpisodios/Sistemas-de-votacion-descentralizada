<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use App\Models\Partido;
use Illuminate\Http\Request;
use App\Services\MultiChainService;


class VotoController extends Controller
{
  private $mc;

  // Obteniendo la conexion con la MultiChain JSON-RPC API
  public function __construct(MultiChainService $multiChainService)
  {
    $this->mc = $multiChainService;
  }

  // Mostrar la pagina principal de votación
  public function index()
  {
    return view("index");
  }

  // Peticion POST para validar datos del alumno y guardar voto en la multichain
  public function guardarVoto(Request $request)
  {
    //validación de datos
    $votoData = $request->validate([
      'opcion' => 'required|integer',
      'codigo' => 'required|string',
      'token' => 'required|string',
    ]);

    $stream = 'informatica';
    $key = 'elecciones24II';
    /*================= Verificar datos del alumno =================*/
    $lista = Partido::where('id', $votoData['opcion'])->first();
    $estudiante = Estudiante::where('codigo', $votoData['codigo'])->first();
    if (!$estudiante || $estudiante->token !== $votoData['token'] || !$lista) {
      return redirect()->route('principal')->with('error', 'Datos incorrectos en los valores : Codigo, Token, Lista.');
    }
    if ($estudiante->estado != false) {
      return redirect()->route('principal')->with('error', 'Token utilizado.');
    }

    /*==== Escribir voto en la blockchain con la llave publica del estudiante ====*/
    $txid = $this->mc->publicarVoto($estudiante->publickey, $stream, $key, [
      'json' => ['lista' => $lista->nombre, 'ID' => $lista->id]
    ]);
    $estudiante->estado = true;
    $estudiante->save();

    // --Retornar la pagina de Success con el id de transaccion
    return redirect()->route('voto.exito', ['txid' => $txid]);
  }
}
