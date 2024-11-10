<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\MultiChainClient;

class VotoController extends Controller
{
  private $mc;

  public function __construct()
  {
    $host = '127.0.0.1';
    $port = 4248;
    $username = 'multichainrpc';
    $password = 'CkaLdesG7xx4jCUqX6eDanguZewkVSBz78RbazFe9Kx6';
    $usessl = false;
    $this->mc = new MultiChainClient($host, $port, $username, $password, $usessl);
  }

  public function index()
  {
    return view("index");
  }

  public function guardarVoto(Request $request)
  {
    $stream = 'informatica';
    $key = 'elecciones25II';

    // Validación y obtención de los datos validados
    $votoData = $request->validate([
      'opcion' => 'required|string',
      'codigo' => 'required|string',
      'token' => 'required|string',
    ]);

    // Publicación usando los datos validados
    $txid = $this->mc->publish($stream, $key, [
      'json' => [
        'lista' => $votoData['opcion'],
      ]
    ]);
    $txid1 = $this->mc->publishfrom('1R4UFK9YF196QHdPKXVKnqAZDX1QWVeMM3pqYf', $stream, $key, [
      'json' =>
      [
        'lista' => $votoData['opcion'],
      ]
    ]);
    return view('success');
  }

  public function show(string $id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    //
  }
}
