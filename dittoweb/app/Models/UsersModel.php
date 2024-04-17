<?php

namespace App\Models;
use CodeIgniter\Model;
use App\Models\TokenModel;
use App\Database\Fmcon;
class UsersModel extends Fmcon{
    
    function authUser($email,$password,$token)
    {
        $curlopts=array(
            'request' => 'POST',
            'endpoint'=> 'layouts/Users/_find',
            'postfields'=>'{
                "query":[
                    {
                        "userEmail": "=='.$email.'"
                    }
                 ]  
            }'
        );
        $headers=array(
            'Content-Type: application/json',
            "Authorization: Bearer ".$token
        );
        return $this->connection($curlopts,$headers);
    }
}