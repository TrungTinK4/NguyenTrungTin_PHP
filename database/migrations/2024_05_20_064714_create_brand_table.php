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
        Schema::create('nguyentrungtin_brand', function (Blueprint $table) {
            $table->increments('id'); // Key, UNSIGNED, AUTO_INCREMENT
            $table->string('name', 1000)->nullable(false); // Not Null
            $table->string('slug', 1000)->nullable(false); // Not Null
            $table->string('image', 1000)->nullable(); // Null
            $table->integer('sort_order')->unsigned()->default(0); // UNSIGNED, Default 0
            $table->string('description', 255)->nullable(); // Null
            $table->dateTime('created_at')->nullable(false); // Not Null
            $table->integer('created_by')->unsigned()->nullable(false); // UNSIGNED, Not Null
            $table->dateTime('updated_at')->nullable(); // Null
            $table->integer('updated_by')->unsigned()->nullable(); // Null
            $table->tinyInteger('status')->unsigned()->default(2); // UNSIGNED, Default 2
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nguyentrungtin_brand');
    }
};
