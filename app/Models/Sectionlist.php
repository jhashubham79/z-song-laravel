<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PageSection;

class Sectionlist extends Model
{
    use HasFactory;
   
    
    
    
    public $timestamps = false;
    protected $table='sectionlists';
    
    protected $fillable = ['title','thumb_image','thumb_alt','image','alt','content','ordering','sub_title','button_text','url','status','price','cost','file','accordion_one','accordion_content_one','accordion_two','accordion_content_two','accordion_three','accordion_content_three'];
   
   public function section()
    {
        return $this->belongsTo(PageSection::class,'category_id')->orderBy('ordering','ASC');
    }
     public function getImageAttribute($value)
    {
        $prefix = url('storage');
        if(!empty($value)){
            return $prefix.'/'. $value;
        }
    }
    
     public function getThumbImageAttribute($value)
    {
        $prefix = url('storage');
        if(!empty($value)){
            return $prefix.'/'. $value;
        }
    }
   
}
