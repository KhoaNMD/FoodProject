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


Route::get('/',function(){
   return View::make('front.home');
});

Route::group([
     'namespace' => 'front',
    ],function () {

      Route::get('/',['as' => 'front.home' , 'uses' => 'FrontAuthController@index']);

      Route::post('login', 'FrontAuthController@Login');

      Route::get('logout',['as' => 'front.user.logout' , 'uses' => 'FrontAuthController@Logout']);

      Route::post('register','FrontAuthController@Register');

      Route::get('/edit',['as' => 'front.user.edit.get' , 'uses' => 'FrontAuthController@getEdit']);

      Route::post('/edit/{id}',['as' => 'front.user.edit.post' , 'uses' => 'FrontAuthController@postEdit']);

      Route::resource('restaurant','Customer\CustomerController');

});

Route::get('/faq',function (){
    return view('front.faq.faq');
});

Route::get('/detail',function (){
  return view('front.restaurant.detail');
});

Route::get('/menu',function (){
  return view('front.restaurant.rowlist');
});