<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataResults extends Model
{
    use HasFactory;

    protected $table = 'data_results';
    protected $fillable = [
        'title',
        'url',
        'url_image',
        'country',
        'price',
        'condition',
        'quantity',
        'seller_title',
        'seller_rating',
        'seller_url',
        'market',
        'search_card_id',
    ];

    public function search_card()
    {
        return $this->belongsTo(SearchCard::class);
    }

}
