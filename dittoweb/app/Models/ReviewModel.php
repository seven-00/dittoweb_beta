<?php

namespace App\Models;

use App\Database\Fmcon;
class ReviewModel extends Fmcon{
    function getOneContentReviews($token,$contentId){
        $curlopts=array(
            'request' => 'POST',
            'endpoint'=> 'layouts/reviews/_find',
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
    function addNewReview($token,$contentId,$userId,$review){
        $curlopts=array(
            'request' => 'POST',
            'endpoint'=> 'layouts/reviews/records',
            'postfields'=>'{
                "fieldData":{
                    "review":"'.$review.'",
                    "user_ID":"'.$userId.'",
                    "content_ID":"'.$contentId.'"
                    
                }
            }'
            
        );
        $headers=array(
            'Content-Type: application/json',
            "Authorization: Bearer ".$token
        );
        return $this->connection($curlopts,$headers);

    }
}