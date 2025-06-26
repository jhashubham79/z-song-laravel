<?php

namespace App\Models;

use App\Models\StoreInformation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StoreInformationData extends Model
{
    use HasFactory;

    protected $table = 'ri_store_information_data';

    protected $fillable = [
        'store_info_id',
        'platform',
        'link',
        'icon'
    ];

    public function getIconAttribute($value)
    {
        $prefix = url('storage');
        if(!empty($value)){
            return $prefix.'/'. $value;
        }
    }

    public function store_information()
    {
        return $this->belongsTo(StoreInformation::class,'id');
    }

}
