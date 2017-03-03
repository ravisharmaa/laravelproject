<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\AdminBaseController;
use App\Model\Gallery;
use Config;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;
use Session;
use DB;

class GalleryController extends AdminBaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $view_path = 'backend.admin.gallery';
    protected $imagePath = '/public/uploads/gallery';
    protected $imageUrl  = 'uploads/gallery';
    // private $imgConfigs     =  Config::get('image.gallery'));

    public function index()
    {
        // dd(Config::get('image.gallery'));
        $data        = [];
        $data['row'] = Gallery::orderBy('id', 'asc')->get();
        return view(parent::defaultVars($this->view_path . '.index'), compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view(parent::defaultVars($this->view_path . '.create'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file= null;
        if ($request->hasFile('image')) {
            $image   = $request->file('image');
            $imgFile = $image->getClientOriginalName();
            $imgFile = pathinfo($imgFile, PATHINFO_FILENAME);
            $file    = Str::slug(Str::random(8) . $imgFile) . '.' . $image->getClientOriginalExtension();
            $upload  = $image->move(base_path() . $this->imagePath, $file);
            if ($upload) {
                Image::make(base_path() . $this->imagePath . '/' . $file)->resize(Config::get('image.gallery_width'), Config::get('image.gallery_height'))->save($upload);
            }
        }
        $rank_data = Gallery::select(DB::raw('id,max(rank)'));
        dd($rank_data);
        if(is_null($rank_data)){
            $rank_data = 1;
        } else {

        }

        $data = Gallery::create([
            'title'  => $request->get('title'),
            'rank'   => $rank_data,
            'image'  => $file,
            'slug'   => $this->generateSlug($request->get('title')),
            'status' => $request->get('status'),
        ]);

        if ($data) {
            Session::flash('flash_message', 'Image Uploaded Successfully');
            return redirect()->route('gallery.index');
        } else {
            Session::flash('error_message', 'Could not complete your request');
            return redirect()->route('gallery.create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        return view(parent::defaultVars($this->view_path . '.edit'), compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  $gallery Gallery
     * Used Route Model Binding
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        File::delete(base_path() . $this->imagePath . '/' . $gallery->image);
        $gallery->delete();
        Session::flash('flash_message', 'Image Deleted Successfully');
        return redirect()->route('gallery.index');

    }
}
