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
   public function home()
   {
       return view('backend.admin.dashboard');
   }

   public function successMessage()
   {
   		Session:: flash('success_message', 'Your entry has been successfully created');
   }

   public function faliureMessage()
   {
   		Session:: flash('faliure_message', 'Your entry could not be created');
   }

}
