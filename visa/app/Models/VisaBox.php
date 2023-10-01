<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use MongoDB\Laravel\Eloquent\Model;


class VisaBox extends Model
{
    use HasFactory;
    protected $fillable =['image','title','small_description','visible'=> 'boolean'];

}
