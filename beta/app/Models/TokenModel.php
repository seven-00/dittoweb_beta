<?php

namespace App\Models;

use App\Database\Fmcon;
class TokenModel extends Fmcon{
  function getToken(){
    $curlopts=array(
        'request' => 'POST',
        'endpoint'=> 'sessions',
    );
    $headers=array(
        'Content-Type: application/json',
        'Authorization: Basic '.base64_encode(getenv("fmdb.username").":".getenv("fmdb.password")).''
    );
    return $this->connection($curlopts,$headers);
  }
}