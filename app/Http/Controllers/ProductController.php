<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product()
    {   $products = array(1,2,3,4,5,6,7,8,9,10);

    
        return view('/products/all')->with('products',($products));
    }

    public function newArrivals()
    {
        $products = array(1,2,3,4,5,6,7,8,9,10);

    
        return view('/products/new-arrivals')->with('products',($products));
    }
}
