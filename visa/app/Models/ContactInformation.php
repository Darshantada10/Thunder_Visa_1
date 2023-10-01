<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use MongoDB\Laravel\Eloquent\Model;

class ContactInformation extends Model
{
    use HasFactory;
    protected $fillable = ['mobile1','mobile2','address','visible'=>'boolean'];

}
