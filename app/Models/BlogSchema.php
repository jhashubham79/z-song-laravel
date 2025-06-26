<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Blog;

class BlogSchema extends Model
{
    use HasFactory;
   
    
    
    
    public $timestamps = false;
    protected $table='blogschemas';
    
    protected $fillable = ['detail','ordering'];
   
   public function page()
    {
        return $this->belongsTo(Blog::class,'category_id');
    }
   
}
