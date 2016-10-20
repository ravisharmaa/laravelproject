<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Session;


class AdminBaseController extends AppBaseController
{
    /**
     * @return view
     */
   	protected $htmlSuccess;
   	protected $htmlFaliure;


   public function home()
   {
       return view('backend.admin.dashboard');
   }

   public function successMessage()
   {
   	$this->htmlSuccess= Session:: flash('success_message', 'Your entry has been successfully created');
   }

   public function faliureMessage()
   {
   	$this->htmlFaliure= Session:: flash('faliure_message', 'Your entry could not be created');
   }

}
