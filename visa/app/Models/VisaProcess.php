<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use MongoDB\Laravel\Eloquent\Model;


class VisaProcess extends Model
{
    use HasFactory;
    protected $fillable = [ 'point1',
    'point2',
    'point3',
    'heading1',
    'heading2',
    'heading3',
    'visible'=>'boolean'
];
}
