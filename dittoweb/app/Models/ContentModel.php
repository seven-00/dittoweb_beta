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
  function getContentDetails($token){
    $curlopts=array(
        'request' => 'GET',
        'endpoint'=> 'layouts/content_details/records',
    );
    $headers=array(
        "Authorization: Bearer ".$token
    );
    return $this->connection($curlopts,$headers);
    
    }
    function getOneContent($token,$contentId){
        $curlopts=array(
            'request' => 'POST',
            'endpoint'=> 'layouts/content/_find',
            'postfields'=>'{
                "query":[
                    {
                        "content_id": "=='.$contentId.'"
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
    function getOneContentDetails($token,$contentId){
        $curlopts=array(
            'request' => 'POST',
            'endpoint'=> 'layouts/content_details/_find',
            'postfields'=>'{
                "query":[
                    {
                        "content_id": "=='.$contentId.'"
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
    function getDynamicContentDetails($token,$limit,$offset){
        $curlopts=array(
            'request' => 'GET',
            'endpoint'=> 'layouts/content_details/records/?script=getPhotoUrl&_limit='.$limit.'&_offset='.$offset.'',
        );
        $headers=array(
            "Authorization: Bearer ".$token
        );
        return $this->connection($curlopts,$headers);
    }
    function getDynamicContent($token,$limit,$offset){
        $curlopts=array(
            'request' => 'GET',
            'endpoint'=> 'layouts/content/records/?_limit='.$limit.'&_offset='.$offset.'',
        );
        $headers=array(
            "Authorization: Bearer ".$token
        );
        return $this->connection($curlopts,$headers);
    }
    function getInitialContent($token){
        $curlopts=array(
            'request' => 'GET',
            'endpoint'=> 'layouts/content/records/?_limit=4&_offset=1',
        );
        $headers=array(
            "Authorization: Bearer ".$token
        );
        return $this->connection($curlopts,$headers);
  }
  function getInitialContentDetails($token){
    $curlopts=array(
        'request' => 'GET',
        'endpoint'=> 'layouts/content_details/records/?script=getPhotoUrl&_limit=4&_offset=1',
    );
    $headers=array(
        "Authorization: Bearer ".$token
    );
    return $this->connection($curlopts,$headers);
}
function findContent($token,$searchstring)
{
    $curlopts=array(
        'request' => 'GET',
        'endpoint'=> 'layouts/content/records/?script=searchScript&script.param='.$searchstring.'',
    );
    $headers=array(
        "Authorization: Bearer ".$token
    );
    return $this->connection($curlopts,$headers);
}
    
}   