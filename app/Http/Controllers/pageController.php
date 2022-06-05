<?php

namespace App\Http\Controllers;

use App\bill;
use App\category;
use App\custormer;
use App\orders;
use App\products;
use App\cart;
use Session;
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

    public function addCart(Request $request, $id){
        $product = products::where('id',$id)->first();
        if ($product != null){
            $oldcart = Session('Cart') ? Session('Cart') : null;
            $newCart = new cart($oldcart);
            $newCart->AddCart($product, $id);

            $request->session()->put('Cart', $newCart);
        }
        return view('shop-page.cart');
    }
    public function delCart(Request $request, $id){
        $oldcart = Session('Cart') ? Session('Cart') : null;
        $newCart = new cart($oldcart);
        $newCart->DelItemCart($id);
        if (count($newCart ->products) > 0){
            $request->session()->put('Cart', $newCart);
        }
        else{
            $request->session()->forget('Cart');
        }
        return view('shop-page.cart');
    }
    public function listCart(){
        return view('shop-page.viewlist-cart');
    }
    public function delListCart(Request $request, $id){
        $oldcart = Session('Cart') ? Session('Cart') : null;
        $newCart = new cart($oldcart);
        $newCart->DelItemCart($id);
        if (count($newCart ->products) > 0){
            $request->session()->put('Cart', $newCart);
        }
        else{
            $request->session()->forget('Cart');
        }
        return view('shop-page.list-cart');
    }
    public function editListCart(Request $request, $id, $quanty){
        $oldcart = Session('Cart') ? Session('Cart') : null;
        $newCart = new cart($oldcart);
        $newCart->UpdateItemCart($id, $quanty);
        $request->session()->put('Cart', $newCart);

        return view('shop-page.list-cart');
    }
    public function Delivery(){
        return view('shop-page.delivery');
    }
    public function postOrder(Request $request){
        $cartInfo = Session::get("Cart")->products;

        $customer = new custormer;
        $customer ->customer_name = $request->customer_name;
        $customer ->phone = $request->phone;
        $customer ->address = $request->address;
        $customer->save();

        $bill = new bill;
        $bill -> customer_id = $customer->id;
        $bill ->total = Session::get("Cart")->totalPrice;
        $bill ->save();

        if (Session::has("Cart")>0){
            foreach ($cartInfo as $key => $list){
                $order = new orders;
                $order ->bill_id = $bill->id;
                $order ->product_id = $list['productInfo']->id;
                $order ->number = $list['quanty'];
                $order ->price = $list['productInfo']->price;
                $order ->save();
            }
        }
        dd('ok');
        //return redirect(route('index'));
    }
}
