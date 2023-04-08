<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\GalleryRequest;
use App\Models\Gallery;
use App\Models\WisataPackage;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Illuminate\Http\Str;

class GalleryController extends Controller
{
    public function index(Request $request)
    {
        $paginate = 5;
        $item = Gallery::with(['wisata_package'])->paginate($paginate);
        return view('pages.admin.gallery.index', [
            'items' => $item
        ])->with('i', ($request->input('page', 1) - 1) * $paginate);
    }

    public function create()
    {
        $wisata_packages = WisataPackage::all();
        return view('pages.admin.gallery.create', [
            'wisata_packages' => $wisata_packages
        ]);
    }
    public function store(GalleryRequest $request)
    {
        // utk menyimpan data 
        // utk memanggil semua form bisa menggunakan fungsi request
        $data = $request->all();
        $data["image"] = $request->file('image')->store(
            'asset/gallery',
            'public'
        );

        Gallery::create($data);
        return redirect()->route('gallery.index')->withSuccess('Galery Berhasil Ditambahkan!!');
    }

    public function edit($id)
    {
        $item = Gallery::findOrFail($id);
        $wisata_packages = WisataPackage::all();
        return view('pages.admin.gallery.edit', [
            'item' => $item,
            'wisata_packages' => $wisata_packages
        ]);
    }
    public function update(GalleryRequest $request, $id)
    {
        //
        $data = $request->all();
        $data["image"] = $request->file('image')->store(
            'asset/gallery',
            'public'
        );

        $item = Gallery::findOrFail($id);
        $item->update($data);
        return redirect()->route('gallery.index')->with('info', 'Paket Data Wisata Berhasil Dirubah!!');
    }

    public function destroy($id)
    {
        //
        $item = Gallery::findOrFail($id);
        $item->delete();
        Alert::error('Hapus', 'Paket Wisata Berhasil dihapus');
        return redirect()->route('gallery.index');
    }
}
