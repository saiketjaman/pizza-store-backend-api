<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title','price','description', 'image'
    ];

    public function orders(){
        return $this->belongsToMany(Order::class);
    }
}
