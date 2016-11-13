<?php

namespace App\Http\Controllers\Admin;
use App\Helpers\AppHelper;
use Illuminate\Http\Request;
use App\Http\Requests\Note\NoteRequest;
use App\Http\Requests\ToDO\ToDoCreateRequest;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\AdminBaseController;

class NoteController extends AdminBaseController
{
    protected $view_path= 'backend.admin.note';

    public function index()
    {
    	$flash= AppHelper::message('success','this is my message');
    	return view(parent::defaultVars($this->view_path. '.index'))->with('flash' ,$flash);
    }

    public function store(NoteRequest $request)
    {
    	dd($request);
    }


    

}
