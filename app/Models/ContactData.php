<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactData extends Model
{
    use HasFactory;

    protected $table = 'contactdata';

    protected $fillable = [
        'full_name',
        'phone',
        'email',
        'looking_for',
        'message'
    ];
}
