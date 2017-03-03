<?php

namespace App\Http\Controllers\Admin;

use App\Model\Listener;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Artist;
use App\Model\Album;
use App\Model\Listeners;
use DB;

class ArtistController extends Controller
{

    public function index()
    {
        $artist= Artist::select('artist.artist_name as artist','album.album_name as album')
                ->join('album','artist_id','=','artist.id')
                ->leftJoin('album_listeners','listeners_id','=','listener.id')
//                ->join('album_listeners','listener_id' ,'=', 'listener.id')
//                ->leftJoin('album', 'artist_id','=', 'artist.id')
                ->toSql();
        dd($artist);
        return view('backend.admin.artist.index');
    }
    public function create()
    {
        return view('backend.admin.artist.create');
    }

    public function save(Request $request)
    {

        $artist= new Artist();
        $artist->artist_name= $request->get('artist_name');
        $artist->save();

        $album= new Album();
            $album->album_name= $request->get('album_name');
            $album->artist()->associate($artist);
        $album->save();

        $listener       = new Listeners();
        $listener->listener = $request->get('listener');
        $listener->save();
        $listener->album()->save($album);
        return back();
    }

    public function edit($id, Request $request)
    {

    }

    public function update($id, Request $request)
    {

    }

    public function delete($id)
    {

    }
//    protected function createRelation($data, $request)
//    {
//        $album= new Album();
//        $album->album_name= $request->get('album_name');
//        $album->artist()->associate($data);
//        return $album= $album->save();
//    }

}
