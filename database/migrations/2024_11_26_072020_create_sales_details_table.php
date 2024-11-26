<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesDetailsTable extends Migration
{
    public function up()
    {
        Schema::create('sales_details', function (Blueprint $table) {
            $table->id('SalesDetailID');
            $table->unsignedBigInteger('SaleID');
            $table->unsignedBigInteger('ProductID');
            $table->integer('QuantitySold');
            $table->decimal('Subtotal', 10, 2);
            $table->foreign('SaleID')->references('SaleID')->on('sales')->onDelete('cascade');
            $table->foreign('ProductID')->references('ProductID')->on('products')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sales_details');
    }
}
