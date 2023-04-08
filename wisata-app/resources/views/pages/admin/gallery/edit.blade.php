    <!-- Menginculde  -->
    @extends('layouts.admin')


    @section('content')
    <!-- semua yang ditaro disini,akan ditampilkan di admin.blade -->

    <!-- Begin Page Content -->
    <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Gallery {{ $item->title}}</h1>
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
            <form action="{{ route('gallery.update',$item->id)}}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="wisata_packages_id">Paket Wisata</label>
                <select name="wisata_packages_id" required= "" class="form-control">
                    <option value="{{$item->wisata_packages_id}}">Jangan Diubah</option>
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

        <button type="submit" class="btn btn-primary btn-block">Ubah</button>
        
        </form>
        </div>
    </div>


    </div>
    <!-- /.container-fluid -->

    @endsection