<?php

namespace App\Repositories\Test;

use App\Models\Presentation;
use Illuminate\Support\Str;

class Insert
{
   public static function save($input)
   {
      $save = Presentation::create(static::treatData($input));
      return $save->id;
   }

   private static function treatData($input)
   {
      return [
         'status' => 1,
         'type' => 1,
         'name' => trim($input['name']),
         'name_slug' => Str::slug(trim($input['name'])),
         'amount' => 0,
      ];
   }
}
