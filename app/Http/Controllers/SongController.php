<?php

namespace App\Http\Controllers;

use App\Models\Genres;
use App\Models\Song;
use App\Models\Artist;
use App\Models\SongArtist;
use App\Models\SongAlbum;
use App\Models\Album;
use App\Models\Favourite;
use Illuminate\Http\Request;

class SongController extends Controller
{
    private  $song, $genres, $artist, $songArtist, $album, $songAlbum;
    public function __construct(Song $song, Genres $genres, Artist $artist, SongArtist $songArtist, Album $album, SongAlbum $songAlbum, Favourite $favourite)
    {

        $this->song = $song;
        $this->genres = $genres;
        $this->artist = $artist;
        $this->songArtist = $songArtist;
        $this->album = $album;
        $this->favourite = $favourite;
        $this->songAlbum = $songAlbum;
    }

    public function index()
    {
        $songs = $this->song->paginate(10);
        return view('song.index', compact('songs'));
    }

    public function details($id)
    {
        $song = $this->song->find($id);
        $songAll = $this->song->get();
        dd($songAll);
    }

    public function favourite($id)
    {

        $song = $this->song->find($id);
        $list = session()->get('list');
        if (isset($list[$id])) {
            return response()->json([
                'code'=>201,
                'message'=>'error'
            ],200);
        } else {
            $list[$id] = [
                'name' => $song->name,
                'time' => $song->time,
                'img_path' => $song->img_path,
                'song_path' => $song->song_path
            ];
        }
        session()->put('list', $list);
        return response()->json([
            'code'=>200,
            'message'=>'Thành công'
        ],200);
    }

    public function showList()
    {
        $list=session()->get('list');
        return view('song.favourite',compact('list'));
    }

    public function deleteList()
    {
        # code...
    }

}
