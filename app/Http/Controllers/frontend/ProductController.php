<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product()
    {
        return view('frontend.product');
    }
    public function detailproduct()
    {
        return view('frontend.detailproduct');
    }
}