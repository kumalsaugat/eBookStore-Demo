<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as AuthenticatableUser;

class User extends AuthenticatableUser implements Authenticatable
{
    use HasFactory;
    protected $table = 'users';
    protected $fillable = [
        'role_id',
        'name',
        'email',
        'password',
    ];

    public function isAdmin()
    {
        return $this->role_id == 1;
    }
    public function isUser()
    {
        return $this->role_id == 2;
    }
}
