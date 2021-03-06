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

Route::get('/', 'IndexController@show')->name('index');

Route::get('/contacts', 'ContactsController@show')->name('contacts');

Route::get('/vacancies', 'VacanciesController@show')->name('vacancies');

Route::get('/about/{id}','FirstController@show');
Route::get('/test/{test}','Admin\Core@zalupa');

Route::get('/article/{id}',['uses'=>'Admin\Core@getArticle', 'as'=>'id']);
Route::get('/articles', 'Admin\Core@getArticles')->name('articles');

Route::resource('pages', 'PagesController');//->middleware('mymiddle');
Route::resource('page/{page}', 'PagesController');

//Route::resource('/custom-controller', 'PagesController@getIndex');
