<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'cart_id', 'user_id','address',
    ];

    public function user(){
        return $this->belongsToMany(User::class);
    }
    public function cart(){
        return $this->belongsToMany(Cart::class);
    }
}
