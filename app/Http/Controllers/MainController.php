<?php

namespace App\Http\Controllers;
use App\Menu;
use App\Helpers\Helper;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function getOpciones(){
      return Menu::where("id_parent","<>",0)->get(["nombre as text","icon as img"])->toJson();
    }

    public function test(){
      $menu = Helper::getMenu(0);
      $autocomplete = Menu::select("nombre","url")->where("id_parent","<>",0)->get();
      return view("principal")->with([
        'menu' => $menu,
        'autocomplete' => $autocomplete->toJson(),
      ]);
    }
}
