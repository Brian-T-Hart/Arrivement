<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSellersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sellers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('street')->nullable();
            $table->string('city')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('image')->nullable();
            $table->string('company')->nullable();
            $table->unsignedInteger('years')->nullable();
            $table->unsignedInteger('transactions')->nullable();
            $table->string('origin')->nullable();
            $table->unsignedInteger('price')->nullable();
            $table->unsignedInteger('down_payment')->nullable();
            $table->unsignedInteger('pay_timeframe')->nullable();
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
        Schema::dropIfExists('sellers');
    }
}
