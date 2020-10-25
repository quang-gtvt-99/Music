<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favourite extends Model
{
    use HasFactory;
    protected $fillable = [
        'id','id_song'
    ];

    public function songs()
    {
        return $this->hasMany(Song::class,'id_song');
    }
}
