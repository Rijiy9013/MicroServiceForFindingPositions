<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SearchCard extends Model
{
    use HasFactory;

    protected $table = 'search_card';
    protected $fillable = [
        'query_id',
    ];
}
