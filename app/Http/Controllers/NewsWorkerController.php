<?php

namespace App\Http\Controllers;


use Illuminate\Routing\Controller as BaseController;
//use App\Http\Models\News;


class NewsWorkerController extends BaseController
{
		public static function GetBasicNewsCountNews(){
			$AllNews = new News();
			return view('welcome');
		}
		public static  function ConcreteNews(){

		}
}
