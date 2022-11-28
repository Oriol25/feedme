<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NovaGroup extends Model
{
    use HasFactory;
    protected $table = 'nova_group';
    protected $fillable = [
        'name',
        'description',
        'color',
        'img',
        'key',
    ];
}
