<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductOfProduct extends Model
{
    use HasFactory;

    protected $table = 'ri_product_of_products';

    protected $hidden = ['created_at', 'updated_at'];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($riProduct) {
            if (empty($riProduct->alias)) {
                $riProduct->alias = Str::slug($riProduct->name);
            }
        });

        static::updating(function ($riProduct) {
            if (empty($riProduct->alias)) {
                $riProduct->alias = Str::slug($riProduct->name);
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
