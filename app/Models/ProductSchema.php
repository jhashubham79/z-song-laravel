<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class ProductSchema extends Model
{
    use HasFactory;
   
    
    
    
    public $timestamps = false;
    protected $table='productschemas';
    
    protected $fillable = ['detail','ordering'];
   
   public function product()
    {
        return $this->belongsTo(Product::class,'category_id');
    }
   
}
