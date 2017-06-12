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

Route::group([
     'namespace' => 'front',
    ],function () {

      Route::get('/',
          [
              'as'   => 'front.home',
              'uses' => 'FrontAuthController@index']
      );

      Route::get('logout',
          [
              'as'   => 'front.user.logout',
              'uses' => 'FrontAuthController@Logout']
      );

      Route::post('/login', 'FrontAuthController@Login');

      Route::post('/register', 'FrontAuthController@Register');

      Route::get("district",'FrontAuthController@getDistrictById');

      Route::resource('user','User\UserController');

      Route::post('/upload/avatar',
          [
              'as'   => 'front.user.upload.post',
              'uses' => 'User\UserController@uploadAvatar'
          ]
      );

      Route::resource('restaurant', 'Post\PostController');

      Route::get('/restaurant/user/posts',
          [
              'as'   => 'posts.user.get',
              'uses' => 'Post\PostController@userPostList'
          ]
      );

      Route::get('/restaurant/search/location','Post\PostController@searchPost');

      Route::post('/restaurant/rating','Post\PostController@ratingPost');

      Route::resource('comment','Comment\CommentController');

      Route::post('/comment/add','Comment\CommentController@store');

          // Route helper for upload files
      Route::post("upload",'Image\ImageController@uploadLogo');

      Route::get('/restaurant/image/add',
          [
              'as'   => 'posts.image.get',
              'uses' => 'Image\ImageController@getUploadImage']
      );

      Route::post('/restaurant/image/add/{post_id}',
          [
              'as'   => 'posts.image.post',
              'uses' => 'Image\ImageController@postUploadImage']
      );

  Route::get('error404',['as' => 'errorpage',function(){
    return view('_parts.error.404');
  }]);

  Route::get('/faq',['as' => 'about',function (){
    return view('front.faq.faq');
  }]);

  Route::get('/comment',function (){
    return view('front.modalcomment');
  });

  Route::get('/gethtml',function(){
    return view('get-content');
  });

  Route::post('/gethtml',function(){
    return view('get-content');
  });


});

Route::get('admin',function(){
  return view('admin.admin');
});