<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use MongoDB\Laravel\Eloquent\Model;

class VideoTitle extends Model
{
    use HasFactory;
    protected $fillable =   ['title','url','visible'=>'boolean'];

}
