<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubcategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('subcategories', function (Blueprint $table) {
            $table->id();  // This will create an `id` column as the primary key
            $table->string('SubcategoryName');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('subcategories');
    }
}
