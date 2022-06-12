<?php

namespace App\Http\Controllers;

use App\orders;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function dashboard(){
        $sum_order= orders::sum('number');
        return view('admin.dashboard.turnover',compact('sum_order'));
    }
}
