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
        'CustomerID',
        'PaymentType',
        'TotalAmount',
    ];

    // Casting for specific fields
    protected $casts = [
        'SaleDate' => 'datetime',
        'TotalAmount' => 'float',
    ];

    //

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'CustomerID', 'CustomerID');
    }

    public function salesDetails()
    {
        return $this->hasMany(SalesDetail::class, 'SaleID', 'SaleID');
    }
}
