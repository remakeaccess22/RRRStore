<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers';
    protected $primaryKey = 'CustomerID';
    public $incrementing = true;
    protected $keyType = 'int';
    protected $fillable = [
        'CustomerName',
        'ContactInfo',
    ];

    public function sales()
    {
        return $this->hasMany(Sale::class, 'CustomerID', 'CustomerID');
    }
}
