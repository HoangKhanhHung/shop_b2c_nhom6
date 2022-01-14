<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class FeController extends Controller
{
    //
    public function index()
    {
        return view('fe.layout');
    }

    public function home()
    {
        $lastProducts = Product::orderBy('id', 'DESC')->paginate(4);
        $topNameProducts = Product::orderBy('name', 'DESC')->paginate(4);
        $topContentProducts = Product::orderBy('content', 'DESC')->paginate(4);
        return view('fe.home',compact('lastProducts','topContentProducts','topNameProducts'));
    }


}
