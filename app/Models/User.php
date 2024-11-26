<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    protected $table = 'users';
    protected $primaryKey = 'UserID';

    protected $fillable = [
        'Username',
        'Password',
        'RoleID',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class, 'RoleID', 'RoleID');
    }
}
