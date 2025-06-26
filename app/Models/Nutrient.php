<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Nutrient extends Model
{
    use HasFactory;
   
    
    
    
    public $timestamps = false;
    protected $table='nutrients';
    
    protected $fillable = ['title','subtitle','image','alt','ordering','status'];
   
   public function product()
    {
        return $this->belongsTo(Product::class,'category_id');
    }
    
     public function getIconAttribute($value)
    {
        $prefix = url('storage');
        if(!empty($value)){
            return $prefix.'/'. $value;
        }
    }
    
    public function getImageAttribute($value)
    {
        $prefix = url('storage');
        if(!empty($value)){
            return $prefix.'/'. $value;
        }
    }
   
}
