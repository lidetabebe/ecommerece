<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function register()
    {
        //For testing purpose, use hard coded data, till we design UI
      
      return view('products.register');
    }
    public function store(){
        //For testing purpose, use hard coded data, till we design UI
      $products=new products();
      $products->name=$request->name;
      $products->id=$request->id;
      $products->unit=$request->unit;
      $products->quantity=$request->quantity;
      $products->price=$request->price;
      $is_successed=$products:: save();
    }

}

