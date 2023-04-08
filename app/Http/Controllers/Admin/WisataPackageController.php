<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\WisataPackageRequest;
use App\Models\WisataPackage;
// use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Alert;

class WisataPackageController extends Controller
{
    //
    public function index(Request $request)
    {

        $paginate = 5;
        $items = WisataPackage::paginate($paginate);
        return view('pages.admin.wisata-package.index', [
            'items' => $items
        ])->with('i', ($request->input('page', 1) - 1) * $paginate);

        // return view('pages.home')
    }

    public function create()
    {
        return view('pages.admin.wisata-package.create');
    }
    public function store(WisataPackageRequest $request)
    {
        // utk menyimpan data 
        // utk memanggil semua form bisa menggunakan fungsi request
        $data = $request->all();
        // dd($data['nama']);
        $data['slug'] = Str::slug($request->judul);
        // dd($data['slug']);
        WisataPackage::create($data);
        Alert::success('Pesan', 'Paket Wisata Behasil ditambah');
        return redirect()->route('wisata-package.index');
    }





    public function edit($id)
    {
        //
        $item = WisataPackage::findOrFail($id);
        return view('pages.admin.wisata-package.edit', [
            'item' => $item
        ]);
    }
    public function update(WisataPackageRequest $request, $id)
    {
        //
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        $item = WisataPackage::findOrFail($id);
        $item->update($data);
        Alert::info('Pesan', 'Paket Wisata Behasil Diubah');

        return redirect()->route('wisata-package.index');
    }
    public function destroy($id)
    {
        //
        $item = WisataPackage::findOrFail($id);
        $item->delete();
        Alert::error('Hapus', 'Paket Wisata Berhasil dihapus');
        return redirect()->route('wisata-package.index');
    }
}
