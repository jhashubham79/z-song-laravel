<?php

namespace App\Http\Controllers\Api;

use App\Models\Page;
use App\Models\Product;
use App\Models\Category;
use App\Models\Nutrient;
use App\Models\Overview;
use App\Models\CategorySection;
use Illuminate\Support\Facades\Cache;
use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Request;

class CategoryAndProductController extends ApiController
{
    // Cache::forget('active_categories');
    public function getAllActiveCategories()
    {
        return $this->tryCatch(function (){
            $categories = Cache::remember('active_categories', now()->addMinutes(30), function () {
                return Category::select('id','title','alias','keyword','description','image')->where('status', 1)->orderBy('sort', 'ASC')->get();
            });
            return $this->apiResponse($categories, 'All Active Category List.');
        });
    }


    public function getAllProductByCategorieAlias(Request $request,$alias)
    {
        return $this->tryCatch(function () use ($alias) {
            $categorie = Category::where('alias', $alias)->first();
            if (!$categorie) {
                return $this->apiResponse('','Wrong Url.', 404, '');
            }

            $pageSections = [
                'banner' => Page::where('api_endpoint','iv-therapies')->first() ?? null
            ];

            $pagesec = CategorySection::where('category_id',$categorie->id)->with('with_image_data')->get();
            foreach($pagesec as $sec){
                $pageSections[$sec->api_endpoint] = $sec;
            }

            $products = Product::where('category_id', $categorie->id)->where('status', 1)->with('productsOfProduct')->get();

            if ($products->isEmpty()) {
                return $this->apiResponse('','Product not found.', 404, '');
            }
            return $this->apiResponse(['products' => $products, 'pageSections' => $pageSections], 'Product List by alias.');
        });
    }


    public function getProductByAlias(Request $request,$alias)
    {
       

            $product = Product::select('id', 'name', 'alias', 'price', 
            'image', 'cost', 'quantity', 'banner_heading', 'banner_subheading', 'banner_image',
            'alt', 'nutrientstitle', 'nutrientsimage', 'nutrientsalt', 'nutrientscontent', 'doctar_name', 'doctar_deg',
            'suggestion','related_product' )
            ->where('alias', $alias)->where('status', 1)->with('productsOfProduct')->first();
            
            $data = Nutrient::where('category_id', $product->id)->where('status', 1)->get(); 
             $data1 = Overview::where('category_id', $product->id)->where('status', 1)->get();
             
             
             $nutrient_heading = Product::select('key_nutrient_heading')->where('alias', $alias)->where('status', 1)->first();
             
              $overview_heading = Product::select('overview_heading')->where('alias', $alias)->where('status', 1)->first();
             
             
             $nutrientMainData = [
                        "heading"=>$nutrient_heading,
                        "items"=>$data
                 
                 ];
                 
                 
                  $overviewMainData = [
                        "heading"=>$overview_heading,
                        "items"=>$data1
                 
                 ];
             
          
           
           
           
           
            $product_related_heading = Product::select('related_product_heading','related_product_sub_heading')->where('alias', $alias)->where('status', 1)->first();
            
           $product_related = Product::select('id', 'related_product_one_title','related_product_one_sub_title', 'related_product_one_groupcode', 'related_product_one_description', 'related_product_one_url','related_product_two_title','related_product_two_sub_title', 'related_product_two_groupcode', 'related_product_two_description', 'related_product_two_url')
            ->where('alias', $alias)
            ->where('status', 1)
            ->get();
             
             
             
             $relatedMainData = [
                        "heading"=>$product_related_heading,
                        "items"=>$product_related
                 
                 ];
              
            
            
            $product_contact = Product::select('contact_heading','contact_sub_heading','contact_number','contact_email','contact_image','contact_content','button_text','url')->where('alias', $alias)->where('status', 1)->first();
            
            $seo = Product::select('id','meta_title','meta_description','meta_key','og_image','canonical_url')->with('schema_details')->where('alias', $alias)->where('status', 1)->first();
            
            if (!$product) {
                return $this->apiResponse('', 'Product not found.', 404, false);
            }
             
             
             $data = [
                 'product'=>$product,
            'nutrient' => $nutrientMainData,
            'overview' => $overviewMainData,
            'related_product' => $relatedMainData,
            'product_contact' => $product_contact,
            'seo'=> $seo,
                 ];
             
            return response()->json(
                [
                    
            'base_path' => url('storage/'),
           'product'=>$product,
            'nutrient' => $nutrientMainData,
            'overview' => $overviewMainData,
            'related_product' => $relatedMainData,
            'product_contact' => $product_contact,
            'seo'=> $seo,
            
        ], 200);
    
       
    }
}
