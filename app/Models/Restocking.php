<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restocking extends Model
{
    use HasFactory;

    protected $table = 'restocking';
    protected $primaryKey = 'RestockID';

    protected $fillable = [
        'ProductID',
        'SupplierID',
        'RestockDate',
        'QuantityRestocked',
        'TotalCost',
    ];

    // Casting for specific fields
    protected $casts = [
        'RestockDate' => 'datetime',
        'TotalCost' => 'float',
    ];

    // Relationships
    public function product()
    {
        return $this->belongsTo(Product::class, 'ProductID', 'ProductID');
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'SupplierID', 'SupplierID');
    }
}
