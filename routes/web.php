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

      Route::get('/login', ['as' => 'login' , 'uses' => 'FrontAuthController@index']);

      Route::post('/login', 'FrontAuthController@Login');

      Route::post('register','FrontAuthController@Register');

      Route::group(['middleware' => 'AuthUser'],function() {

          Route::get('logout', ['as' => 'front.user.logout', 'uses' => 'FrontAuthController@Logout']);

          Route::get('/edit', ['as' => 'front.user.edit.get', 'uses' => 'FrontAuthController@getEdit']);

          Route::post('/edit/{id}', ['as' => 'front.user.edit.post', 'uses' => 'FrontAuthController@postEdit']);

          Route::post('/upload/avatar',['as' => 'front.user.upload.post', 'uses' => 'FrontAuthController@uploadAvatar']);

          Route::resource('restaurant', 'Post\PostController');

          Route::resource('comment','Comment\CommentController');

          Route::post('/comment/add','Comment\CommentController@store');

          Route::get("district",'Post\PostController@getDistrictById');

          // Route helper for upload files
          Route::post("upload",'Image\ImageController@uploadLogo');

          Route::get('/restaurant/image/add',['as' => 'post.image.get','uses' => 'Image\ImageController@getUploadImage']);

          Route::post('/restaurant/image/add/{post_id}',['as' => 'post.image.post','uses' => 'Image\ImageController@postUploadImage']);

      });


});

Route::get('/faq',function (){
    return view('front.faq.faq');
});


