<?php

namespace App\Repositories\Helpers\Menu;

trait Menu
{
   public static function menuActionSingle(string $route)
   {
      if (request()->route()->getName() == $route) :
         return 'active';
      endif;
   }

   public static function menuActionMultiple(array $route)
   {
      if (in_array(request()->route()->getName(), $route)) :
         return 'active';
      endif;
   }
}
