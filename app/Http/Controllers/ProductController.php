<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class Productcontroller extends Controller
{
    //
    
    public function product(Product $product)
    {
        return view('trades/product')->with(['products' => $product->get()]);
    }
}
