<?php

namespace App\Http\Controllers;

use App\Models\Genres;
use App\Models\Song;
use App\Models\Artist;
use App\Models\SongArtist;
use App\Models\SongAlbum;
use App\Models\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    private  $song, $genres, $artist, $songArtist,$songAlbum,$album;
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
        $albumAll = $this->album->get();
        return view('album.index',compact('albumAll'));
    }

    public function detailAlbum($id){
        $album = $this->album->find($id);
        $albumAll = $this->album->get();
        return view('album.detailAlbum', compact('album','albumAll'));
    }
}
