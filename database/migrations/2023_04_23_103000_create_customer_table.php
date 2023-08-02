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
        Schema::create('customer', function (Blueprint $table) {
            $table->id();
            $table->string('name')->Nullable();
            $table->string('address')->Nullable();
            $table->string('number')->Nullable();
            $table->string('email')->Nullable();
            $table->string('brn')->Nullable();
            $table->string('location')->Nullable();
            $table->boolean('availability')->Nullable();
            $table->string('reffname')->Nullable();
            $table->string('discription')->Nullable();
            $table->string('image')->Nullable();
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
        Schema::dropIfExists('customer');
    }
};
