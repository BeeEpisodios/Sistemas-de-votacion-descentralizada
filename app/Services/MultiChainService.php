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


  public function generarLlavePublica()
  {
    $address = $this->mc->getnewaddress();
    $txid = $this->mc->grant($address, 'send,receive'); // global permission
    $txid = $this->mc->grant($address, 'informatica.write'); // per-entity permission
    return $address;
  }

  // Método para publicar datos en un stream
  public function publicarVoto($address, $stream, $key, $data)
  {
    $txid = $this->mc->publishfrom($address, $stream, $key, $data);
    return $txid;
  }

  // Otros métodos para diferentes funcionalidades de MultiChain
  // ...
}
