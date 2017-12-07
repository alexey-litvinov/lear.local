<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function index(){

        return "Мой кастомный метод контроллера";
    }
    // return "<h1>Хуйня</h1>";
}
