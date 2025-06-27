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
        Schema::create('expenses', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->integer('category_id');
            $table->decimal('amount', 10, 2);
            $table->date('date');
            $table->timestamps();

        });
        Schema::table('expenses', function (Blueprint $table) {
            $table->foreign('category_id')->references('id')->on('categories');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expenses');
    }
};
