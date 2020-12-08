<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/news/', function () { // Блок с новостями
	$news = App\News::GetAllNews();
	return view('news',["news" => $news]);

});

Route::get('/news/{id}', function ($id) { // Новость в отдельности
	$news = App\News::GetConcrateNews($id);
	return view('newsconcrate',["news" => $news]);

});

Route::get('/post','PostTestController@PostTest');
Route::post('/post/ferst','PostTestController@FerstPost');
Route::post('/post/two','PostTestController@TwoPost');
Route::post('/post/tree','PostTestController@TrePost');

Route::get('/post/{f1}/{f2}',function($f1,$f2){

	view('post',["f1"=>$f1,"f2"=>$f2]);
});