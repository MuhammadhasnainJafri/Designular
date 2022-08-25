<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class deliverynote extends Model
{
    use HasFactory;
    protected $guarded = [];  
    
    public function deliveryitems()
    {
        return $this->hasMany(deliveryitem::class);
    }
    public function orderdDate($value){
    //     $this->attributes['orderdDate']=Carbon::createFromFormat('y-m-d',$value)->format('d-m-Y');
    //     $this->attributes['deliveryDate']=Carbon::createFromFormat('y-m-d',$value)->format('d-m-Y');
     }
}
