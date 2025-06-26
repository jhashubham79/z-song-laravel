<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CategorySection extends Model
{
    use HasFactory;

    protected $table = 'ri_category_sections';

    protected $guarded = [];


    protected static function boot()
    {
        parent::boot();

        static::creating(function ($riPage) {
            $riPage->api_endpoint = str_replace('-', '_', Str::slug($riPage->type));
        });

    }

    public function with_image_data()
    {
        return $this->hasMany(CategorySectionData::class,'category_sections_id');
    }

    public function getImageAttribute($value)
    {
        $prefix = url('storage');
        if(!empty($value)){
            return $prefix.'/'. $value;
        }
    }

}
