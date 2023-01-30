<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;


class ExhibitController extends Controller
{
    //
    public function exhibit(Product $exhibit)
    {
        return view('trades/exhibit')->with(['exhibit' => $exhibit->get()]);
    }
    
    public function store(Request $request, Product $product)
    {
        $input = $request['exhibit'];
        $product->fill($input);
        $product->user_id=Auth::id();
        $product->image_path="";
        $product->save();
        return redirect('/');
        
        
    }
    public function chat(Chat $chat)
    {
        return view('trades/chat')->with(['chat' => $chat->get()]);
    }
}
