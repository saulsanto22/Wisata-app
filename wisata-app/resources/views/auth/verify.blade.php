@extends('layouts.app')
@section('title','Verifikasi Akun')
    

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <p>Silahkan Vertifikasi email Anda </p>
                 <div>
                    {{ __(Auth::user()->email) }}
                 </div>
                 


                </div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Tautan verifikasi baru telah dikirim ke alamat email Anda.') }}
                        </div>
                    @endif

                 
                    {{ __('Jika Belum menerima link') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Klik disini') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
