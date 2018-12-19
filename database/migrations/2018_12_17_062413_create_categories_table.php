<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
<<<<<<< HEAD
        if(!Schema::hasTable('categories')){
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('description')->nullable();
            $table->string('slug');
            $table->timestamps();
        });
        }
=======
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
        });
>>>>>>> db4c825b1e1e9566248a691f77f04eb121a7a1b1
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
