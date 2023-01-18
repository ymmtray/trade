<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Front;

class FrontController extends Controller
{
    //


    public function index(Front $front)
    {
        return $front->get();
    }

}