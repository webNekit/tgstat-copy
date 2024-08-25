<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $fillable = [
        'title_ru',
        'title_en',
        'title_tt',
        'title_uz',
        'description_ru',
        'description_en',
        'description_tt',
        'description_uz',
        'category_id',
        'users',
        'users_day',
        'users_week',
        'users_month',
        'online_users_day',
        'online_users_night',
        'recent_subscriptions',
        'active_subscriptions',
        'amount_messages',
        'language',
        'img',
        'is_active',
        'type',
        'link',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function getCategoryTitleAttribute()
    {
        $locale = app()->getLocale(); // Получаем текущий язык приложения

        switch ($locale) {
            case 'ru':
                return $this->category->title_ru;
            case 'en':
                return $this->category->title_en;
            case 'uz':
                return $this->category->title_uz;
            case 'tt':
                return $this->category->title_tt;
            default:
                return $this->category->title_ru; // По умолчанию, если язык не поддерживается
        }
    }
    public function getTitleAttribute()
    {
        $locale = app()->getLocale();
        $field = 'title_' . $locale;

        // Проверка, существует ли поле в модели
        if (array_key_exists($field, $this->attributes)) {
            return $this->attributes[$field];
        }

        // Возвращаем заголовок на языке по умолчанию, если указанный язык не найден
        return $this->attributes['title_' . config('app.locale')];
    }
    public function getDescriptionAttribute()
    {
        $locale = app()->getLocale();
        $field = 'description_' . $locale;

        // Проверка, существует ли поле в модели
        if (array_key_exists($field, $this->attributes)) {
            return $this->attributes[$field];
        }

        // Возвращаем описание на языке по умолчанию, если указанный язык не найден
        return $this->attributes['description_' . config('app.locale')];
    }
}