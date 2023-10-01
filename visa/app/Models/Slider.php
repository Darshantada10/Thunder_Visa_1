<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use MongoDB\Laravel\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    protected $fillable = ['heading','sub_heading','visible'=>'boolean'];

}
