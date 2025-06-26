<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PageSection;

class Gallery extends Model
{
    use HasFactory;
   
    
    
    
    public $timestamps = false;
    protected $table='gallerys';
    
    protected $fillable = ['title','image','alt','ordering','status','sub_title','url'];
   
   public function section()
    {
        return $this->belongsTo(PageSection::class,'category_id');
    }
      public function getImageAttribute($value)
    {
        $prefix = url('storage');
        if(!empty($value)){
            return $prefix.'/'. $value;
        }
    }
   
}
