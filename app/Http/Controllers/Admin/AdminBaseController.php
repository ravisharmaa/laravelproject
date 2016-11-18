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
        $view->with('imageUrl', $this->imageUrl);
      });
      return $view_path;
   }

  /*public function generateSlug($input)
  {
    $text= preg_replace('~[^\pL\d]+~u','-',$input);
    $text= implode('-', $text);
    echo $text;
    die;
      if(empty($text)){
        return 'n-a';
      }
    
    return $text;
  }*/

  public function generateSlug($input)
  {
    $input= trim($input);
    $slug= preg_replace('~[^\pL\d]+~u', '-', $input);
      if(empty($slug)){
        return false;
      }
    return $slug;
  }



}
