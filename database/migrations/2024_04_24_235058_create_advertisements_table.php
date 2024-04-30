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
        Schema::create('advertisements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('name');
            $table->decimal('price', 8, 2);
            $table->string('phone', 20);
            $table->string('address');
            $table->foreignId('category_id')->constrained('categories')->cascadeOnDelete()->cascadeOnUpdate();
            $table->integer('number_rooms');
            $table->integer('number_floors');
            $table->integer('number_kitchens');
            $table->integer('number_halls');
            $table->boolean('elevator');
            $table->boolean('furnished');
            $table->enum('type', ['للبيع', 'للايجار']);
            $table->string('image');
            $table->boolean('status')->default(true);
            $table->longText('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('advertisements');
    }
};