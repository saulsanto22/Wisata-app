<?php

namespace App\Http\Controllers;

use App\Models\WisataPackage;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $items = WisataPackage::with('galleries')->get();
        return view('pages.landing', ['items' => $items]);
    }
}
