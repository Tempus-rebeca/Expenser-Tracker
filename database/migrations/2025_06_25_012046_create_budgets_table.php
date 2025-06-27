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
        Schema::create('budgets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('month'); // 1 a 12
            $table->integer('year'); // 2024, 2025, etc.
            $table->decimal('amount', 10, 2);
            $table->integer('category_id');
            $table->timestamps();
        });
        Schema::table('budgets', function (Blueprint $table) {
            $table->foreign('category_id')->references('id')->on('categories');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('budgets');
    }
};
