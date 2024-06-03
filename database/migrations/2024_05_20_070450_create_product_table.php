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
        Schema::create('huynhduykhanh_product', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('category_id')->nullable();
            $table->unsignedInteger('brand_id')->nullable();
            $table->string('name', 1000)->nullable();
            $table->string('slug', 1000)->nullable();
            $table->float('price')->nullable();
            $table->float('pricesale');
            $table->string('image', 1000)->nullable();
            $table->unsignedInteger('qty')->nullable();
            $table->mediumText('detail')->nullable();
            $table->string('description', 255)->nullable();
            $table->unsignedInteger('created_by')->default(1); 
            $table->unsignedInteger('updated_by')->nullable(); 
            $table->unsignedTinyInteger('status')->default(2); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('huynhduykhanh_product');
    }
};
