<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $table = 'sales';
    protected $primaryKey = 'SaleID';

    protected $fillable = [
        'SaleDate',
        'PaymentType',
        'TotalAmount',
    ];

    // Casting for specific fields
    protected $casts = [
        'SaleDate' => 'datetime',
        'TotalAmount' => 'float',
    ];

    // Relationships
    public function salesDetails()
    {
        return $this->hasMany(SalesDetail::class, 'SaleID', 'SaleID');
    }
}
