<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

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
}
