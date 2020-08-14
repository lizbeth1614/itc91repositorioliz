<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

class material extends Controller
{
   public function mostrar(){
       return view('Material');

   }
}
