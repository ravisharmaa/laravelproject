<?php

namespace App\Helpers;
use Session;

class AppHelper
{

	protected $html=null;
	public static function message($class, $message)
	{
   		$error= ['info','success','danger'];
   		foreach ($error as $e) {
   			if($class==$e){
   				$html= "<div class='alert alert-$class'>
   						<p>$message</p>
   						</div>";
   
   			}
   		}
   		return $html;
   	}
   
	

}
