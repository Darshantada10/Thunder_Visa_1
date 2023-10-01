<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use MongoDB\Laravel\Eloquent\Model;


class Navbar extends Model
{
    use HasFactory;
    protected $fillable =   ['title','url','parent_id'];
    public function children()
    {
        return $this->hasMany(Navbar::class, 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo(Navbar::class, 'parent_id');
    }
    public function hasChildren()
    {
    return $this->children->isNotEmpty();
    }
}
