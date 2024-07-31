<?php

namespace App\Repositories\Test;

use App\Models\Presentation;
use App\Helpers\Helper;

class Data
{
   public static function object($w)
   {
      return Presentation::find(Helper::hashIdDecode($w));
   }
}
