<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'products';
    protected $primaryKey = 'ProductID';

    protected $fillable = [
        'ProductName',
        'CategoryID',
        'SupplierID',
        'QuantityInStock',
        'RestockThreshold',
        'UnitPrice',
        'ExpirationDate',
    ];

    // Casting for specific fields
    protected $casts = [
        'UnitPrice' => 'float',
        'ExpirationDate' => 'datetime',
    ];

    // Relationships
    public function category()
    {
        return $this->belongsTo(Category::class, 'CategoryID', 'CategoryID');
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'SupplierID', 'SupplierID');
    }

    public function salesDetails()
    {
        return $this->hasMany(SalesDetail::class, 'ProductID', 'ProductID');
    }

    public function restocking()
    {
        return $this->hasMany(Restocking::class, 'ProductID', 'ProductID');
    }

    // Query Scopes
    public function scopeLowStock($query)
    {
        return $query->where('QuantityInStock', '<', 'RestockThreshold');
    }
}
