<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesDetail extends Model
{
    use HasFactory;

    protected $table = 'sales_details';
    protected $primaryKey = 'SalesDetailID';

    protected $fillable = [
        'SaleID',
        'ProductID',
        'QuantitySold',
        'Subtotal',
    ];

    // Casting for specific fields
    protected $casts = [
        'Subtotal' => 'float',
    ];

    // Relationships
    public function sale()
    {
        return $this->belongsTo(Sale::class, 'SaleID', 'SaleID');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'ProductID', 'ProductID');
    }
}
