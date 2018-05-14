<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function homePage(){
      return view('pages/comingsoon');
    }

    public function loginPage(){
      return view('pages/login-page');
    }

    public function dashboard(){
      return view('dashboard/dashboard');
    }

}
