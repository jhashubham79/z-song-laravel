<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\BlogSchema;
class Blog extends Model
{
    use HasFactory;

    protected $table = 'ri_blogs';

    protected $fillable = [
        'title',
        'description',
        'content',
        'image',
        'alt_image',
        'status',
        'published_at',
        'sort',
        'meta_title',
        'meta_description',
        'meta_key',
        'og_image',
        'canonical_url'
    ];

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            $slug = Str::slug($model->title);

            $count = static::where('slug', $slug)->where('id', '!=', $model->id)->count();
            if ($count > 0) {
                $slug .= '-' . uniqid();
            }
            $model->slug = $slug;
        });
    }

    public function getImageAttribute($value)
    {
        $prefix = url('storage');
        if(!empty($value)){
            return $prefix.'/'. $value;
        }
    }
    
     public function getOgImageAttribute($value)
    {
        $prefix = url('storage');
        if(!empty($value)){
            return $prefix.'/'. $value;
        }
    }
    
     public function schema_details(){
        return $this->hasMany(BlogSchema::class,'category_id');
    }
}
