<?php

use App\Models\Category;
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
        Schema::create('chanels', function (Blueprint $table) {
            $table->id();
            // название канала
            $table->string('title_ru')->comment('Название канала (Русский)');
            $table->string('title_en')->comment('Название канала (Английский)');
            $table->string('title_tt')->comment('Название канала (Татарский)');
            $table->string('title_uz')->comment('Название канала (Узбекский)');
            // описание канала
            $table->text('description_ru')->comment('Описание канала (Русский)');
            $table->text('description_en')->comment('Описание канала (Английский)');
            $table->text('description_tt')->comment('Описание канала (Татарский)');
            $table->text('description_uz')->comment('Описание канала (Узбекский)');
            // связь с моделью категории
            $table->foreignIdFor(Category::class)->constrained()->onDelete('cascade');
            // Общая информация
            $table->integer('subscribers')->default(0);
            $table->float('citation_index')->default(0);
            $table->float('average_reach')->default(0);
            $table->float('average_advertising_reach')->default(0);
            $table->integer('age_channel')->default(0);
            $table->integer('publications')->default(0);
            $table->integer('today')->default(0);
            $table->integer('week')->default(0);
            $table->integer('month')->default(0);
            $table->integer('total')->default(0);
            $table->string('language')->nullable();
            $table->string('img')->nullable();
            $table->boolean('is_active')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chanels');
    }
};
