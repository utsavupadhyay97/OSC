<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','active','role_id'
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
        'is_admin' => 'boolean',
    ];


    // public function role(){
    //     return $this->belongsTo('App\Role');
    // }

    public function role(){
        return $this->belongsTo('App\Role');
    }

    public function orders(){
        return $this->hasMany('App\Order');
    }

    public function isAdmin(){
        if($this->role->name == "admin"){
            return true;
        }
        return false;
    }

    public function iscustomer(){
        if($this->role->name == "customer"){
            return redirect('/');
        }
        return false;
    }
   


//     public function isAdmin()
// {
//     return $this->admin; // this looks for an admin column in your users table
// }

}
