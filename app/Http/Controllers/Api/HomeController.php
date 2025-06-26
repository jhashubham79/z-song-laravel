<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\PageSection;
use App\Models\Gallery;
use App\Models\Sectionlist;
use App\Models\PageSchema;
use App\Models\Header;

use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index($slug)
    {
        $page = Page::select('id','title','alias','api_endpoint','bannerheading','bannerContent','redirectLink','image','alt_image','keyword','status')->where('api_endpoint', $slug)->where('status', 1)->first();
        $seo = Page::select('id','meta_title','meta_description','meta_key','og_image','canonical_url')->with('schema_details')->where('api_endpoint', $slug)->where('status', 1)->first();

       
        $sections = PageSection::with('gallery','section_list')
        ->where('page_id', $page->id)
        ->orderBy('ordering')
        ->select('id', 'api_key', 'page_id','type','title','sub_title','image','alt','introtext','description','button_text','url','ordering')
        ->get();
        $sectionData = $sections->mapWithKeys(function ($section) {
            return [$section->api_key => $section];
        });
        
        
        
        $data = [
            'page' => $page,
            'pageSections' => $sectionData,
            'seo'=>$seo
            ];
        // if($slug == 'about_us'){
        //     sleep(60);
        // }

        return response()->json([
            'base_path' => url('storage/'),
            'data'=>$data
            
        ], 200);
    }
    
    
    
    
    
   public function _headermenu()
{
    // Fetch all headers that have status 1
    $headers = Header::select('id','name','url','target','parent','type','sort','status')->where('status', 1)->get();
    
    // Initialize an array to hold the headers and their corresponding subheaders
    $headerData = [];
    
    // Loop through each header
    foreach($headers as $header){
        // Fetch subheaders for the current header
        $subHeaders = Header::select('id','name','url','target','parent','type','sort','status')->where('parent', $header->id)->where('status', 1)->get();
        
        // Store the header and its subheaders in the headerData array
        $headerData[] = [
            'menu' => $header,
            'submenu' => $subHeaders
        ];
    }
    
    // Prepare the response data
    $responseData = [
        'headerData' => $headerData
    ];

    // Return the response as JSON
    return response()->json([
        'data' => $responseData
    ], 200);
}
//   public function blank_api()
// {
//     // Return the response as JSON
//     return response()->json([
//         'data' => 'Data get'
//     ], 200);
// }
    
    
    
}    