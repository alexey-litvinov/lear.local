<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
/**
 * Первый контроллер
 */
class FirstController extends Controller
{

  public function show($tag){

    $id = "Отработало заебато";
    $tag = "<h1>".$id."</h1>";

    return $tag;
  }
}
