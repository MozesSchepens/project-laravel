<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('shop.index', compact('products'));
    }
    

    public function jerseys()
    {
        return view('shop.jerseys');
    }

    public function accessories()
    {
        return view('shop.accessories');
    }

    public function equipment()
    {
        return view('shop.equipment');
    }

    public function product1()
    {
        return view('shop.product1');
    }

    public function product2()
    {
        return view('shop.product2');
    }

    public function product3()
    {
        return view('shop.product3');
    }

    public function product4()
    {
        return view('shop.product4');
    }
}
