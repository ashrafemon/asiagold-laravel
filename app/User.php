<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'username', 'phone', 'wallet_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role(){
        return $this->belongsTo('App\Role');
    }

    public function hasRole($role){
        if($this->role()->where('name', $role)->first()){
            return true;
        }
        return false;
    }

    public function wallet(){
        return $this->belongsTo('App\Wallet');
    }

    public function deposits(){
        return $this->hasMany('App\Deposit');
    }

    public function withdraws(){
        return $this->hasMany('App\Withdraw');
    }

    public function buygolds(){
        return $this->hasMany('App\BuyGold');
    }

    public function sellgolds(){
        return $this->hasMany('App\BuyGold');
    }

    public function goldshippings(){
        return $this->hasMany('App\GoldShipping');
    }

    public function goldloans(){
        return $this->hasMany('App\GoldLoan');
    }

    public function ordercards(){
        return $this->hasMany('App\OrderCard');
    }

    public function notifications(){
        return $this->hasMany('App\Notification');
    }

    public function creditcards(){
        return $this->hasMany('App\CreditCard');
    }

    public function billingaddresses(){
        return $this->hasMany('App\BillingAddress');
    }

    public function shippingaddresses(){
        return $this->hasMany('App\ShippingAddress');
    }

}
