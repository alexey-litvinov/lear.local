<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Core extends Controller
{
    public function zalupa($test1){

      $test1 = "<h2>Заработало, ебать</h2>";

      return $test1. ", ну нихуя себе";
    }

    public function getArticle($id_article){


      return $id_article;
    }

    public function getArticles(){


      return 'Вывод всех статей';
    }
}
