<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use MongoDB\Laravel\Eloquent\Model;
class WorkPermitVisa extends Model
{
    use HasFactory;
    
    protected $fillable = ['content','points','title','image','visible'=>'boolean'];
    protected $casts = ['content' => 'json','points' => 'json'];
}
