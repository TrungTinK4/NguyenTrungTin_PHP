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
        Schema::create('huynhduykhanh_order', function (Blueprint $table) {
            $table->id(); //id
            $table->unsignedInteger('user_id');
            $table->string('name', 255);
            $table->string('phone', 255);
            $table->string('email', 255);
            $table->string('address', 255);
            $table->string('note', 255)->nullable();
            $table->unsignedTinyInteger('status')->default(2);
            $table->unsignedInteger('updated_by')->nullable();

            $table->timestamps(); //created,update_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('huynhduykhanh_order');
    }
};
