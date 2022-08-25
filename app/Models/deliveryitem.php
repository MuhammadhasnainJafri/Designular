<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class deliveryitem extends Model
{
    use HasFactory;
    protected $guarded = [];  
    public function deliverynotes()
    {
        return $this->belongsTo(deliverynote::class);
    }

}
