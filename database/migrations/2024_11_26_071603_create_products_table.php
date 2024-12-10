<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // Auto-increment primary key
            $table->string('ProductName');
            $table->unsignedBigInteger('CategoryID'); // Integer for foreign keys
            $table->unsignedBigInteger('SubcategoryID');
            $table->unsignedBigInteger('SupplierID');
            $table->unsignedBigInteger('BrandID');
            $table->integer('QuantityInStock');
            $table->decimal('UnitPrice', 8, 2);
            $table->decimal('BasePrice', 8, 2);
            $table->text('Description')->nullable();
            $table->integer('RestockThreshold');
            $table->date('ExpirationDate')->nullable();
            $table->timestamps();

            // Foreign key relationships
            $table->foreign('CategoryID')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('SubcategoryID')->references('id')->on('subcategories')->onDelete('cascade');
            $table->foreign('SupplierID')->references('id')->on('suppliers')->onDelete('cascade');
            $table->foreign('BrandID')->references('id')->on('brands')->onDelete('cascade');
        });
    }


    public function down()
    {
        Schema::dropIfExists('products');
    }
}
