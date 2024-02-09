<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plant extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'gender',
        'species',
        'family',
        'type',
        'origin',
        'exposition',
        'rusticity',
        'soil',
        'height',
        'width',
        'foliage',
        'foliage_color',
        'flower_color',
        'bloom',
        'melliferous',
        'part_used',
        'harvest',
        'use',
        'internal_use',
        'external_use',
        'contraindication',
        'culinary',
        'bibliography',
        'availability',
        'litrage',
        'price',
        'image',
    ];
}
