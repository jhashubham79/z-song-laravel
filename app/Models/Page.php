<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\PageSchema;
class Page extends Model
{
    use HasFactory;

    protected $table = 'ri_pages';

    // protected $fillable = [
    //     'title',
    //     'alias',
    //     'bannerheading',
    //     'bannerContent',
    //     'redirectLink',
    //     'image',
    //     'alt_image',
    //     'keyword'
    // ];


 public function schema_details(){
        return $this->hasMany(PageSchema::class,'category_id');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($riPage) {
            $riPage->api_endpoint = Str::slug($riPage->title);
        });

        static::creating(function ($riPage) {
            if (empty($riPage->alias)) {
                $riPage->alias = Str::slug($riPage->title);
            }
        });

        static::updating(function ($riPage) {
            if (empty($riPage->alias)) {
                $riPage->alias = Str::slug($riPage->title);
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
}
