<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donations extends Model
{
    use HasFactory;

    protected $table = 'donations'; 
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
