<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VacanciesController extends Controller
{
    public function show(){

      if (view()->exists('vacancies')) {
        return view('vacancies');
      }
    }
}
