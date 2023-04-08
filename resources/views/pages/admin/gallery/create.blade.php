    <!-- Menginculde  -->
    @extends('layouts.admin')


    @section('content')
    <!-- semua yang ditaro disini,akan ditampilkan di admin.blade -->

    <!-- Begin Page Content -->
    <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Gallery</h1>
        </div>


    </div>

{{-- 
    fungsi untuk menampilkan error --}}
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
             
            @endforeach
        </ul>
    </div>
    @endif

    <div class="card shadow">
        <div class="card-body">
            {{-- enctype="multipart/form-data" --}}
            <form action="{{ route('gallery.store')}}" method="post" enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                    <label for="wisata_packages_id">Paket Travel</label>
                    <select name="wisata_packages_id" required= "" class="form-control">
                        <option value="">Pilih Paket Wisata</option>
                    @foreach ( $wisata_packages as $wisata_package)
                  <option value="{{ $wisata_package->id}}">{{$wisata_package->judul}}</option>

                        @endforeach
                    </select>
                   
                </div>
                <div class="form-group">
                    <label for="image">
                        Image
                    </label>
                    <input type="file" name="image" class="form-control" placeholder="Image">
                </div>
        <button type="submit" class="btn btn-primary btn-block">Simpan</button>
        
        </form>
        </div>
    </div>


    </div>
    <!-- /.container-fluid -->

    @endsection