<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchemeDetailsMultiple extends Model
{
    use HasFactory;
    protected $table = "schema_details";
    public $timestamps = 'false';
    
    protected $guarded = [];
    
   
}