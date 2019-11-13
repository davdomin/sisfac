<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function test(){
      $data ="Hola Mundo";
      return $data;
    }
}
