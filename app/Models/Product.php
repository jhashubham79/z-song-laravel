<?php

namespace App\Models;

use Illuminate\Support\Str;
use App\Models\ProductOfProduct;
use App\Models\ProductSchema;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $table = 'ri_products';

    protected $hidden = ['created_at', 'updated_at'];
   
   
    protected $casts = [
        'related_product' => 'array', 
    ];
   
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($riProduct) {
            if (empty($riProduct->alias)) {
                $riProduct->alias = Str::slug($riProduct->name);
            }
        });

        static::updating(function ($riProduct) {
            if (empty($riProduct->alias)) {
                $riProduct->alias = Str::slug($riProduct->name);
            }
        });
    }

    public function getImageAttribute($value)
    {
        $prefix = url('storage');
        if(!empty($value)){
            return $prefix.'/'. $value;
        }
    }
    public function getBannerImageAttribute($value)
    {
        $prefix = url('storage');
        if(!empty($value)){
            return $prefix.'/'. $value;
        }
    }
    
    public function getContactImageAttribute($value)
    {
        $prefix = url('storage');
        if(!empty($value)){
            return $prefix.'/'. $value;
        }
    }
    
    
     public function getNutrientsimageAttribute($value)
    {
        $prefix = url('storage');
        if(!empty($value)){
            return $prefix.'/'. $value;
        }
    }
    
    
    
    

    public function productsOfProduct()
    {
        return $this->hasMany(ProductOfProduct::class, 'product_id', 'id')->orderBy('sort','ASC');
    }
    
    
    
    
    public function overview()
    {
        return $this->hasMany(Overview::class,'category_id');
    }
    
    
    public function nutrientsdetail()
    {
        return $this->hasMany(Nutrientsdetail::class,'category_id');
    }
    
    
    public function nutrient()
    {
        return $this->hasMany(Nutrient::class,'category_id');
    }
    
    
    public function schema_details(){
        return $this->hasMany(ProductSchema::class,'category_id');
    }
    
    

}
