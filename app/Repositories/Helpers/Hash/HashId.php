<?php

namespace App\Repositories\Helpers\Hash;

use Hashids\Hashids;

trait HashId
{
   public static function hashIdEncode($value)
   {
      return (new Hashids())->encode($value, rand(0, 99));
   }

   public static function hashIdDecode($value)
   {
      $value = (new Hashids())->decode($value);
      return (($value) && ($value[0])) ? $value[0] : NULL;
   }
}
