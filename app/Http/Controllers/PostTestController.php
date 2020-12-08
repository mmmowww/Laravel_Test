<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Routing\Controller as BaseController;
//use App\Http\Models\News;


class PostTestController extends BaseController
{
		//TODO:: Выгрузка по базе
		public static $Url = "";
		public static $Ferst = "";
		public static $Two = "";
		public  function PostTest(){

			return view('post');
		}
		public function FerstPost(Request $reqvest){

			 $f1=$reqvest->input('f1');
			 self::$Ferst = $f1; // Первый обьект
			 $url = "post/".$f1;
		     self::$Url = $url; // Готовим будующий маршрут
		     self::$Url .='/';
		    // dd(self::$Ferst);
		    return view('post',['f1'=>$f1]);

		}
		public function TwoPost(Request $reqvest){

			$f2=$reqvest->input('f2');
			self::$Two = $f2; // второй обьект
			self::$Url .= $f2;
			self::$Url .= '/';
		//	dd($f2);
			return view('post',['f2'=>$f2]);
		}
		public function TrePost(Request $reqvest){
			$f3=$reqvest->input('f3');
			self::$Url .= $f3;
			self::$Url .= '/';
			return view('post',['f3'=>$f3]);
		}

}
