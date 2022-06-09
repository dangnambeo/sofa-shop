<?php

namespace App\Http\Controllers;

use App\bill;
use App\custormer;
use App\orders;
use App\products;
use Illuminate\Http\Request;

class BillController extends Controller
{
    public function listBill(){
        $bill = bill::all();
        return view('admin.bill.list-bill',compact('bill'));
    }
    public function listOrder($id){
        $bill= bill::find($id);
       // $customer = custormer::where('id',)
        $order = orders::join('products AS sp','sp.id','=','orders.product_id')
            ->join('discount AS sale','sp.discount_id','=','sale.id')
            ->where('bill_id',$id)
            ->select('sp.name AS name_sp','orders.price AS price_sp','orders.number as sl','sale.percent as sale')->get();
        return view('admin.bill.list-order',compact('bill','order'));
    }
}