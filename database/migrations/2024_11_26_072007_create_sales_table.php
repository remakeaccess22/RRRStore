<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id('SaleID');
            $table->unsignedBigInteger('CustomerID'); // Foreign key column
            $table->date('SaleDate');
            $table->string('PaymentType');
            $table->decimal('TotalAmount', 10, 2);
            $table->timestamps();

            $table->foreign('CustomerID')->references('CustomerID')->on('customers')->onDelete('cascade');

        });
    }

    public function down()
    {
        Schema::dropIfExists('sales');
    }
}
