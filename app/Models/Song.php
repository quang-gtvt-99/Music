<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'time', 'id_genres','img_path','song_path','number_listen','number_download','cost'
    ];

    public function songArtists(){
        return $this->hasMany(SongArtist::class,'id_song');
    }

    public function artists(){
        return $this
        ->belongsToMany(Artist::class,'song_artists','id_song','id_artist');
    }

    public function genres(){
        return $this->belongsTo(Genres::class,'id_genres');
    }

    public function albums(){
        return $this
        ->belongsToMany(Album::class,'song_albums','id_album','id_song');
    }
}
