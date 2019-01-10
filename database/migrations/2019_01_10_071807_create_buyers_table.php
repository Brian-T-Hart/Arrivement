<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuyersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buyers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('street')->nullable();
            $table->string('city')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('image')->nullable();
            $table->string('company')->nullable();
            $table->unsignedInteger('years')->nullable();
            $table->unsignedInteger('closings')->nullable();
            $table->string('source')->nullable();
            $table->unsignedInteger('price')->nullable();
            $table->string('location')->nullable();
            $table->unsignedInteger('payout')->nullable();
            $table->boolean('monthly')->nullable();
            $table->boolean('annual')->nullable();
            $table->boolean('gci')->nullable();
            $table->unsignedInteger('mentoring')->nullable();
            $table->unsignedInteger('user_id');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buyers');
    }
}
