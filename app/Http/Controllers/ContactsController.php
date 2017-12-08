<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactsController extends Controller
{
  public function show(){
    $data = [
      'title' => 'Контакты',
      'city' => 'г.Донецк',
      'street' => 'ул. Артёма 125',
      'phone' => 'тел. +38(066)657 14 49',
      'email' => 'info@rost-dnr.ru',
    ];

    if (view()->exists('contacts')) {
      return view('contacts', $data);
    }
    abort(404);
  }
}
