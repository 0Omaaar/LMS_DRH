<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;
    protected $guarded = ['id'];


    public function souscategories()
    {
        return $this->hasMany(SousCategorie::class);
    }

    public function formations()
    {
        return $this->hasManyThrough(Formation::class, SousCategorie::class, 'categorie_id', 'souscategorie_id');
    }
}
