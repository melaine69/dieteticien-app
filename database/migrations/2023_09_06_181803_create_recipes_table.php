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
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->longText('description')->nullable();
            $table->integer('preparation_time')->default(0);
            $table->integer('rest_time')->nullable()->default(0);
            $table->integer('cooking_time')->nullable()->default(0);
            $table->longText('ingredients')->nullable();
            $table->longText('allergens')->nullable();
            $table->longText('steps');
            $table->string('diet')->nullable();
            $table->boolean('public')->default(true);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recipes');
    }
};
