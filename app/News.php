<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class News extends Model
{

	public static function GetAllNews(){

		$AllNews =  DB::select("SELECT * FROM `news` ");

		return $AllNews;
	}
	public static function GetConcrateNews($id){

	$CountNews = DB::select("SELECT COUNT(id) FROM `news` ");
	$AnswerDB = "";

         if((is_int((int)$id) == true)&&($id <= $CountNews)){
          $AnswerDB = DB::select("SELECT * FROM `news` WHERE id = ".$id." ");
             }else{
             	$AnswerDB = "Такой новости нет";
             }


	 	return $AnswerDB;
	}
}
