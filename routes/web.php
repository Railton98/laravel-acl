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

Route::group(['prefix' => 'painel'], function(){
  //PainelController
  Route::get('/', 'Painel\PainelController@index');

  //PostController
  Route::get('posts', 'Painel\PostController@index');

});

Auth::routes();

Route::get('/', 'Portal\SiteController@index');
