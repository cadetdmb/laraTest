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
        'name', 'email', 'password', 'role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function isAdmin()
    {
      if($this->role=='admin')
        return true;
      return false;
    }
    public function isSuperAdmin()
    {
      if($this->role=='superadmin')
        return true;
      return false;
    }
    public function isManager()
    {
      if($this->role=='manager')
        return true;
      return false;
    }
    public function isUser()
    {
      if($this->role=='user')
        return true;
      return false;
    }
}
