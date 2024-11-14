<?php

namespace App\Services;

use App\Services\MultiChainClient;

class MultiChainService
{
  private $mc;

  public function __construct()
  {
    $host = '127.0.0.1';
    $port = 4266;
    $username = 'multichainrpc';
    $password = 'Fb2rpfVTuNF7JSMpDamQF3SHXb1mDcuRqnNq5TGy9qRs';
    $usessl = false;
    $this->mc = new MultiChainClient($host, $port, $username, $password, $usessl);
  }

  // Esta función genera una llave publica
  public function generarLlavePublica()
  {
    $address = $this->mc->getnewaddress();
    $txid = $this->mc->grant($address, 'send,receive');      //Permisos globales a la llave publica
    $txid = $this->mc->grant($address, 'informatica.write'); //Permisos para escribir en es stream
    return $address;
  }

  // Método para publicar datos en un stream
  public function publicarVoto($address, $stream, $key, $data)
  {
    $txid = $this->mc->publishfrom($address, $stream, $key, $data);
    return $txid;
  }
}
