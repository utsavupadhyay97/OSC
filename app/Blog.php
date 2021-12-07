<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'user_id','photo','title','description'

    ];

    public function user(){
        return $this->belongsTo('App\user');
    }


}
