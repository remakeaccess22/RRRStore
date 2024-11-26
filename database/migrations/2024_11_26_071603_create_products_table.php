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
            $table->integer('QuantityInStock');
            $table->integer('RestockThreshold');
            $table->decimal('UnitPrice', 10, 2);
            $table->date('ExpirationDate')->nullable();
            $table->foreign('CategoryID')->references('CategoryID')->on('categories')->onDelete('cascade');
            $table->foreign('SupplierID')->references('SupplierID')->on('suppliers')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
