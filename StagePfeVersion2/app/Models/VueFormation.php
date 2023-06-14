<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VueFormation extends Model
{
    use HasFactory;
    protected $fillable = ['formation_id', 'ip_address'];

    public function formation()
    {
        return $this->belongsTo(Formation::class, 'formation_id');
    }
}