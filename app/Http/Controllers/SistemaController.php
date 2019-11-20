<?php
namespace App\Http\Controllers;

use App\Menu;
use App\Helpers\Helper;
use Illuminate\Http\Request;


class SistemaController extends Controller
{
  public function perfiles(){
    return view("perfiles")->with([
      'a' => 'aaaaaa'
    ]);
  }

}
?>
