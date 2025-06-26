<?php
// app/Models/Duo.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Duo extends Model
{
    protected $fillable = ['profile_one_id', 'profile_two_id'];

    public function profileOne()
    {
        return $this->belongsTo(Profile::class, 'profile_one_id');
    }

    public function profileTwo()
    {
        return $this->belongsTo(Profile::class, 'profile_two_id');
    }
}
