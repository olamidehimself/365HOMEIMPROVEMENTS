<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    //Payment is same as Transaction
    public function plan()
    {
        return $this->belongsTo('App\Plan');
    }
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
