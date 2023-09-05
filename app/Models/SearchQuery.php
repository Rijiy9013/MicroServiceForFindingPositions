<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SearchQuery extends Model
{
    use HasFactory;

    protected $table = 'search_query';
    protected $fillable = [
        'model',
        'price_from',
        'price_to',
        'user_id',
        'is_published', # для отображения
        'is_parsing', # вообще парсится или нет
        'market',
    ];
}
