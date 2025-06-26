<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CategorySectionData extends Model
{
    use HasFactory;

    protected $table = 'ri_category_section_data';

    protected $guarded = [];

    public function getImageAttribute($value)
    {
        $prefix = url('storage');
        if(!empty($value)){
            return $prefix.'/'. $value;
        }
    }
}
