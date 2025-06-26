<?php

namespace App\Models\FAQ;

use App\Models\FAQ\Faq;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Type extends Model
{
    use HasFactory;

    protected $table = 'ri_faq_types';

    public function faqs()
    {
        return $this->hasMany(Faq::class, 'faq_type_id');
    }
}
