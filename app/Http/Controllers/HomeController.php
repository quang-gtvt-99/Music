<?php

namespace App\Http\Controllers;

use App\Models\Genres;
use App\Models\Song;
use App\Models\Artist;
use App\Models\SongArtist;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private  $song, $genres, $artist, $songArtist;
    public function __construct(Song $song, Genres $genres, Artist $artist, SongArtist $songArtist)
    {

        $this->song = $song;
        $this->genres = $genres;
        $this->artist = $artist;
        $this->songArtist = $songArtist;
    }

    public function index(){
        $songs = $this->song->take(15)->get();
        $artists = $this->artist->take(6)->get();
        return view('home',compact('songs','artists'));
    }
}
