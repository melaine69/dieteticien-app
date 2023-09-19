<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'preparation_time',
        'rest_time',
        'cooking_time',
        'ingredients',
        'allergens',
        'steps',
        'diets',
        'public'
    ];

    protected $casts = [
        'public' => 'boolean',
        'allergens' => 'array',
        'diets' => 'array'
    ];
}
