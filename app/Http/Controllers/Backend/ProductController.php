<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    public function index(){
        $products=DB::table("products")->get();
        return view('pages.products.index',compact("products"));
    }
    public function create(){

        return view('pages.products.create');
    }
    public function store(Request $request){
        DB::table("products")->updateOrInsert(
            (["name" => $request->name]),
            ["name"=>$request->name,"price"=>$request->price,"quantity"=>$request->quantity]
            );
            return back()->with("success","Product added successfully");

    }
    public function edit($id){
        $product=DB::table("products")->where("id",$id)->first();
        return view('pages.products.edit',compact("product"));
    }
    public function update(Request $request,$id){
        DB::table("products")->where("id",$id)->update([
                "name"=>$request->name,
                "price"=>$request->price
            ]);
            DB::table("products")->where("id",$id)->increment("quantity",$request->quantity);
            return back()->with("success","Product updated successfully");
    }

    public function sell($id){
        $product=DB::table("products")->where("id",$id)->first();
        return view('pages.products.sell',compact("product"));
    }

    public function sold(Request $request,$id){
       
        $sold=DB::table("products")->where("id",$id)->decrement("quantity",$request->quantity);
        $total_price=$request->price*$request->quantity;
        if($sold){
            DB::table("orders")->insert([
               "product_id"=>$id,
               "total_quantity"=>$request->quantity,
               "total_price"=> $total_price,
            ]);
            return back()->with("success","Product sold successfully");
        }
    }
}
