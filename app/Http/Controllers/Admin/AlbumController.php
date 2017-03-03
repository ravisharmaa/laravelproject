<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Album;
use App\Model\Artist;
use DB;

class AlbumController extends Controller
{
    public function create()
    {
        $artist = $this->viewArtist();
        return view('backend.admin.album.create',compact('artist'));
    }

    public function save(Request $request)
    {

        Album::create([
           'artist_id'      =>  $request->get('artist_name'),
            'album_name'    =>  $request->get('album_name')
        ]);
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

    public function viewArtist()
    {
        $artist =   DB::table('artist')->pluck('artist_name','id');
        return $artist;

    }
}
