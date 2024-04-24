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

    function genToken()
    {
        $getToken = new TokenModel();
        $jsondata = $getToken->getToken();
        $token = $jsondata['response']['token'];
        return $token;
    }
    function newUser($fname,$lname,$email,$password,$token){   
        $curlopts=array(
            'request' => 'POST',
            'endpoint'=> 'layouts/Users/records',
            'postfields'=>'{
                "fieldData":{
                    "userFirstName":"'.$fname.'",
                    "userLastName":"'.$lname.'",
                    "userEmail":"'.$email.'",
                    "userPass":"'.$password.'"
                }
            }'
            
        );
        $headers=array(
            'Content-Type: application/json',
            "Authorization: Bearer ".$token
        );
        return $this->connection($curlopts,$headers);

    }
    function findUser($userId,$token){
        $curlopts=array(
            'request' => 'POST',
            'endpoint'=> 'layouts/Users/_find',
            'postfields'=>'{
                "query":[
                    {
                        "userId": "=='.$userId.'"
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