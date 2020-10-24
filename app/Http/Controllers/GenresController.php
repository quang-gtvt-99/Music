<?php

namespace App\Http\Controllers;

use App\Models\Genres;
use App\Models\Song;
use App\Models\Artist;
use App\Models\SongArtist;
use Illuminate\Http\Request;

class GenresController extends Controller
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
        $genres = $this->genres->get();
        return view('genres.index',compact('genres'));
    }

    public function detailGenres($id){
        $genres = $this->genres->find($id);
        $genresAll = $this->genres->get();
        return view('genres.detailGenres', compact('genres','genresAll'));
    }

}
