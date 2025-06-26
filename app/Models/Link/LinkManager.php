<?php

namespace App\Models\Link;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LinkManager extends Model
{
    use HasFactory;

    protected $table = 'ri_links';

    protected $fillable = [
        'name',
        'url',
        'target',
        'group',
        'type',
        'collection_id',
        'status',
        'sort',
    ];

    public function linkGroup()
    {
        return $this->belongsTo(LinkGroup::class, 'group', 'code');
    }
}
