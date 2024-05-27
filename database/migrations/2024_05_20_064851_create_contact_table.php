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
        Schema::create('nguyentrungtin_contact', function (Blueprint $table) {
            $table->increments('id'); // Key, AUTO_INCREMENT
            $table->integer('user_id')->unsigned()->nullable(); // UNSIGNED, Null
            $table->string('name', 255)->nullable(false); // Not Null
            $table->string('email', 255)->nullable(false); // Not Null
            $table->string('phone', 255)->nullable(false); // Not Null
            $table->string('title', 255)->nullable(false); // Not Null
            $table->mediumText('content')->nullable(false); // Not Null
            $table->integer('reply_id')->unsigned()->default(0); // UNSIGNED, Default 0
            $table->dateTime('created_at')->nullable(false); // Not Null
            $table->dateTime('updated_at')->nullable(); // Null
            $table->integer('updated_by')->unsigned()->nullable(); // UNSIGNED, Null
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nguyentrungtin_contact');
    }
};
