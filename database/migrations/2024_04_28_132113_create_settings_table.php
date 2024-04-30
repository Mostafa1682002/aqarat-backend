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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('logo')->default('uploads/logo.png');
            $table->longText('first_about_us');
            $table->longText('second_about_us');
            $table->string('f_link')->nullable();
            $table->string('t_link')->nullable();
            $table->string('s_link')->nullable();
            $table->string('i_link')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};