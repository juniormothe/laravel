<?php

namespace App\Repositories\Test;

use App\Models\Presentation;
use Illuminate\Support\Str;

class Update
{
   public static function save($input)
   {
      $save = Presentation::find((isset($input['id'])) ? $input['id'] : 0)
         ->update(static::treatData($input));
      if ($save) :
         return true;
      else :
         return false;
      endif;
   }

   private static function treatData($input)
   {
      return [
         'status' => $input['status'],
         'name' => trim($input['name']),
         'name_slug' => Str::slug(trim($input['name'])),
      ];
   }
}
