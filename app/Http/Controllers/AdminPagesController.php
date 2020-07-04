<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;



class AdminPagesController extends Controller
{
     public function index(){
         return view('admin.pages.index');
     }

     public function product_create(){
        return view('admin.pages.product.create');
    }

    public function product_store(Request $request){

        $product = new Product;
         $product -> title = $request -> title;
         $product -> description = $request -> description;
         $product -> price = $request -> price;
         $product -> quantity = $request -> quantity;

         $product -> slug = Str::slug($request -> title);
         $product -> category_id = 1 ;
         $product -> brand_id = 1 ;

         $product -> admin_id = 1 ;

         $product-> save();

         return redirect()->route('admin.product.create');




    }
}
