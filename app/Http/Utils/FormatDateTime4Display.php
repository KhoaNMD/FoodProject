<?php
 namespace App\Http\Utils;
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 07/04/2017
 * Time: 23:50
 */


class FormatDateTime4Display
{

//  public static function DisplayTime($object,$colName){
//    if($object){
//      $timeValue = $object->$colName;
//
//      if($timeValue){
//        $object->$colName = date("constants.FormatTime.HHIISS",strtotime($timeValue));
//      }else {
//        $object->$colName = null;
//      }
//    }
//  }

  public static function formatTime4Display($timeValue)
  {
    if($timeValue)
    {
      $strFormat = \Config::get('constants.FormatTime.HHIISS',strtotime($timeValue));

      $timeValue = date($strFormat, strtotime($timeValue));
    }
    return $timeValue;
  }

   public static function formatDate4Display($timeValue)
   {
     if($timeValue)
     {
       $strFormat = \Config::get('constants.FormatTime.DDMMYY',strtotime($timeValue));

       $timeValue = date($strFormat, strtotime($timeValue));
     }
     return $timeValue;
   }

}