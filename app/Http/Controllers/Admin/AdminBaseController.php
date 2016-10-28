<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Session;
use View;


class AdminBaseController extends AppBaseController
{
    /**
     * @return view
     */
  protected $breadOne= 'dasbhboard';


  public function home()
   {
       return view('backend.admin.dashboard');
   }

  protected function defaultVars($view_path)
   {
      View::composer($view_path, function($view) use ($view_path){
        $view->with('breadOne', $this->breadOne);
        $view->with('view_path', $this->view_path);
      });
      return $view_path;
   }

}
