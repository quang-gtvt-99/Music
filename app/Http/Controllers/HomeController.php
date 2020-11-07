<?php

namespace App\Http\Controllers;

use App\Models\Genres;
use App\Models\Song;
use App\Models\Artist;
use App\Models\SongArtist;
use App\Models\SongAlbum;
use App\Models\Album;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;

class HomeController extends Controller
{
    private  $song, $genres, $artist, $songArtist, $album, $songAlbum;
    public function __construct(Song $song, Genres $genres, Artist $artist, SongArtist $songArtist, Album $album, SongAlbum $songAlbum)
    {

        $this->song = $song;
        $this->genres = $genres;
        $this->artist = $artist;
        $this->songArtist = $songArtist;
        $this->album = $album;
        $this->songAlbum = $songAlbum;
    }

    public function index()
    {
        $songs = $this->song->orderBy('number_listen', 'desc')->take(15)->get();
        $songRelase = $this->song->latest()->limit(5)->get();
        $artists = $this->artist->orderBy('number_visit', 'desc')->take(6)->get();
        $genres = $this->genres->get();
        $albums = $this->album->orderBy('number_visit', 'desc')->take(5)->get();
        $songT1 = $this->song->orderBy('number_listen', 'desc')->take(2)->get();
        return view('home', compact('songs', 'artists', 'songRelase', 'genres', 'albums','songT1'));
    }

    public function getSearch(Request $request)
    {
        $song = $this->song->where('name', 'like', '%' . $request->key . '%')->get();
        return view('home.search', compact('song'));
    }

    public function details($id)
    {
        $song = $this->song->find($id);
        $songAll = $this->song->get();
        $art=$song->artists;
        echo($song);
       //echo($art);
    }
}
