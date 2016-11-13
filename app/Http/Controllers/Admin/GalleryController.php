<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\Gallery\GalleryRequest;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\AdminBaseController;
use Image, File, Config;
use App\Model\Gallery;
use Session;



class GalleryController extends AdminBaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $view_path= 'backend.admin.gallery';
    protected $imagePath= '\public\uploads\gallery';
    

    public function index()
    {
        return view(parent::defaultVars($this->view_path. '.index'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        return view(parent::defaultVars($this->view_path. '.create'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       if($request->hasFile('image')){
        $image= $request->file('image');
        $imgFile= $image->getClientOriginalName();
        $imgFile= pathinfo($imgFile, PATHINFO_FILENAME);
        $file= Str::slug(Str::random(8).$imgFile). '.'.$image->getClientOriginalExtension();
        $upload= $image->move(base_path().$this->imagePath, $file);
            if($upload){
                Image::make(base_path().$this->imagePath.'/'.$file)->resize(Config::get('image.gallery_width'), Config::get('image.gallery_height'))->save($upload);
            }
       }

       $data= Gallery::create([
        'title'     =>  $request->get('title'),
        'rank'      =>  $request->get('rank'),
        'image'     =>  $file,
        'status'    => $request->get('status')
        ]);

       if($data)
       {
            Session::flash('success_message', 'Image Uploaded Successfully');
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
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
    public function destroy($id)
    {
        //
    }
}
