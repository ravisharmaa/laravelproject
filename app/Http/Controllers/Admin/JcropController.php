<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\AdminBaseController;
use App\Model\Jcrop;
use Image, File, Config;
use Session;


class JcropController extends AdminBaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $view_path    = 'backend.admin.jcrop';
    protected $imagePath    = '\public\uploads\jcrop';
    protected $imageUrl     = '\uploads\jcrop\\';
    
    public function index()
    {
      $data=[];
      $data['row']= Jcrop::select('title','rank','status','image')->get();
      return view(parent::defaultVars($this->view_path.'.index'),compact('data'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       $path= $this->checkPath($request->path());
       return view(parent::defaultVars($this->view_path. '.' .$path));     
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
            $image= $this->saveImage($request->file('image'));
            // $file= url('/public').$this->imageUrl.'/' .$image->getFileName();
            // $file= asset('public/uploads/jcrop/'). '/'.$image->getFileName();
            $file= public_path().$this->imageUrl .$image->getFileName();
            if(File::exists($file)){
                return response()->json(['success'=>'true', 'file'=>$file]);
                // return Response::json(['success'=>'true', 'file'=>base_path(). $this->imagePath.'/'.$image]);
        }
      }
        
      
         
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id\
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

    protected function checkPath($input)
    {
        $input= explode('/', $input);
        $input= $this->filterArray($input);
        $path= ['create','edit','destroy','update','show'];
            if(!in_array($input, $path)){
                return false;
            }
        return $input;

    }

    protected function filterArray($input_array)
    {
        $filter= array_pop($input_array);
        return $filter;
    }

    protected function saveImage($image)
    {
        $filename= $image->getClientOriginalName();
        $filename= pathinfo($filename, PATHINFO_FILENAME);
        $file= $filename. '.' .$image->getClientOriginalExtension();
        $upload= $image->move(base_path().$this->imagePath, $file);
        return $upload;
    }


}
