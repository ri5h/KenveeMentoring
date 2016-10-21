<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class pagesController extends Controller
{
  public function index(){ 
  	return view('pages.home'); 
  }   
}
