<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class FrontController extends Controller
{
    //


    public function index(Product $product)
    {
        return $product->get();
    }

}