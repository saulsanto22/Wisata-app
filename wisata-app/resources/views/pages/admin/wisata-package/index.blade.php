<!-- Menginculde  -->
@extends('layouts.admin')


@section('content')
<!-- semua yang ditaro disini,akan ditampilkan di admin.blade -->

  <!-- Begin Page Content -->
  <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Paket Wisata</h1>
    <a href="{{ route('wisata-package.create')}}" class="btn-sm btn-primary shadow-sm">
        <i class="fas-plus fa-sm text-white-50">Tambah Wisata</i>
    </a>
</div>
@if (session('succes'))
<div class="alert alert-success">
    {{ session('succes') }}
</div>
@elseif (session('update'))
<div class="alert alert-info">
    {{ session('update') }}
</div>
@elseif (session('delete'))
<div class="alert alert-danger">
    {{ session('delete') }}
</div>
@endif
<div class="row">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
                
                <thead>
                  
                    <tr>
                        <td>No</td>
                       <td>ID</td>
                       <td>Judul</td>
                       <td>Lokasi</td>
                       <td>Type</td>
                       <td>Action</td>
                </tr>
                 
                </thead>
                 <tbody>
                     @forelse ($items as $item)
                     <tr>
                         <td>{{++$i}}</td>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->judul }}</td>
                        <td>{{ $item->lokasi }}</td>
                        <td>{{ $item->type }}</td>               
                    
                        <td>
                            <a href="{{ route('wisata-package.edit',$item->id)}}" class="btn btn-info ">
                                <i class="fa fa-pencil-alt"></i>
                            </a>
                            {{-- {{ route('wisata-package.destroy',$item->id)}} --}}
                            <form action="{{ route('wisata-package.destroy',$item->id)}}" method="POST" class="d-inline">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger delete" data-id="
                            ">
                                <i class="fa fa-trash">
                                </i>
                            </button>
                            </form>
                            </td>
                 </tr>
                     @empty
                         <tr>
                             <td colspan="7" class="text-center">Data Kosong</td>
                         </tr>
                     @endforelse
                 </tbody>
            
            </table>
        </div>
    </div>
</div>


</div>
<!-- /.container-fluid -->

{!! $items->links() !!}


@endsection