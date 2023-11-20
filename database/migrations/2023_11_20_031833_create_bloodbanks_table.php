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
        Schema::create('bloodbanks', function (Blueprint $table) {
            $table->id();
            $table->string('name', 250);
            $table->longText('about');
            $table->string('address', 250);
            $table->string('cep', 8);
            $table->string('phone', 250);
            $table->string('opening_hours', 250);
            $table->string('stock_situation', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bloodbank');
    }
};
