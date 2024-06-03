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
        Schema::create('huynhduykhanh_post', function (Blueprint $table) {
            $table->id(); // id
            $table->unsignedInteger('topic_id')->nullable();
            $table->string('title', 1000);
            $table->string('slug', 1000);
            $table->mediumText('detail');
            $table->string('image', 1000);
            $table->enum('type', ['post', 'page']);
            $table->text('description')->nullable();
            $table->unsignedInteger('created_by')->default(1);
            $table->unsignedInteger('updated_by')->nullable();
            $table->timestamps(); // created_at, updated_at
            $table->unsignedTinyInteger('status')->default(2);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('huynhduykhanh_post');
    }
};
