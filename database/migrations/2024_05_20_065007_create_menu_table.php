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
        Schema::create('nguyentrungtin_menu', function (Blueprint $table) {
            $table->increments('id'); // Key, AUTO_INCREMENT
            $table->string('name', 1000)->nullable(false); // Not Null
            $table->string('link', 1000)->nullable(false); // Not Null
            $table->integer('table_id')->unsigned()->nullable(); // UNSIGNED, Null
            $table->string('type', 255)->nullable(false); // Not Null
            $table->dateTime('created_at')->nullable(false); // Not Null
            $table->integer('created_by')->unsigned()->nullable(false); // UNSIGNED, Not Null
            $table->dateTime('updated_at')->nullable(); // Null
            $table->integer('updated_by')->unsigned()->nullable(); // UNSIGNED, Null
            $table->tinyInteger('status')->unsigned()->default(2); // UNSIGNED, Default 2
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nguyentrungtin_menu');
    }
};
