<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Slider;

class ProductCobntroller extends Controller
{
    function index2(){
        $products=Product::all();
        $sliders=Slider::all();
        return view('product',compact('products','sliders'));

    }
}
