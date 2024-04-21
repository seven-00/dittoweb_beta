<?php

namespace App\Controllers;

use App\Models\ContentModel;

class Content extends BaseController
{
    public function index()
    {
        
        $model = new ContentModel();
        $token = $this->session->get('token');
        $resdata = $model->getContent($token);
        $imgdata = $model->getContentDetails($token);
       $contentpayload=[];
       foreach ($imgdata['response']['data'] as $photo) {
        $contentId = $photo['fieldData']['content_id'];
        $contentpayload[$contentId]['content-photo'][] = $photo['fieldData']['content_photo'];
       }
       foreach ($resdata['response']['data'] as $content) {
        $contentId = $content['fieldData']['content_id'];
        $contentpayload[$contentId]['content-name'][] = $content['fieldData']['content_name'];
       }
        
        $data =array(
            // "count"=>$resdata['response']['dataInfo']['foundCount'],
            "contentimage"=>$resdata['response']['data']
        );
        

        return view("content_page",array('contentpayload'=>$contentpayload));   
    }
}