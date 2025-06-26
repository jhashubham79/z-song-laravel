<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

class ApiController extends Controller
{

    protected function apiResponse($data = [], $message = '', $statusCode = 200, $success = true): JsonResponse
    {
        if ($success) {
            $message = $message ?: 'Success';
        } else {
            $success = false;
            $statusCode = $statusCode ?: 500;
            $message = $message ?: 'An error occurred';
        }

        if($success == true && ($statusCode == 200 || $statusCode == 201)){
            $sendData = [
                'success' => $success,
                'message' => $message,
                'data' => $data
            ];
        }else if($statusCode == 400){
            $sendData = [
                'success' => $success,
                'message' => $message,
                'errors' => $data
            ];
        }else{
            $sendData = [
                'success' => $success,
                'message' => $message,
            ];
        }

        return response()->json($sendData, $statusCode);
    }

    protected function tryCatch($callback)
    {
        try {
            return $callback();
        } catch (\Exception $e) {
            return $this->apiResponse('', 'Failed to process request.', 500, false);
        }
    }
}
