<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use MongoDB\Laravel\Eloquent\Model;

class SocialTags extends Model
{
    use HasFactory;
    protected $fillable = ['instagram','facebook','youtube','twitter','visible'=> 'boolean'];

}
