<?php

namespace App\Http\Controllers;
use App\Models\Genres;
use App\Models\Song;
use App\Models\Artist;
use App\Models\SongArtist;
use App\Models\SongAlbum;
use App\Models\Album;
use Illuminate\Http\Request;

class TDownloadController extends Controller
{
    private  $song, $genres, $artist, $songArtist,$album,$songAlbum;
    public function __construct(Song $song, Genres $genres, Artist $artist, SongArtist $songArtist,Album $album,SongAlbum $songAlbum)
    {

        $this->song = $song;
        $this->genres = $genres;
        $this->artist = $artist;
        $this->songArtist = $songArtist;
        $this->album = $album;
        $this->songAlbum = $songAlbum;
    }

    public function index(){
        $songs = $this->song->take(20)->paginate(5);
        $songRelase = $this->song->latest()->limit(5)->get();
        $albums = $this->album->take(5)->get();
        return view('downloadTop.index',compact('songs','songRelase','albums'));
    }
}