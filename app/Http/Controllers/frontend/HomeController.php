<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Menu;

class HomeController extends Controller
{
    public  function index()
    {
        return view('frontend.home');
    }
}
