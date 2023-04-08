@extends('layouts.app')

@section('title','TourSite')


@section('content')
<header class="text-center">
      <h1>
Jika kamu sedang berada di
<br> 
kota Bandung dan ingin menikmati sunset 
<br>
indah di sore hari, maka bisa datang langsung ke tempat wisata 
      </h1>
      <p class="mt-3">
        Jaga imunitas dengan berwisata
        <br />
      
      </p>
      <a href="#popular" class="btn btn-get-started px-4 mt-4">
        Get Started
      </a>
    </header>
    <main>
      <div class="container">
        <section class="section-stats row justify-content-center" id="stats">
          <div class="col-3 col-md-2 stats-detail">
            <h2>20K</h2>
            <p>Members</p>
          </div>
          <div class="col-3 col-md-2 stats-detail">
            <h2>12</h2>
            <p>Wisata</p>
          </div>
          <div class="col-3 col-md-2 stats-detail">
            <h2>3K</h2>
            <p>Hotels</p>
          </div>
          <div class="col-3 col-md-2 stats-detail">
            <h2>72</h2>
            <p>Partners</p>
          </div>
        </section>
      </div>
      <section class="section-popular" id="popular">
        <div class="container">
          <div class="row">
            <div class="col text-center section-popular-heading">
              <h2>Objek Wisata</h2>
              <p>
              Jaga Imunmu dengan Berwisata!
                <br />
            
              </p>
            </div>
          </div>
        </div>
      </section>
       <section class="section-popular-content" id="popularContent">
        <div class="container">
          <div class="section-popular-travel row justify-content-center">
            @foreach ($items as $item)
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
         
          </div>
        </div>
      </section>
     
      <section class="section-networks" id="networks">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <h2>Our Networks</h2>
              <p>
                Companies are trusted us
                <br />
                more than just a trip
              </p>
            </div>
            <div class="col-md-8 text-center">
              <img src="frontend/images/partner.png" class="img-patner" />
            </div>
          </div>
        </div>
      </section>
      <section class="section-testimonials-heading" id="testimonialsHeading">
        <div class="container">
          <div class="row">
            <div class="col text-center">
              <h2>They Are Loving Us</h2>
              <p>
                Moments were giving them
                <br />
                the best experience
              </p>
            </div>
          </div>
        </div>
      </section>
      <section class="section-testimonials-content" id="testimonialsContent">
        <div class="container">
          <div
            class="section-popular-travel row justify-content-center match-height"
          >
            <div class="col-sm-6 col-md-6 col-lg-4">
              <div class="card card-testimonial text-center">
                <div class="testimonial-content">
                  <img
                    src="frontend/images/avatar-2.png"
                    alt=""
                    class="mb-4 rounded-circle"
                  />
                  <h3 class="mb-4">Lily</h3>
                  <p class="testimonials">
                    “ It was glorious and I could not stop to say wohooo for
                    every single moment Dankeeeeee “
                  </p>
                </div>
                <hr />
                <p class="trip-to mt-2">Berwisata ke Kampoeng Tulip</p>
              </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4">
              <div class="card card-testimonial text-center">
                <div class="testimonial-content">
                  <img
                    src="frontend/images/avatar-2.png"
                    alt=""
                    class="mb-4 rounded-circle"
                  />
                  <h3 class="mb-4">Shayna</h3>
                  <p class="testimonials">
                    “ The trip was amazing and I saw something beautiful in that
                    Island that makes me want to learn more “
                  </p>
                </div>
                <hr />
                <p class="trip-to mt-2">Liburan ke Kampung Tulip</p>
              </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4">
              <div class="card card-testimonial text-center">
                <div class="testimonial-content mb-auto">
                  <img
                    src="frontend/images/avatar-3.png"
                    alt=""
                    class="mb-4 rounded-circle"
                  />
                  <h3 class="mb-4">Shabrina</h3>
                  <p class="testimonials">
                    “ I loved it when the waves was shaking harder — I was
                    scared too “
                  </p>
                </div>
                <hr />
                <p class="trip-to mt-2">Liburan ke Ranca Upas</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 text-center">
              <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">
                I Need Help
              </a>
              
            </div>
          </div>
        </div>
      </section>



































      
    </main>

@endsection