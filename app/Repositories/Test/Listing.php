<?php

namespace App\Repositories\Test;

use App\Models\Presentation;
use Illuminate\Support\Str;

class Listing
{
   public static function list($filter)
   {
      $list = Presentation::where('type', '=', '1');
      $list = static::filter($list, $filter)
         ->orderBy('name')
         ->paginate(15);
      return $list;
   }

   public static function filter($list, $filter)
   {
      return $list;
   }
}
