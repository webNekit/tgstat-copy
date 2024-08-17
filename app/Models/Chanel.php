<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chanel extends Model
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
        'subscribers',
        'citation_index',
        'average_reach',
        'average_advertising_reach',
        'age_channel',
        'publications',
        'today',
        'week',
        'month',
        'total',
        'language',
        'img',
        'is_active',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

