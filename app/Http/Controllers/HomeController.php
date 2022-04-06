<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail;

class HomeController extends Controller
{
  public function home()
  {
    $cruds = Detail::all();  
        
    return view('home',compact('cruds'));  
  }
}
