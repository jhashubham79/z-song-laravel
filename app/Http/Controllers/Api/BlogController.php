<?php

namespace App\Http\Controllers\Api;

use App\Models\Blog;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Request as Req;

class BlogController extends ApiController
{
    public function getBlogList() {
        Cache::forget('blog_list');
        return $this->tryCatch(function () {
            $pageSections = [
                'banner' => Page::where('api_endpoint','blog')->first() ?? null
            ];
            $blogs = Cache::remember('blog_list', now()->addMinutes(30), function () {
                return Blog::where('status', 'published')
                    ->orderBy('sort', 'ASC')
                    ->select('id', 'title', 'image', 'slug', 'description')
                    ->paginate(Req::get('perPage', 4));
            });

            if ($blogs->isEmpty()) {
                return $this->apiResponse('', 'No blogs found.', 404, false);
            }

            return $this->apiResponse(['blogs' => $blogs, 'pageSections' => $pageSections], 'List of blogs.');
        });
    }

    public function getBlogBySlug(Request $request, $slug) {
        return $this->tryCatch(function () use ($slug) {
            $blog = Blog::select('title', 'slug', 'description', 'image', 'status', 'published_at')
                    ->where('slug', $slug)
                    ->where('status','published')
                    ->first();

            $relatedBlogs = Blog::select('title','image', 'slug')
                    ->where('id', '!=', $blog->id)
                    ->where('status', 'published')
                    ->where(function ($query) use ($blog) {
                        $keywords = explode(',', $blog->keyword);
                        foreach ($keywords as $keyword) {
                            $query->orWhere('keyword', 'like', '%' . trim($keyword) . '%');
                        }
                    })
                    ->limit(5)
                    ->get();

            $latestBlogs = Blog::select('title', 'slug', 'image', 'published_at')
                    ->where('id', '!=', $blog->id)
                    ->where('status', 'published')
                    ->latest('published_at')
                    ->limit(3)
                    ->get();
            
            
            $seo = Blog::select('id','meta_title','meta_description','meta_key','og_image','canonical_url')->with('schema_details')->where('slug', $slug)->where('status', 'published')->first();
            
            
            if (!$blog) {
                return $this->apiResponse('', 'No blogs found.', 404, false);
            }

            return $this->apiResponse(['blog' => $blog, 'seo' => $seo, 'related_blogs' => $relatedBlogs, 'latest_blogs' => $latestBlogs], 'blog detail.');
        });
    }
}
