<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SousCategorie extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    // protected $fillable = ['id', 'nom', 'categorie_id'];

    public function formations(){
        return $this->hasMany(Formation::class);
    }

    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }
}
