<?php

namespace App\Http\Controllers;

use App\bill;
use App\orders;
use Illuminate\Http\Request;

class BillController extends Controller
{
    public function listBill(){
        $bill = bill::all();
        return view('admin.bill.list-bill',compact('bill'));
    }
    public function listOrder($id){
        $bill= bill::find($id);
        $order = orders::where('bill_id',$id)->get();

    }
}
