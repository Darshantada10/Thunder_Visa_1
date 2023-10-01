<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use MongoDB\Laravel\Eloquent\Model;


class Benefit extends Model
{
    use HasFactory;
    protected $fillable = [ 'point1',
    'point2',
    'point3',
    'point4',
    'heading1',
    'heading2',
    'heading3',
    'heading4',
    'visible'=>'boolean'
    ];
}
