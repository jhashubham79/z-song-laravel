<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profile extends Model
{
    use HasFactory;

    protected $table = 'profiles';

 protected $fillable = [
        'thumbnail',
        'name',
        'email',
        'slug',
        'hair',
        'eyes',
        'nationality',
        'main_location',
        'bust',
        'dress',
        'orientation',
        'languages',
        'tags',
        'description',
        'whatsapp',
        'telegram',
        'starting_rate',
        'incall_half_hour',
        'incall_1_hour',
        'incall_2_hour',
        'incall_3_hour',
        'incall_3_hour_dinner_date',
        'incall_overnight_9h',
        'incall_overnight_12h',
        'outcall_half_hour',
        'outcall_1_hour',
        'outcall_2_hour',
        'outcall_3_hour',
        'outcall_3_hour_dinner_date',
        'outcall_overnight_9h',
        'outcall_overnight_12h',
        'gallery_images',
        'gallery_videos',
        'education',
        'status',
    ];

    protected $casts = [
        'languages' => 'array',
        'tags' => 'array',
        'gallery_images' => 'array',
        'gallery_videos' => 'array',
        'starting_rate' => 'decimal:2',
        'status' => 'boolean',
    ];

    /**
     * The locations that belong to the profile.
     */
    public function locations()
    {
        return $this->belongsToMany(Location::class, 'location_profile');
    }

    /**
     * The categories that belong to the profile.
     */
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_profile');
    }


    protected static function boot()
    {
        parent::boot();

        static::creating(function ($riCategory) {
            if (empty($riCategory->slug)) {
                $riCategory->slug = Str::slug($riCategory->name);
            }
        });

        static::updating(function ($riCategory) {
            if (empty($riCategory->slug)) {
                $riCategory->slug = Str::slug($riCategory->name);
            }
        });
    }
}