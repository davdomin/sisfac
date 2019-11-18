<?php
/**
 *
 */
 namespace App\Helpers;

use App\Menu;
class Helper
{
  public static function  getMenu($parent_id) {
  	$html = "";
  	$menu = Menu::where("id_parent",$parent_id)->get();
    foreach ($menu as $itemMenu) {
         $html .="<li><a href='".$itemMenu->url ."'>".$itemMenu->nombre."</a>";
  		   $html .= "<ul class='nav nav-list'>".self::getMenu($itemMenu->id)."</ul>"; //call  recursively
   		   $html .= "</li>";
    }
    return $html;
  }
}
?>
