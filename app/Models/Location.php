<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Location extends Model
{
    use HasFactory;

    protected $table = 'locations';

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($riCategory) {
            if (empty($riCategory->slug)) {
                $riCategory->alias = Str::slug($riCategory->title);
            }
        });

        static::updating(function ($riCategory) {
            if (empty($riCategory->slug)) {
                $riCategory->alias = Str::slug($riCategory->title);
            }
        });
    }

}
