    <!-- Menginculde  -->
    @extends('layouts.admin')


    @section('content')
    <!-- semua yang ditaro disini,akan ditampilkan di admin.blade -->

    <!-- Begin Page Content -->
    <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Paket Wisata {{ $item->title}}</h1>
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
            <form action="{{ route('wisata-package.update',$item->id)}}" method="post">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" name="judul" class="form-control" placeholder="Judul" value="{{$item->judul}}">
            </div>
            <div class="form-group">
                <label for="lokasi">Location</label>
                <input type="text" name="lokasi" class="form-control" placeholder="Lokasi" value="{{$item->lokasi}}">
            </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea class="form-control d-block w-100" name="deskripsi" rows="6">{{$item->deskripsi}}</textarea>
        </div>
     
        <div class="form-group">
        <label label for="makanan_khas">Makanan Khas</label>
        <input type="text" name="makanan_khas" class="form-control" placeholder="Makanan Khas" value="{{ $item->makanan_khas}}">
        </div>
     
        <div class="form-group">
        <label for="durasi">Durasi</label>
        <input type="text" name="durasi" class="form-control" placeholder="Durasi" value="{{$item->durasi}}">
        </div>
        <div class="form-group">
        <label for="type">Type</label>
        <input type="text" name="type" class="form-control" placeholder="Type" value="{{$item->type}}">
        </div>
        <div class="form-group">
        <label for="harga_masuk">Tiket   Masuk</label>
        <input type="number" name="harga_masuk" class="form-control" placeholder="Harga Masuk" value="{{$item->harga_masuk}}">
 
        </div>

        <button type="submit" class="btn btn-primary btn-block">Ubah</button>
        
        </form>
        </div>
    </div>


    </div>
    <!-- /.container-fluid -->

    @endsection