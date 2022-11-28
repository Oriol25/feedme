<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NutriscoreGrade extends Model
{
    use HasFactory;
    protected $table = 'nutriscore_grade';
    protected $fillable = [
        'name',
        'color',
        'img',
        'key',
    ];
}
