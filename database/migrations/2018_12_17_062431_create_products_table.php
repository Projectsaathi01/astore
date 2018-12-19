<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
<<<<<<< HEAD
            $table->integer('category_id');
            $table->string('title');
            $table->string('slug');
            $table->string('description')->nullable();
            $table->float('price');
            $table->float('discount');
=======
>>>>>>> db4c825b1e1e9566248a691f77f04eb121a7a1b1
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
