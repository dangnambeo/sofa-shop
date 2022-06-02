<?php

namespace App\Http\Controllers;

use App\category;
use App\products;
use Illuminate\Http\Request;

class pageController extends Controller
{
    public function Index(){
      $sp_all = products::orderBy('id','desc')->paginate(12);
      return view('shop-page.index',compact('sp_all'));
    }
    public function viewall(){
        $sp_all =products::orderBy('id','desc')->paginate(12);
        return view('shop-page.viewall',compact('sp_all'));
    }
    public function viewpage($id){
        $cate_page = category::find($id);
        $sp_cate = products::where('cate_id',$id)->paginate(12);
        return view('shop-page.view-page',compact('sp_cate','cate_page'));
    }
    public function viewproducts($id){
        $sp_page = products::find($id);
        $sp_other = products::orderBy('id','desc')->paginate(6);
        return view('shop-page.viewproducts',compact('sp_page','sp_other'));
    }
}
