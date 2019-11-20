<?php

namespace App\Http\Controllers;
use App\Menu;
use App\Helpers\Helper;
use Illuminate\Http\Request;


class MainController extends Controller
{
    //
    public function getJSON(){
      $items="";
      $opcion = trim($_GET["opcion"]);
      switch ($opcion) {
        case "getOpciones":
          $items= Menu::where("id_parent","<>",0)->get();
        break;
        case "getMenu":
          $items= Menu::where("id",$_GET["id_menu"])->get();
        break;
      }

      return response()->json($items);
    }

    public function showMenu(){
      $menu = Helper::getMenu(0);
      $autocomplete = Menu::select("nombre","url")->where("id_parent","<>",0)->get();
      return view("principal")->with([
        'menu' => $menu,
        'autocomplete' => $autocomplete->toJson(),
      ]);
    }
}
