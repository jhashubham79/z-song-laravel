<?php

namespace App\Http\Controllers\Api;

use App\Models\Enquire;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Validator;

class EnquireController extends ApiController
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'full_name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        if ($validator->fails()) {
            return $this->apiResponse($validator->errors(), 'Parameters missing or invalid.', 400);
        }

        $validatedData = $validator->validated();

        $existingEnquiry = Enquire::where('email', $validatedData['email'])->where('message', $validatedData['message'])->first();
        if ($existingEnquiry) {
            return $this->apiResponse([], 'Duplicate entry.', 409, false);
        }

        return $this->tryCatch(function () use ($validatedData){
            $enquiry = Enquire::create($validatedData);
            return $this->apiResponse($enquiry, 'Enquiry created successfully.',201);
        });
    }
}
