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
      $clase ="class='waves-effect'"  ;
          if ($itemMenu->id_parent == 0){
            $clase ="class='subheader'";
          }
         $html .="<li><a $clase href='".$itemMenu->url ."'>".$itemMenu->nombre."</a>";
  		   $html .= "<ul class='nav nav-list'>".self::getMenu($itemMenu->id)."</ul>"; //call  recursively
   		   $html .= "</li>";
    }
    return $html;
  }


}
?>
