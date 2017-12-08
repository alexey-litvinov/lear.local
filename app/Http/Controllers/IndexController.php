<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function show(){
      $data = [
        'title' => 'Главная страница',
        'main-menu' => [],
      ];



      if (view()->exists('index')) {
        return view('index', $data);
      }
      abort(404);
    }
}
