<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models;
use App\Models\products;

class ProductsController extends Controller
{
    public function register(Request $request){
    /*
    $products = products::create([
        'name' => 'ecommerce products',
        'unit' => '10',
        'price' => '50',
        'quantity' => '10',
        ]);
        echo 'products: ', $products->name; */
    return view('products.register');
    }
     function store(Request $request)
    {
        $products = new products();
        $products->name= $request->name;
        $products->unit = $request->unit;
        $products->price = $request->price;
        $products->quantity = $request->quantity;
        $is_saved = $products->save();

        if($is_saved){
            echo "Record saved successfully.";
            }
        else{
          echo "Sorry, try again something went wrong.";
             }
               
    }
    public function get_all()
    {
     $products = products::all();
     return view('products.get_all', compact('products'));
    }
    
   /* function get_all(){
        $products=products::all();
        return view('products.list' $products);
    }
*/
    
}