@extends('layouts.app')

@section('title','WebsiteKu')
@section('content')

<div class="container ">
  <nav aria-label="breadcrumb" class="m-4">
      <ol class="breadcrumb ">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Detail</li>
          <li class="breadcrumb-item active" aria-current="page">{{$item->judul}}</li>
      </ol>
  </nav>
</div>

<section class="">
  <div class="container px-34 px-lg-5 my-5">
      <div class="row gx-4 gx-lg-5 align-items-center">
          <div class="col-md-6">
            <img class="card-img-top mb-5 mb-md-0">
              <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                @if ($item->galleries->count())
                <div class="galerry">
              <div class="xzoom-container">
              <img  style="width: 400px"  src="{{ Storage::url($item->galleries->first()->image)}}" alt="" class="xzoom" id="xzoom-default" xoriginal="{{ Storage::url($item->galleries->first()->image)}}"> 
              </div>
                <div class="xzoom-thumbs mt-2" >
              @foreach ($item->galleries as $galleri)
              <a href="{{ Storage::url($galleri->image)}}">
              <img src="{{ Storage::url($galleri->image)}}" alt="" 
              class="xzoom-gallery" style="width: 150px" 
               xpreview="{{ Storage::url($galleri->image)}}" class="mt-2"></a>
              
              @endforeach
               </div>
            </div>
            @endif
                 
              </div>

          </div>
      
          <div class="col-md-6">
            <h1 class="display-3 fw-bolder">Detail Infomarsi Objek Wisata</h1>
            <div class="fs-5 mb-2">
             
              
                <span class="text-decoration-line-through">Dipublikasikan pada  <b>{{$item->created_at->format('d F Y')}}</b> </span>
              
            </div>
            <div class="fs-5 mb-2">  
                <span class="text-decoration-line-through">Harga Masuk :</span>
                <span>Rp. {{$item->harga_masuk}} </span>
            </div>
            <div class="fs-5 mb-2">
              <span class="text-decoration-line-through">Lokasi Wisata :</span>
              <span>{{$item->lokasi}} </span>
          </div>
            <p class="lead">{{$item->deskripsi}}<p>
            <div class="d-flex">
              <hr>
            </div>
        </div>

       
      </div>
  </div>
</section>


@endsection