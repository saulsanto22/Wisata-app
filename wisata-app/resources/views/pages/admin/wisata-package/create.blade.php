    <!-- Menginculde  -->
    @extends('layouts.admin')


    @section('content')
    <!-- semua yang ditaro disini,akan ditampilkan di admin.blade -->

    <!-- Begin Page Content -->
    <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Paket Wisata</h1>
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
            <form action="{{ route('wisata-package.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="judul">Judul Wisata</label>
                <input type="text" name="judul" class="form-control" placeholder="Judul" value="{{ old('judul')}}">
            </div>
            <div class="form-group">
                <label for="lokasi">Lokasi</label>
                <input type="text" name="lokasi" class="form-control" placeholder="Lokasi" value="{{ old('lokasi')}}">
            </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea class="form-control d-block w-100" name="deskripsi" rows="6">{{ old('deskripsi')}}</textarea>
        </div>
        <div class="form-group">
            <label for="makanan_khas">Makanan Khas</label>
            <input type="text" name="makanan_khas" class="form-control" placeholder="Makanan Khas" value="{{old('makanan_khas')}}">
        </div>
        <div class="form-group">
            <label for="durasi">Durasi</label>
            <input type="text" name="durasi" class="form-control" placeholder="Durasi" value="{{ old('durasi')}}">
        </div>
        <div class="form-group">
        <label label for="type">Type</label>
        <input type="text" name="type" class="form-control" placeholder="Type" value="{{ old('type')}}">
        </div>
        <div class="form-group">
        <label for="harga_masuk">Jumlah Tarif :</label>
        <input type="number" name="harga_masuk" class="form-control" placeholder="Harga Masuk" value=""}}">
        
        </div>

        <button type="submit" class="btn btn-primary btn-block">Simpan</button>
        
        </form>
        </div>
    </div>


    </div>
    <!-- /.container-fluid -->

    @endsection