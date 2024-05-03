<?php

namespace App\Controllers;

use App\Models\ContentModel;
use App\Models\UsersModel;
use App\Models\ReviewModel;
use PHPUnit\Logging\TestDox\HtmlRenderer;

use function PHPSTORM_META\type;

class Content extends BaseController
{
    public function content()
    {

        $model = new ContentModel();
        $token = $this->session->get('token');
        $content = $model->getInitialContent($token);
        $contentdetails = $model->getInitialContentDetails($token);
        $userFirstName = $this->session->get('fname');
        $userLastName = $this->session->get('lname');

        $contentpayload = [];
        if ($content['messages'][0]['code'] == 0) {
        foreach ($content['response']['data'] as $contentdata) {
            $contentId = $contentdata['fieldData']['content_id'];
            $contentpayload[$contentId]['content-name'] = $contentdata['fieldData']['content_name'];
        }
        foreach ($contentdetails['response']['data'] as $contentdata) {
            $contentId = $contentdata['fieldData']['content_id'];
            $contentpayload[$contentId]['content-ID'] = $contentdata['fieldData']['content_id'];
            $contentpayload[$contentId]['content-photo'] = $contentdata['fieldData']['content_photo_url'];
            $contentpayload[$contentId]['content-type'] = $contentdata['fieldData']['content_type'];
            $contentpayload[$contentId]['content-year'] = $contentdata['fieldData']['content_year'];
        }

        return view('templates/header',array('userfname' => $userFirstName,
        'userlname' => $userLastName)) 
        .view("content_page", array("contentpayload" => $contentpayload));
        }
        else
        {
            return redirect()->to('/login');
        }
    }
    public function content_details($contentId)
    {
        $Contentmodel = new ContentModel();
        $Usermodel = new UsersModel();
        $Reviewmodel = new ReviewModel();
        $token = $this->session->get('token');
        $userFirstName = $this->session->get('fname');
        $userLastName = $this->session->get('lname');

        $content = $Contentmodel->getOneContent($token, $contentId);
        $contentdata = $Contentmodel->getOneContentDetails($token, $contentId);
        $contentreviews = $Reviewmodel->getOneContentReviews($token, $contentId);
        if ($content['messages'][0]['code'] == 0) {
            $contentpayload = $content['response']['data'][0]['fieldData'];
            $contentdatapayload = $contentdata['response']['data'][0]['fieldData'];
            $contentreviewspayload = [];
            if ($contentreviews["messages"][0]["code"] != "401") {
                foreach ($contentreviews['response']['data'] as $review) {
                    $reviewId = $review['fieldData']['review_ID'];
                    $contentreviewspayload[$reviewId]['review'] = $review['fieldData']['review'];
                    $response = $Usermodel->findUser($review['fieldData']['user_ID'], $token);
                    $contentreviewspayload[$reviewId]['user'] = $response['response']['data'][0]['fieldData']['userFullName'];
                }
            }

            return view('templates/header', array(
                'userfname' => $userFirstName,
                'userlname' => $userLastName
            ))
                . view('content_details', array(
                    'contentpayload' => $contentpayload,
                    'contentdatapayload' => $contentdatapayload,
                    'contentreviewspayload' => $contentreviewspayload
                ));
        } else {
            print_r($content);
        }
    }
    public function add_review($contentId)
    {
        $Reviewmodel = new ReviewModel();
        $review = $this->request->getPost('review');
        $userId = $this->session->get('user');
        $token = $this->session->get('token');
        $response = $Reviewmodel->addNewReview($token, $contentId, $userId, $review);
        return redirect()->to('/content/' . $contentId . '');
    }
    public function dynamic_load()
    {
        $content = new ContentModel();
        $token = $this->session->get('token');
        $limit =  8;
        $offset = $this->request->getPost('offset');
        $contentdetails = $content->getDynamicContentDetails($token, $limit, $offset);
        $contentdata = $content->getDynamicContent($token, $limit, $offset);
        $contentpayload = [];

        if ($contentdetails["messages"][0]["code"] == 0 || $contentdata["messages"][0]["code"] == 0) {
            $htmlresponse = "";
            foreach ($contentdetails['response']['data'] as $item) {
                $contentId = $item['fieldData']['content_id'];

                $contentpayload[$contentId]['content-photo'] = $item['fieldData']['content_photo_url'];
                $contentpayload[$contentId]['content-type'] = $item['fieldData']['content_type'];
                $contentpayload[$contentId]['content-year'] = $item['fieldData']['content_year'];
            }
            foreach ($contentdata['response']['data'] as $item) {
                $contentId = $item['fieldData']['content_id'];
                $contentpayload[$contentId]['content-name'] = $item['fieldData']['content_name'];
                $contentpayload[$contentId]['content-ID'] = $item['fieldData']['content_id'];
            }
            foreach ($contentpayload as $item) {
                $htmlresponse .= '<div class="col mb-5">
                <a href="content/' . $item['content-ID'] . '">
                <div class="card h-100 custom-rounded card-effect">
                    <!-- Product image-->
                    <img class="card-img-top custom-rounded" src="' . $item['content-photo'] . '" height="300" alt="..." />
                    <div class="card-img-overlay custom-rounded"> 
                        <h5 class="card-title ">' . $item['content-name'] . '</h5>
                        <p class="card-subtitle">' . $item['content-type'] . '</p>
                        <p class="card-subtitle text-muted">' . $item['content-year'] . '</p>
                    </div>
                </div>
                </a>
            </div>';
            }
            print_r($htmlresponse);
        } else {
            echo true;
        }
    }
    public function search_content()
    {
        
        $model = new ContentModel();
        $token = $this->session->get('token');
        $searchQuery = $this->request->getPost('search');
        $content = $model->findContent($token,$searchQuery);
        $contentdetails = $model->findContentDetails($token,$searchQuery);
        $userFirstName = $this->session->get('fname');
        $userLastName = $this->session->get('lname');

        $contentpayload = [];
        $contentdata=[];
        if ($content['messages'][0]['code'] == 0) {
        foreach ($content['response']['data'] as $contentdata) {
            $contentId = $contentdata['fieldData']['content_id'];
            $contentpayload[$contentId]['content-name'] = $contentdata['fieldData']['content_name'];
        }
        foreach ($contentdetails['response']['data'] as $contentdata) {
            $contentId = $contentdata['fieldData']['content_id'];
            $contentpayload[$contentId]['content-ID'] = $contentdata['fieldData']['content_id'];
            $contentpayload[$contentId]['content-photo'] = $contentdata['fieldData']['content_photo_url'];
            $contentpayload[$contentId]['content-type'] = $contentdata['fieldData']['content_type'];
            $contentpayload[$contentId]['content-year'] = $contentdata['fieldData']['content_year'];
        }
        $contentdata[0]['found-records']=$content['response']['dataInfo']['foundCount'];
        $contentdata[0]['total-records']=$content['response']['dataInfo']['totalRecordCount'];
        $contentdata[0]['search-string']= $searchQuery;
        return view('templates/header',array('userfname' => $userFirstName, 
        'userlname' => $userLastName)) 
        .view("content_search_page", array("contentpayload" => $contentpayload,
                                            "contentdata"=>$contentdata));
       
        }
        else
        {
            return redirect()->to('/login');
        }
        
    }
}
