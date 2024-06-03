<?php
namespace Filemaker;
require_once 'Fmdbcon.php';

class Fmdapi extends Fmdbcon{


    function getToken(){
        $curlopts=array(
            'request' => 'POST',
            'endpoint'=> 'sessions',
        );
        $headers=array(
            'Content-Type: application/json',
            'Authorization: Basic '.base64_encode(getenv("fmdb.username").":".getenv("fmdb.password")).''
        );
        $result = $this->connection($curlopts,$headers);
        $_SESSION['token']= $result['response']['token'];
    }

    function getOneRecord($layoutName,$ID,$IDfield){
       
            $curlopts=array(
                'request' => 'POST',
                'endpoint'=> 'layouts/'.$layoutName.'/_find',
                'postfields'=>'{
                    "query":[
                        {
                            "'.$IDfield.'": "=='.$ID.'"
                        }
                     ]  
                }'
            );
            $headers=array(
                'Content-Type: application/json',
                "Authorization: Bearer ".$_SESSION['token'].''
            );
            $result  = $this->connection($curlopts,$headers);
            if ($result['messages'][0]['code']=="952")
            {
                $this->getToken();
                $result = $this->getOneRecord($layoutName,$ID,$IDfield);
                return $result;
            }
            else
            return $result;

    }
}
