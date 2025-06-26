<?php

namespace App\Http\Controllers\Api;

use App\Models\Page;
use App\Models\FAQ\Type as FaqType;
use Illuminate\Support\Facades\Cache;
use App\Http\Controllers\ApiController;

class FaqController extends ApiController
{
    public function getFaqList() {
        Cache::forget('faq_list');
        return $this->tryCatch(function () {
            $pageSections = [
                'banner' => Page::where('api_endpoint','faq')->first() ?? null
            ];

           $faqs = Cache::remember('faq_list', now()->addMinutes(30), function () {
    return FaqType::with(['faqs' => function ($query) {
        $query->orderBy('created_at', 'ASC')
              ->select('faq_type_id', 'question', 'answer');
    }])->orderBy('order', 'ASC') // Assuming 'order' is the column you want to sort by
      ->get(['id', 'name']);
});


            $types = FaqType::orderBy('order','ASC')->get();

            if ($faqs->isEmpty()) {
                return $this->apiResponse('', 'No faqs found.', 404, false);
            }
            
            $seo = Page::select('id','meta_title','meta_description','meta_key','og_image','canonical_url')->with('schema_details')->where('api_endpoint','faq')->first();

            
            return $this->apiResponse(['types'=> $types,'faqs' => $faqs, 'pageSections' => $pageSections,'seo'=>$seo], 'List of faqs.');
        });
    }
}
