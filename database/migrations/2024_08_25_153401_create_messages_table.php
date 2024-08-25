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
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            // название чата
            $table->string('title_ru')->comment('Название чата (Русский)');
            $table->string('title_en')->comment('Название чата (Английский)');
            $table->string('title_tt')->comment('Название чата (Татарский)');
            $table->string('title_uz')->comment('Название чата (Узбекский)');
            // описание чата
            $table->text('description_ru')->comment('Описание чата (Русский)');
            $table->text('description_en')->comment('Описание чата (Английский)');
            $table->text('description_tt')->comment('Описание чата (Татарский)');
            $table->text('description_uz')->comment('Описание чата (Узбекский)');
            // связь с моделью категории
            $table->foreignIdFor(Category::class)->constrained()->onDelete('cascade');
            // Пользователи
            $table->integer('users')->default(0)->comment('общее значение');
            $table->integer('users_day')->default(0)->comment('за день');
            $table->integer('users_week')->default(0)->comment('за неделю');
            $table->integer('users_month')->default(0)->comment('за месяц');
            // Пользователи онлайн
            $table->integer('online_users_day')->default(0)->comment('онлайн днем');
            $table->integer('online_users_night')->default(0)->comment('онлайн ночью');
            // подписчики за 24 часа
            $table->integer('recent_subscriptions')->default(0)->comment('подписчики за 24 часа');
            // активные подписчики
            $table->integer('active_subscriptions')->default(0)->comment('активные подписчики');
            $table->integer('amount_messages')->default(0)->comment('Кол-во сообщений');
            // прочее
            $table->string('language')->nullable();
            $table->string('img')->nullable();
            $table->boolean('is_active')->default(false);
            $table->string('type');
            $table->string('link')->comment('ссылка');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};
