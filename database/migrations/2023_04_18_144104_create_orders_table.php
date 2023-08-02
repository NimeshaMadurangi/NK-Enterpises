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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('OrderDate',10);
            $table->integer('CustomerCode',10);
            $table->string('CustomerName');
            $table->string('Address');
            $table->string('City');
            $table->string('Route');
            $table->string('BRN');
            $table->string('Type');
            $table->string('ReffName');
            $table->string('ProductName');
            $table->integer('AvailableQty',10);
            $table->integer('Qty',10);
            $table->decimal('Rate',10);
            $table->integer('Discount',5);
            $table->decimal('Amount',10);
            $table->decimal('Cost',10);
            $table->decimal('Disc',10);
            $table->decimal('GrossAmount',12);
            $table->decimal('NetAmount',12);
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
        Schema::dropIfExists('orders');
    }
};
