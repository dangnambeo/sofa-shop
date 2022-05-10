<?php

namespace App\Http\Controllers;

use App\products;
use Illuminate\Http\Request;

class productsController extends Controller
{
    public function ListProduc(){
        $sp = products::all();
        return view('admin.products.list-produc',compact('sp'));
    }
    public function getAddProducts(){

    }
}
