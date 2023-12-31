<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Signal extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public function formation()
    {
        return $this->belongsTo(Formation::class);
    }
}
