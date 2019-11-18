<?php

namespace App\Http\Controllers;
use App\Menu;
use App\Helpers\Helper;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function test(){
      $menu = Helper::getMenu(0);
      return view("principal")->with([
        'menu' => $menu,
      ]);
    }
}
