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
    if(strlen($getString) > 40){
      $getString = substr($content,0,40);
      $getString .= "...";
    }
    return $getString;
  }

  public static function formatAddress($content){
    $getString = $content;
    if(strlen($getString) > 65){
      $getString = substr($content,0,65);
      $getString .= "...";
    }
    return $getString;
  }

}