<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    //

    public function index(){
        $orders=DB::table("orders")
                ->leftJoin("products","orders.product_id","=","products.id")
                ->get();
        return view('pages.orders.index',compact("orders"));
    }
}
