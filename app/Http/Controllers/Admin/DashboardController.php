<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\WisataPackage;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index()
    {

        return view('pages.admin.dashboard', [

            'wisata_package' => WisataPackage::count(),
            'gallery' => Gallery::count()


        ]);
    }
}
