<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\AdminBaseController;
use App\Http\Requests\ToDO\ToDoCreateRequest;
use App\Model\ToDo;
use Session;

class ToDOController extends AdminBaseController
{
    public function index()
    {
    	$data= ToDo:: orderBy('rank','asc')->paginate(3);
    	return view('backend.admin.todo.index', compact('data'));
    }

    public function create()
    {
    	return view('backend.admin.todo.create');
    }

    public function store(ToDoCreateRequest $request)
    {
        $slug= $this->generateSlug($request->get('title'));
        $data= ToDo:: create([
    		'title'			=>	$request->get('title'),
    		'description'	=>	$request->get('description'),
    		'status'		=>	$request->get('status'),
            'slug'          =>  $slug,
    		'rank'			=>	$request->get('rank')
    		]);


		return redirect()->route('todo.index')->with(['success_message','Good Work']);
    	
    }

    public function edit(ToDo $todo)
    {
       
    	return view('backend.admin.todo.edit',compact('todo'));
    }

    public function update($todo, ToDOCreateRequest $request)
    {
    	
        $todo->update($request->all());
        Session:: flash('flash_message', 'Your record has been updated');
        return redirect()->route('todo.index');

    }

    public function show(ToDo $todo)
    {
        return view('backend.admin.todo.general.show')->with('todo', $todo);
    }

    public function destroy(ToDo $todo)
    {
        
        $todo->delete();
        Session:: flash('flash_message','Your record has been deleted');
        return redirect()->route('todo.index');
    }
}

