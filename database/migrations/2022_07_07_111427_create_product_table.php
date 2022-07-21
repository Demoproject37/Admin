<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('name');
            $table->string('brand');
            $table->bigInteger('price');
            $table->string('image');
            $table->string('cetegory');
            $table->text('dis');
            $table->timestamps();

        });
        // Schema::table('products', function($table) {
        //     $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        // });
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
};
