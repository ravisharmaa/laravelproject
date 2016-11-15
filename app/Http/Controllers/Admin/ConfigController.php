<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\Config\ConfigRequest;
use App\Http\Controllers\Admin\AdminBaseController;
use App\Model\Config;
use Session;

class ConfigController extends AdminBaseController
{
   protected $view_path= 'backend.admin.config';
   protected $breadOne= 'dashboard';
   protected $imageUrl= null;
   
   public function edit()
   {
   		$data= Config:: first();
   		if(!empty($data))
   			return view(parent::defaultVars($this->view_path. '.edit'),(compact('data')));
   		else
   			return view(parent::defaultVars($this->view_path. '.create'));

   }


   public function store(ConfigRequest $request, $id=null)
   {
   		if(is_null($id)){
   			$data= Config:: create([
   				'address' 		=>	$request->get('address'),
      			'facebook' 		=> 	$request->get('facebook'),
		      	'twitter' 		=>	$request->get('twitter'),
		      	'about_desc' 	=> 	$request->get('about_desc'),
		     	    'mail' 		=> 	$request->get('mail'),
		      	'gplus' 		=>	$request->get('gplus')
   				]);
	   		if($data){
	   			Session:: flash('flash_message', 'Config Settings have been created');
	   			return redirect()->route('config.edit');
	   		} else {
	   			Session:: flash('error_message', 'Config Setting could not be created');
	   			return view(parent:: defaultVars($this->view_path. '.create'));	
	   		}	
   		} else {
   			$data= Config::FindOrFail($id);
   			$update= $data->update($request->all());
   			if($update){
   				Session::flash('flash_message', 'Config Settings Updated');
   				return redirect()->route('config.edit');
   			}else{
   				Session::flash('error_message', 'Could not update');
   				return view (parent::defaultVars($this->view_path. '.create'));
   			}

   		}
   	}
}
