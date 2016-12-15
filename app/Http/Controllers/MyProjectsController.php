<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyProjectsController extends Controller
{
  public function index()
  {
      return view('myprojects.myprojects');
  }

  public function __construct() {
       $this->middleware('auth');
   }
   
}
