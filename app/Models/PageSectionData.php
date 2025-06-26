<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageSectionData extends Model
{
    use HasFactory;

    protected $table = 'ri_page_section_data';

    protected $guarded = [];

    public function getIconAttribute($value)
    {
        $prefix = url('storage');
        if(!empty($value)){
            return $prefix.'/'. $value;
        }
    }
}
