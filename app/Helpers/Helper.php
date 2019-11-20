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
      if ($itemMenu->id_parent == 0){
          $clase ="class='subheader'";
      }
      $html .=  "<li>";
      $html .="<div class ='collapsible-header'><i class='material-icons'>list</i> <span $clase>".$itemMenu->nombre."</span> </div>";
      $html .= "<div class ='collapsible-body'>";
	    $html .= "<ul class='nav nav-list collection'>".self::getHijos($itemMenu->id)."</ul>"; //call  recursively
      $html .= "</div>";
      $html .=  "</li>";
    }
    return $html;
  }

  public static function getHijos($parent_id) {
    $html = "";
  	$menu = Menu::where("id_parent",$parent_id)->get();
    foreach ($menu as $itemMenu) {
      $html .="<a style='padding:10px;' class='collection-item'>  <div onclick='cargar_menu($itemMenu->id)'>$itemMenu->nombre </div></a>";
    }
    return $html;
  }
}
?>
