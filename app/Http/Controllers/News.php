<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class News extends Model
{

	public function GetAllNews(){
		return DB::select("SELECT * FROM `news` ");
	}
	public function GetConcrateNews($id){
	$AnswerInt = is_int($id);
	$CountNews = DB::select("SELECT COUNT(id) FROM `news` ");
	$AnswerDB = "";
	if($AnswerInt == TRUE && $id <= $CountNews){ // Я думал об нармальной волидации, но подумал это излишнее
          $AnswerDB = DB::select("SELECT * FROM `news` WHERE id = ".$id." ");
	 }else{
	 	  $AnswerDB = "Ошибка, данной новости не существует";
	 }

	}
}
