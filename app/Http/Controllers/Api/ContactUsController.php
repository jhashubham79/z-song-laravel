<?php

namespace App\Http\Controllers\Api;
use App\Models\ContactData;
use App\Models\Page;
use App\Models\OurClinics;
use App\Models\PageSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Validator;
use App\Mail\ContactMail;
use Mail;


class ContactUsController extends ApiController
{
    public function getContactUsPage(Request $request) {
       
            
                $page=  Page::where('api_endpoint','contact-us')->first();
           
               
            $section = PageSection::with('gallery', 'section_list')->where('page_id',$page->id)->get();
             $sectionData = $section->mapWithKeys(function ($section) {
            return [$section->api_key => $section];
        });
        
           $seo = Page::select('id','meta_title','meta_description','meta_key','og_image','canonical_url')->with('schema_details')->where('api_endpoint','contact-us')->where('status', 1)->first();
          $our_cli= OurClinics::get();
            // $ourClinics = Cache::remember('contact_list', now()->addMinutes(30), function () {
            //     return OurClinics::get();
            // });

            // if ($ourClinics->isEmpty()) {
            //     return $this->apiResponse('', 'No Clinics found.', 404, false);
            // }
            
            

 $data = [
            'page' => $page,
            'pageSections' => $sectionData,
            'our_clic'=>$our_cli,
            'seo'=>$seo
            ];
               
           return response()->json([
            'base_path' => url('storage/'),
            'data'=>$data,
            
            
        ], 200);
       
    }
    
    
    
    
    public function storecontact(Request $request)
    {
        
        Mail::send(new ContactMail($request));
        $validator = Validator::make($request->all(), [
            'full_name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'looking_for'=> 'string',
            'message' => 'string',
        ]);

        if ($validator->fails()) {
            return $this->apiResponse($validator->errors(), 'Parameters missing or invalid.', 400);
        }

        $validatedData = $validator->validated();

        

        return $this->tryCatch(function () use ($validatedData){
            $enquiry = ContactData::create($validatedData);
            
            
            
           
            
            //Mail::send(new ContactMail($validatedData));
             return $this->apiResponse($enquiry, 'successfully.',201);
            
           
        });
    }
    
    
    
    
    
    
    
    
    
}
