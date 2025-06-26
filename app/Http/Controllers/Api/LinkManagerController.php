<?php

namespace App\Http\Controllers\Api;

use App\Models\Link\LinkGroup;
use App\Models\StoreInformation;

use Illuminate\Support\Facades\Cache;
use App\Http\Controllers\ApiController;


class LinkManagerController extends ApiController
{
    public function getLinksByGroupAndSort()
    {
        return $this->tryCatch(function () {
            Cache::forget('link_groups');
            $linkGroups = Cache::remember('link_groups', now()->addMinutes(30), function () {
                return LinkGroup::with(['links' => function ($query) {
                    $query->where('status', 1)
                          ->orderBy('sort', 'ASC')
                          ->select('name', 'url', 'target', 'group', 'type', 'collection_id', 'status', 'sort');
                }])
                ->orderBy('sort', 'ASC')
                ->get(['name', 'code', 'type'])
                ->groupBy('type');
            });

            $linkGroups['storeInformation'] = StoreInformation::with('social_media')->latest()->first() ?? null;

            if ($linkGroups->isEmpty()) {
                return $this->apiResponse('', 'Links not found.', 404, false);
            }

            return $this->apiResponse($linkGroups , 'All Links.');
        });
    }
}
