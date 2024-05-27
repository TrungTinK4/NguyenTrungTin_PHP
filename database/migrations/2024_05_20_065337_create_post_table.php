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
        Schema::create('nguyentrungtin_post', function (Blueprint $table) {
            $table->increments('id'); // Key, UNSIGNED, AUTO_INCREMENT
            $table->integer('topic_id')->unsigned()->nullable(); // UNSIGNED, Null
            $table->string('title', 1000)->nullable(false); // Not Null
            $table->string('slug', 1000)->nullable(false); // Not Null
            $table->mediumText('detail')->nullable(false); // Not Null
            $table->string('image', 1000)->nullable(false); // Not Null
            $table->string('type', 100)->nullable(false); // Not Null, post hoặc page
            $table->string('description', 255)->nullable(); // Null
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
        Schema::dropIfExists('nguyentrungtin_post');
    }
};
