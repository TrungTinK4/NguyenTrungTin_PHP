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
        Schema::create('nguyentrungtin_user', function (Blueprint $table) {
            $table->increments('id'); // Key, UNSIGNED, AUTO_INCREMENT
            $table->string('name', 255)->nullable(false); // Not Null
            $table->string('email', 255)->nullable(false); // Not Null
            $table->string('phone', 255)->nullable(false); // Not Null
            $table->string('username', 255)->nullable(false); // Not Null
            $table->string('password', 255)->nullable(false); // Not Null
            $table->string('address', 255)->nullable(false); // Not Null
            $table->string('image', 255)->nullable(false); // Not Null
            $table->string('roles', 50)->nullable(false); // Not Null, admin hoặc customer
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
        Schema::dropIfExists('nguyentrungtin_user');
    }
};
