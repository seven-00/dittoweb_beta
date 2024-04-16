<?php

namespace App\Database;
class Fmcon{
     function connection($data,$headers)
    {
            $con = curl_init();
            curl_setopt_array($con, array(
                        CURLOPT_URL => "https://".getenv("fmdb.hostname")."/fmi/data/v2/databases/".getenv("fmdb.database")."/".$data['endpoint'],
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_SSL_VERIFYHOST => false,
                        CURLOPT_SSL_VERIFYPEER =>false,
                        CURLOPT_CUSTOMREQUEST =>$data['request'],
                        CURLOPT_POSTFIELDS =>'',
                        CURLOPT_HTTPHEADER => $headers
            ));


            $response = curl_exec($con);
            curl_close($con);
            $jsonResponse = json_decode($response,true);
            
            return $jsonResponse;         
    }
    public function ExpiredCon()
    {

    }
}