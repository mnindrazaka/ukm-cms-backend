<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticateable;

class Admin extends Authenticateable
{
    protected $table = "admin";
    protected $primaryKey = "id_admin";
    protected $fillable = ["username", "password"];

    function setRememberTokenAttribute($value)
    {
        return;
    }
}