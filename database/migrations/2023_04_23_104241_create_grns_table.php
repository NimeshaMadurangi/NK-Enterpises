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
        Schema::create('grns', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id')->nullable();
            $table->string('grn', 100)->nullable();
            $table->string('supplier', 220)->nullable();
            $table->integer('qty')->nullable();
            $table->decimal('cost', 11, 0)->nullable();
            $table->decimal('discount', 11, 0)->default(0);
            $table->decimal('price', 11, 0)->nullable();
            $table->text('description')->nullable();
            $table->dateTime('create_date');
            $table->integer('create_user')->nullable();
            $table->dateTime('last_update')->nullable();
            $table->integer('update_user')->nullable();
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
        Schema::dropIfExists('grns');
    }
};
