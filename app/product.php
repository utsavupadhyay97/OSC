<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable = [
        'user_id','photo','name','description','price','unit_in_stock'

    ];

    public function user(){
        return $this->belongsTo('App\user');
    }

    // public function photos()
    // {
    //     return $this->hasMany('App\photo');
    // }
}