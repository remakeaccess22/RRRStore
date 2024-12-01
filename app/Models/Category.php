<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';
    protected $primaryKey = 'CategoryID';

    protected $fillable = [
        'CategoryName',
    ];

    // Relationships
    public function products()
    {
        return $this->hasMany(Product::class, 'CategoryID', 'CategoryID');
    }

    // New relationship for sales details through products
    public function salesDetails()
    {
        return $this->hasManyThrough(SalesDetail::class, Product::class, 'CategoryID', 'ProductID', 'CategoryID', 'ProductID');
    }
}
