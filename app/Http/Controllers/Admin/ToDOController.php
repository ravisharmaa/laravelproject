<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\AdminBaseController;
use App\Http\Requests\ToDO\ToDoCreateRequest;
use App\Model\ToDO;

class ToDOController extends AdminBaseController
{
    public function index()
    {
    	$data= ToDO:: all();
    	return view('backend.admin.todo.index', compact('data'));
    }

    public function create()
    {
    	return view('backend.admin.todo.create');
    }

    public function store(ToDoCreateRequest $request)
    {
    	$data= ToDO:: create([
    		'title'			=>$request->get('title'),
    		'description'	=>$request->get('desc'),
    		'status'		=>$request->get('status'),
    		'rank'			=>$request->get('rank')
    		]);
    	
		if($data){
    		$this->successMessage();
    		return redirect()->route('todo.index');
    	}else{
    		$this->faliureMessage();
    		return redirect()->route('todo.create');
    	}
    	
    }
}

