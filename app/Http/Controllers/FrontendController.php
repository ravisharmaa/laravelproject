<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Gallery;

class FrontendController extends Controller
{
   	public function index()
    {
    	$gallery = Gallery::orderBy('id','asc')->get();
    	return view('frontend.index', compact('gallery'));
    } 

    public function details($slug=null)
    {
    	if(is_null($slug)){
    		return '404';
    	}else{
    		return 
    	}
    }

    public function text()
    {
    	$this->text=	'text';
    	
    }

}
