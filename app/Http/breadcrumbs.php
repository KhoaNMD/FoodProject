<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 12/06/2017
 * Time: 12:34
 */

/* Home */
Breadcrumbs::register("restaurant.index",function($breadcrumb){
  $breadcrumb->push("Trang chủ",route("restaurant.index"));
});

/* Register post  */
Breadcrumbs::register("restaurant.create",function($breadcrumb){
  $breadcrumb->parent("restaurant.index",route("restaurant.index"));
  $breadcrumb->push("Đăng ký địa điểm",route("restaurant.create"));
});

/* Show post */
Breadcrumbs::register("restaurant.show",function($breadcrumb,$id){
  $breadcrumb->parent("restaurant.index",route("restaurant.index"));
  $breadcrumb->push("Thông tin địa điểm",route("restaurant.show",$id));
});


/* Account user information */
Breadcrumbs::register("user.edit",function($breadcrumb,$id){
  $breadcrumb->parent("restaurant.index",route("restaurant.index"));
  $breadcrumb->push("Thông tin tài khoản",route("user.edit",$id));
});


/* List post */
Breadcrumbs::register("posts.user.get",function($breadcrumb){
  $breadcrumb->parent("restaurant.index",route("restaurant.index"));
  $breadcrumb->push("Danh sách địa điểm",route("posts.user.get"));
});


/* About me */

Breadcrumbs::register("about",function($breadcrumb){
  $breadcrumb->push("Về chúng tôi",route("about"));
});
