<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['title_ru', 'title_en', 'title_uz', 'title_tt', 'is_active'];

    // получение заголовка на основе выбранного языка
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
}
