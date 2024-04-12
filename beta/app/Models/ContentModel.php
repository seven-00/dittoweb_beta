<?php

namespace App\Models;

use App\Database\Fmcon;
class ContentModel extends Fmcon{
  function getContent($token){
        $curlopts=array(
            'request' => 'GET',
            'endpoint'=> 'layouts/content/records',
        );
        $headers=array(
            "Authorization: Bearer ".$token
        );
        return $this->connection($curlopts,$headers);
  }
}   