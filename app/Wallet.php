<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    public function users(){
    	return $this->hasMany('App\User');
    }
}
