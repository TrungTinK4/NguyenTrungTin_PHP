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
        Schema::create('huynhduykhanh_category', function (Blueprint $table) {
            $table->id(); //id
            $table->string('name', 1000);
            $table->string('slug', 1000)->nullable();
            $table->unsignedInteger('parent_id')->default(0);
            $table->unsignedInteger('sort_order')->default(1);
            $table->text('description')->nullable();
            // $table->string('image', 1000)->nullable();
            $table->unsignedTinyInteger('status');
            $table->unsignedInteger('created_by')->default(1);
            $table->unsignedInteger('updated_by')->nullable();

            $table->timestamps(); //created,update_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('huynhduykhanh_category');
    }
};
