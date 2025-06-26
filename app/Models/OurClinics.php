<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurClinics extends Model
{
    use HasFactory;

    protected $table = 'ri_our_clinics';

    protected $fillable = [
        'name',
        'location',
        'phone',
        'email',
        'image',
        'open_times',
        'close_times',
        'g_map_location',
        'status'
    ];

    public function getImageAttribute($value)
    {
        $prefix = url('storage');
        if(!empty($value)){
            return $prefix.'/'. $value;
        }
    }
}
