<?php

namespace App\Http\Controllers;

use App\discount;
use Illuminate\Http\Request;

class discountController extends Controller
{
    public function Listdiscount(){
        $sale = discount::all();
        return view('admin.Discount.list-discount',compact('sale'));
    }
    public function getAdddDiscount(){
        return view('admin.Discount.add-discount');
    }
    public function postAddDiscount(Request $request){
        $sale = new discount;
        $sale ->description = $request->description;
        $sale ->percent = $request->percent;
        $sale ->time = $request->time;
        $sale ->save();
        alert()->toast('Thêm ưu đãi thành công', 'success')->persistent(false)->autoClose(1200);
        return redirect(route('listdiscount'));
    }
}
