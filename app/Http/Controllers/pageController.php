<?php

namespace App\Http\Controllers;

use App\products;
use Illuminate\Http\Request;

class pageController extends Controller
{
    public function Index(){
      $sp_all = products::orderBy('id','desc')->paginate(12);
      return view('shop-page.index',compact('sp_all'));
    }
    public function viewall(){

    }
}
