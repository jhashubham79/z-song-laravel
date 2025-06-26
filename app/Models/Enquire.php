<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enquire extends Model
{
    use HasFactory;

    protected $table = 'ri_enquire';

    protected $fillable = [
        'full_name',
        'phone',
        'email',
        'message'
    ];
}
