<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use HasFactory;



    protected $fillable = [
        'name', 'password', 'email'
    ];


    public function pages(){
        return $this->hasMany('App\Models\Page');
    }

    public function roles(){
        return $this->belongsToMany('App\Models\Role');
    }

    public function hasAnyRole($roles){
        return null != $this->roles()->whereIn('name', $roles)->first();
    }

    public function hasRole($role){
        return null != $this->roles()->where('name', $role)->first();
    }
}
