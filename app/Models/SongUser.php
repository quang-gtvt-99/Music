<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SongUser extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_song','id_user'
    ];

    public function song()
    {
        return $this->belongsTo(Song::class);
    }
}
