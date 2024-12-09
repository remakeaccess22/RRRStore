<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id('ProductID');
            $table->string('ProductName');
            $table->unsignedBigInteger('CategoryID');
            $table->unsignedBigInteger('SupplierID');
            $table->unsignedBigInteger('SubcategoryID'); // New field
            $table->unsignedBigInteger('BrandID');       // New field
            $table->text('Description')->nullable();     // New field
            $table->decimal('BasePrice', 10, 2);         // New field
            $table->integer('QuantityInStock');
            $table->integer('RestockThreshold');
            $table->decimal('UnitPrice', 10, 2);
            $table->date('ExpirationDate')->nullable();
            
            // Foreign key relationships
            $table->foreign('CategoryID')->references('CategoryID')->on('categories')->onDelete('cascade');
            $table->foreign('SupplierID')->references('SupplierID')->on('suppliers')->onDelete('cascade');
            $table->foreign('SubcategoryID')->references('SubcategoryID')->on('subcategories')->onDelete('cascade');
            $table->foreign('BrandID')->references('BrandID')->on('brands')->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
