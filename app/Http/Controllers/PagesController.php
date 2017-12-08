<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function index(){

        return "<h1>Мой кастомный метод контроллера</h1>";
    }
    // return "<h1>Хуйня</h1>";
}
