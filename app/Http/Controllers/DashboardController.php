<?php

namespace App\Http\Controllers;

use App\Models\WisataPackage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        // dd($request->all());
        $wisata_packages = WisataPackage::paginate(25);
        return view('pages.dashboard', ['wisata_packages' => $wisata_packages]);
    }
    public function search(Request $request)
    {
        // dd($request->all());

        if ($request->has('cari')) {
            $wisata_packages = WisataPackage::search($request->get('cari'))->get();
        } else {
            $wisata_packages = WisataPackage::get();
        }
        return view('pages.dashboard', ['wisata_packages' => $wisata_packages]);
    }
}
