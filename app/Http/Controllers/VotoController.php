<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use App\Models\Partido;
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
    /*$partido0 = new Partido();
    $partido0->nombre = "Nexus";
    $partido0->save();
    $partido1 = new Partido();
    $partido1->nombre = "Info Unity";
    $partido1->save();
    $partido2 = new Partido();
    $partido2->nombre = "Unidad Central";
    $partido2->save();
    $estudiante = new Estudiante();
    $estudiante->codigo = '182932';
    $estudiante->save();*/
    return view("index");
  }

  public function guardarVoto(Request $request)
  {
    $votoData = $request->validate([
      'opcion' => 'required|integer',
      'codigo' => 'required|string',
      'token' => 'required|string',
    ]);

    $stream = 'informatica';
    $key = 'elecciones24II';

    $lista = Partido::where('id', $votoData['opcion'])->first();
    $estudiante = Estudiante::where('codigo', $votoData['codigo'])->first();

    if (!$estudiante || $estudiante->token !== $votoData['token'] || !$lista) {
      return redirect()->route('principal')->with('error', 'Datos incorrectos en los valores : Codigo, Token, Lista.');
    }
    if ($estudiante->estado != false) {
      return redirect()->route('principal')->with('error', 'Token utilizado.');
    }

    $txid = $this->mc->publicarVoto($estudiante->publickey, $stream, $key, [
      'json' => ['lista' => $lista->nombre, 'ID' => $lista->id]
    ]);
    $estudiante->estado = true;
    $estudiante->save();

    return redirect()->route('voto.exito', ['txid' => $txid]);
  }
}
