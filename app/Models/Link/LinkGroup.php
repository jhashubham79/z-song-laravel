<?php

namespace App\Models\Link;

use App\Models\StoreInformationData;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LinkGroup extends Model
{
    use HasFactory;

    protected $table = 'ri_link_group';

    protected $fillable = [
        'code',
        'name',
        'sort',
    ];

    public function links()
    {
        return $this->hasMany(LinkManager::class, 'group', 'code');
    }

    public function social_media()
    {
        return $this->hasMany(StoreInformationData::class,'id', 'store_info_id');
    }
}
