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
        return view('admin.products.add-produc');
    }
    public function postAddProducts(Request $request){
        $sp = new products;
        $sp->name = $request->name;
        $sp->description = $request->description;
        $sp->price = $request->price;
        $sp->quantity = $request->quantity;
        $sp->cate_id = $request->cate_id;
        $sp->discount_id = $request->discount_id;
        if ($sp->save()) {
            if ($request->hasFile('img-sp')) {
                $file = $request->img;
                $file_name=$file->getClientOriginalName();
                $file->move('upload/img-sp', $file->getClientOriginalName());
                $sp->img = "upload/img-sp/" . $file->getClientOriginalName();
                $sp->save();
            }
        }
        return redirect(route('list-produc'));
    }
}
