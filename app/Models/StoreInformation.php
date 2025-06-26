<?php

namespace App\Models;

use App\Models\StoreInformationData;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StoreInformation extends Model
{
    use HasFactory;

    protected $table = 'ri_store_information';

    protected $fillable = [
        'name',
        'logo',
        'favicon',
        'location',
        'description',
        'telephone',
        'mobile',
        'email',
        'keywords',
        'opening_hours'
    ];

    public function social_media()
    {
        return $this->hasMany(StoreInformationData::class,'store_info_id');
    }

    public function getlogoAttribute($value)
    {
        $prefix = url('storage');
        if(!empty($value)){
            return $prefix.'/'. $value;
        }
    }

    public function getFaviconAttribute($value)
    {
        $prefix = url('storage');
        if(!empty($value)){
            return $prefix.'/'. $value;
        }
    }

}
