<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Overview extends Model
{
    use HasFactory;
   
    
    
    
    public $timestamps = false;
    protected $table='overviews';
    
    protected $fillable = ['title','subtitle','image','alt','ordering','status'];
   
   public function product()
    {
        return $this->belongsTo(Product::class,'category_id');
    }
   
    public function getImageAttribute($value)
    {
        $prefix = url('storage');
        if(!empty($value)){
            return $prefix.'/'. $value;
        }
    }
}
