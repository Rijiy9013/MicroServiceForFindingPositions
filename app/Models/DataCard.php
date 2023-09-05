<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataCard extends Model
{
    use HasFactory;

    protected $table = 'data_card';
    protected $fillable = [
        'min_price',
        'max_price',
        'avg_price',
        'count_results',
        'search_card_id',
    ];

    public function search_card()
    {
        return $this->belongsTo(SearchCard::class);
    }

}
