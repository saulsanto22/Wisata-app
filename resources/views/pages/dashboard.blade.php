@extends('layouts.app')

@section('title','WebsiteKu')


@section('content')
    
<header class="py-5">
    <div class="container px-lg-5 my-5">
      <div class="text-center">
        <h1 class="display-4 text-canter">Wisata</h1>
        <p class="lead">"Traveling adalah cara mengenal Tuhan, alam sekitar, orang lain, dan diri sendiri." 
          "Pisau harus diasah agar tetap tajam. Liburan sejenak akan mengasah ketajaman Anda dalam melakukan segala pekerjaan." 
          "Jalan-jalan adalah satu-satunya hal yang dapat kamu beli, namun membuat kamu makin kaya.".</p>
      

        <form action= "{{route('paket-wisata.seacrh')}}" method="GET">
          <div class="form-group">
            <input type="text" class="form-control" name = "cari" id="formGroupExampleInput" placeholder="Cari wisatamu disini!">
          </div>
          <button type="submit" class="btn btn-primary btn-lg"><i class="fas fa-search    "></i></button>
        </form>
     
   
        </p>
      </div>
    </div>
  </header>

  @if (count($wisata_packages)>0)
       <section class="section-popular-content" id="popularContent">
    <div class="container mt-5">
      <div class="section-popular-travel row justify-content-center">
        @foreach ($wisata_packages as $item)
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="card-travel text-center d-flex flex-column"
           style="background-image: url('{{$item->galleries->count() ?
          Storage::url($item->galleries->first()->image) : ''}}');">
          
            <div class="travel-country">{{$item->lokasi}}</div>
            <div class="travel-country">Rp. {{$item->harga_masuk}}</div>
            <div class="travel-location">{{$item->judul}}</div>
            <div class="travel-button mt-auto">
              <a href="{{ route('detail',$item->slug)}}" class="btn btn-travel-details px-4">
                View Details
              </a>
            </div>
          </div>
        </div>
        @endforeach
        @else
        <div class="text-center">
     Hasil Pencarian  dengan kata kunci <strong>"{{request('cari')}}"</strong> Tidak Ditemukan 
        </div>

     
      </div>
    </div>
    
  @endif
  </section>

 
 
@endsection