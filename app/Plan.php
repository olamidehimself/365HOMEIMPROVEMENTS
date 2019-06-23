<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    //Plan is QR code
    public function payments()
    {
        return $this->hasMany('App\Payment');
    }
    
    
}
