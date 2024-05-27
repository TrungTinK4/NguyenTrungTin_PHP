<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('nguyentrungtin_orderdetail', function (Blueprint $table) {
            $table->increments('id'); // Key, AUTO_INCREMENT
            $table->integer('order_id')->unsigned()->nullable(false); // UNSIGNED, Not Null
            $table->integer('product_id')->unsigned()->nullable(false); // UNSIGNED, Not Null
            $table->float('price')->nullable(false); // Not Null
            $table->integer('qty')->unsigned()->nullable(false); // UNSIGNED, Not Null
            $table->float('amount')->nullable(false); // Not Null
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nguyentrungtin_orderdetail');
    }
};
