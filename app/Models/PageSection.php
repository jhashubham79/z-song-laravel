<?php

namespace App\Models;

use Illuminate\Support\Str;
use App\Models\PageSectionData;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Gallery;
use App\Models\Sectionlist;
class PageSection extends Model
{
    use HasFactory;

    protected $table = 'ri_page_sections';

    protected $guarded = [];

   
     public function gallery()
    {
        return $this->hasMany(Gallery::class,'category_id');
    }
   
   public function section_list()
    {
        return $this->hasMany(Sectionlist::class,'category_id')->orderBy('ordering',"ASC");
    }
    

    public function contact_data()
    {
        return $this->hasMany(PageSectionData::class,'page_sections_id');
    }
    public function getImageAttribute($value)
    {
        $prefix = url('storage');
        if(!empty($value)){
            return $prefix.'/'. $value;
        }
    }
}
