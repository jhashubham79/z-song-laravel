<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Page;

class PageSchema extends Model
{
    use HasFactory;
   
    
    
    
    public $timestamps = false;
    protected $table='pageschemas';
    
    protected $fillable = ['detail','ordering'];
   
   public function page()
    {
        return $this->belongsTo(Page::class,'category_id');
    }
   
}
