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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('title_ru')->comment('Название на русском');
            $table->string('title_en')->comment('Название на английском');
            $table->string('title_uz')->comment('Название на узбекском');
            $table->string('title_tt')->comment('Название на татарском');
            $table->boolean('is_active')->default(false)->comment('статус активновсти');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
