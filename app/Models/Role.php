<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $table = 'roles';
    protected $primaryKey = 'RoleID';

    protected $guarded = ['RoleID'];

    protected $fillable = [
        'RoleName',
    ];

    // Relationships
    public function users()
    {
        return $this->hasMany(User::class, 'RoleID', 'RoleID');
    }
}
