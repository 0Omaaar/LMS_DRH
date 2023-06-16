<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function souscategorie()
    {
        return $this->belongsTo(SousCategorie::class);
    }
    public function videos()
    {
        return $this->hasMany(Video::class);
    }

    public function vues(){
        return $this->hasMany(VueFormation::class, 'formation_id');
    }

    public function signals(){
        return $this->hasMany(Signal::class);
    }



}
