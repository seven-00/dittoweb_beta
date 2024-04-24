<?php

namespace App\Controllers;

use App\Models\ContentModel;
use App\Models\UsersModel;
use App\Models\ReviewModel;

class Content extends BaseController
{
    public function content()
    {
        
        $model = new ContentModel();
        $token = $this->session->get('token');
        $resdata = $model->getContent($token);
        $imgdata = $model->getContentDetails($token);

       $contentpayload=[];
       foreach ($imgdata['response']['data'] as $photo) {
        $contentId = $photo['fieldData']['content_id'];
        if($photo['fieldData']['content_photo']!=""){
            $contentpayload[$contentId]['content-photo'][] = $photo['fieldData']['content_photo_url'];
        }
       
       }
       foreach ($resdata['response']['data'] as $content) {
        $contentId = $content['fieldData']['content_id'];
        $contentpayload[$contentId]['content-name'][] = $content['fieldData']['content_name'];
       }

        return view("content_page",array('contentpayload'=>$contentpayload));   
    }
    public function content_details($contentId)
    {
        $Contentmodel = new ContentModel();
        $Usermodel = new UsersModel();
        $Reviewmodel = new ReviewModel();
        $token = $this->session->get('token');
        $content=$Contentmodel->getOneContent($token,$contentId);
        $contentdata=$Contentmodel->getOneContentDetails($token,$contentId);
        $contentreviews=$Reviewmodel->getOneContentReviews($token,$contentId);
        
        $contentpayload=$content['response']['data'][0]['fieldData'];
        $contentdatapayload=$contentdata['response']['data'][0]['fieldData'];
        $contentreviewspayload=[];
        if($contentreviews["messages"][0]["code"]!="401"){
        foreach($contentreviews['response']['data']as $review){
                $reviewId = $review['fieldData']['review_ID'];
                $contentreviewspayload[$reviewId]['review']=$review['fieldData']['review'];
                $response = $Usermodel->findUser($review['fieldData']['user_ID'],$token);
                $contentreviewspayload[$reviewId]['user']=$response['response']['data'][0]['fieldData']['userFullName'];
        }
    }
        return view('content_details',array('contentpayload'=>$contentpayload,
                                            'contentdatapayload'=>$contentdatapayload,
                                            'contentreviewspayload'=>$contentreviewspayload
                                                    ));
        
    }
    public function add_review ($contentId){
        $Reviewmodel = new ReviewModel();
        $review = $this->request->getPost('review');
        $userId = $this->session->get('user');
        $token = $this->session->get('token');
        $response = $Reviewmodel->addNewReview($token,$contentId,$userId,$review);
        return redirect()->to('/content/'.$contentId.'');
    }
    
}