<?php

namespace App\Repositories\Test;

use App\Models\Presentation;
use Illuminate\Support\Str;

class Validation
{
   public static function input($type, $data = false)
   {
      $input = [
         'id' => null,
         'status' => null,
         'type' => null,
         'name' => null,
         'name_slug' => null,
         'amount' => null,
      ];
      switch ($type) {
         case 2:
            $data = (object) $data;
            foreach ($input as $key => $value) {
               $input[$key] = (isset($data->$key)) ? $data->$key : null;
            }
            break;
      }
      return $input;
   }

   public static function rules($type)
   {
      switch ($type) {
         case 1:
            return [
               'input.name' => ['required'],
            ];
            break;
         case 2:
            return [
               'input.name' => ['required'],
               'input.type' => ['required', 'in:1,2'],
            ];
            break;
         default:
            return [
               'input.name' => ['required'],
            ];
            break;
      }
   }

   public static function message()
   {
      return [
         'required' => 'obrigatório',
         'in' => 'inválido',
      ];
   }

   public static function exists($type, $input)
   {
      $input['id'] = ((isset($input['id'])) && (!empty($input['id']))) ? $input['id'] : 0;
      $input['name'] = ((isset($input['name'])) && (!empty($input['name']))) ? $input['name'] : 'null';
      switch ($type) {
         case 1:
            return Presentation::where('type', '=', '1')
               ->where('name_slug', '=', Str::slug(trim($input['name'])))
               ->exists();
            break;
         case 2:
            return Presentation::where('type', '=', '1')
               ->where('id', '<>', $input['id'])
               ->where('name_slug', '=', Str::slug(trim($input['name'])))
               ->exists();
            break;
         default:
            return false;
            break;
      }
   }
}
