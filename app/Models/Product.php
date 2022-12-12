<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'product';
    protected $fillable = [
        'title',
        'quantity',
        'EAN',
        'nutriscore_grade_id',
        'nova_group_id',
        'image',
    ];

    public function nutriscoreGrade()
    {
        return $this->belongsTo(NutriscoreGrade::class);
    }

    public function novaGroup()
    {
        return $this->belongsTo(NovaGroup::class);
    }

    public function alergenos() {
        return $this->belongsToMany(Alergeno::class, 'product_alergens');
    }


}
