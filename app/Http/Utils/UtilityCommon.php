<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 22/04/2017
 * Time: 16:57
 */

namespace App\Http\Utils;


class UtilityCommon
{
  public static function formatTitle($content){
    $getString = $content;
    if(strlen($getString) > 30){
      $getString = substr($content,0,30);
      $getString .= "...";
    }
    return $getString;
  }

  public static function formatAddress($content){
    $getString = $content;
    if(strlen($getString) > 45){
      $getString = substr($content,0,45);
      $getString .= "...";
    }
    return $getString;
  }

}