<?php

namespace App\Http\Controllers\Api;
use App\Models\FranchiseForm;
use App\Models\Page;
use App\Models\OurClinics;
use App\Models\CareerForm;
use App\Models\PageSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Validator;

class CareerFormController extends ApiController
{
    public function careerform(Request $request)
    {
        
        // $validator = Validator::make($request->all(), [
        //     'full_name' => 'required|string|max:255',
        //     'phone' => 'required|string|max:10|regex:/^[0-9]{10}$/',
        //     'email' => 'required|email|max:255',
        //     'location'=> 'required|string',
        //     'department' => 'required|string',
        //     'position' => 'required|string',
        //     'portfolio_link' => 'required|string',
        //     'resume' => 'required|file|max:5120'
        // ]);

        // if ($validator->fails()) {
        //     return $this->apiResponse($validator->errors(), 'Parameters missing or invalid.', 400);
        // }
        
        $careerForm = new CareerForm;

        $careerForm->full_name = $request->input('full_name');
        $careerForm->phone = $request->input('phone');
        $careerForm->email = $request->input('email');
        $careerForm->location = $request->input('location');
        $careerForm->department = $request->input('department');
        $careerForm->position = $request->input('position');
        $careerForm->portfolio_link = $request->input('portfolio_link');
        
        
        
        
         $resumeFileName = $request->file('resume')->getClientOriginalName();
         
         //$path = $resumeFileName->store(public_path('storage/resume'));
         $request->file('resume')->move(public_path('storage/resume'), $resumeFileName);

    
        // $request->file('resume')->move(public_path('storage/resume'), $resumeFileName);
        $careerForm->resume = 'resume/' . $resumeFileName;
        $insert = $careerForm->save();
        
        if($insert){
            return $this->apiResponse($insert, 'successfully.',201);
        }
        

    }
    
    
//     public function careerform(Request $request)
// {
//     // Validate the incoming request data
//     $validatedData = $request->validate([
//         'full_name' => 'required|string',
//         'phone' => 'required|string',
//         'email' => 'required|email',
//         'location' => 'required|string',
//         'department' => 'required|string',
//         'position' => 'required|string',
//         'portfolio_link' => 'nullable|string',
//         'resume' => 'required', // Adjust mime types as needed
//     ]);

//     // Process the file upload
// //   if ($request->hasFile('resume')) {
//         $resumeFileName = $request->file('resume');
        
//         $request->file('resume')->move(public_path('storage/resume'), $resumeFileName);
//         $resumePath = 'resume/' . $resumeFileName;

//         // Now $resumePath contains the path where the resume file is saved
//     // }


//     // Create a new CareerForm instance and fill it with the validated data
//     $careerForm = new CareerForm($validatedData);

//     // Save the CareerForm instance to the database
//     $careerForm->save();

//     // Return a success response
//     return response()->json(['message' => 'Form submitted successfully'], 201);
// }
    
    
     public function franchiseForm(Request $request)
    {
        // $validator = Validator::make($request->all(), [
        //     'full_name' => 'required|string|max:255',
        //     'phone' => 'required|string|max:10|regex:/^[0-9]{10}$/',
        //     'email' => 'required|email|max:255',
        //     'company_name'=> 'required|string',
        //     'company_address' => 'required|string',
        //     'learn_about_reviv' => 'required|string',
        //     'previously_visited' => 'required|string',
        //     'potential_address' => 'required|string',
        //     'reviv_services' => 'required|string',
        //     'nda_file' => 'required|file|max:5120',
        // ]);

        // if ($validator->fails()) {
        //     return $this->apiResponse($validator->errors(), 'Parameters missing or invalid.', 400);
        // }
        
        $franchiseForm = new FranchiseForm;

      
        $franchiseForm->full_name = $request->input('full_name');
        $franchiseForm->phone = $request->input('phone');
        $franchiseForm->email = $request->input('email');
        $franchiseForm->company_name = $request->input('company_name');
        $franchiseForm->company_address = $request->input('company_address');
        $franchiseForm->learn_about_reviv = $request->input('learn_about_reviv');
        $franchiseForm->previously_visited = $request->input('previously_visited');
        $franchiseForm->potential_address = $request->input('potential_address');
        $franchiseForm->reviv_services = $request->input('reviv_services');
        $resumeFileName = $request->file('nda_file')->getClientOriginalName();
        $request->file('nda_file')->move(public_path('storage/ndafile'), $resumeFileName);
        $franchiseForm->nda_file = 'ndafile/' . $resumeFileName;
        $insert = $franchiseForm->save();

    
        if ($insert) {
        
           // Mail::to($franchiseForm->email)->send(new FranchiseFormSubmitted($franchiseForm));
        

          
            return $this->apiResponse($insert, 'successfully.',201);
        } else {
          
             return $this->apiResponse($insert, 'Failed to submit form.',500);
        }
    


        

    }
    
    
    
    
    
}
