<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestockingTable extends Migration
{
    public function up()
    {
        Schema::create('restocking', function (Blueprint $table) {
            $table->id('RestockID');
            $table->unsignedBigInteger('ProductID');
            $table->unsignedBigInteger('SupplierID');
            $table->date('RestockDate');
            $table->integer('QuantityRestocked');
            $table->decimal('TotalCost', 10, 2);
            $table->foreign('ProductID')->references('ProductID')->on('products')->onDelete('cascade');
            $table->foreign('SupplierID')->references('SupplierID')->on('suppliers')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('restocking');
    }
}
