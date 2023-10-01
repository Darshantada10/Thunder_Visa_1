<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use MongoDB\Laravel\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $fillable = [
        'heading',
        'description',
        'point_1',
        'description_1',
        'point_2',
        'description_2',
        'visible'=>'boolean',
    ];
}
