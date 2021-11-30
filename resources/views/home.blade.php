@extends('layouts.app')

@section('content')



<div class="container">
    
            @can('isAdmin')
            {{-- validasi menggunakan gate isAdmin untuk menyembunyikan 3 button ini kecuali yg login adalah admin --}}
                <div class="container mt-5">
                    <div class="row mb-5">
                        <div class="col ml-4">
                            <div>
                                <a href="/home/create" class="btn btn-dark">Add Stationary Types</a>
                                <a href="/prodtypes/update" class="btn btn-dark ml-2">Update Stationary Types</a>
                                <a href="/home/add" class="btn btn-dark ml-2">Add Products</a>
                            </div>
                            
                        </div>
                </div>
            @endcan
            
            @guest
            {{-- @guest digunakan untuk akses guest (tanpa login) --}}
            <div class="row">
                @foreach ($products as $product)
                  <div style="margin: 2%">
                    <div class="col">
                      <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{ asset('storage/' . $product->image)}}" alt="">
                        {{-- <img class="card-img-top" src="{{$product->image}}" alt=""> --}}
                        <div class="card-body">
                            <h5 class="card-title">{{$product->prodnama}}</h5>
                            <p>{{$product->desc}}</p><br><br>
                            <p>Harap Login untuk melihat detail produk.</p>
                            {{-- <a href="/products/{{$product->id}}" class="btn btn-dark">Product Detail</a> --}}
                        </div>
                      </div>  
                   </div>
                  </div>
                @endforeach
              {{-- {{$products->withQueryString()->links()}}     --}}
              </div>
            @else
            {{-- disini untuk apabila sudah login (bukan guest) --}}
                @if (session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                @endif
                <div class="row">
                @foreach ($products as $product)
                    <div style="margin: 2%">
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{ asset('storage/' . $product->image)}}" alt="">
                        {{-- <img class="card-img-top" src="{{$product->image}}" alt=""> --}}
                        <div class="card-body">
                            <h5 class="card-title">{{$product->prodnama}}</h5>
                            <p>{{$product->desc}}</p>
                            <a href="/products/{{$product->id}}" class="btn btn-dark">Product Detail</a>
                        </div>
                        </div>  
                    </div>
                    </div>
                @endforeach
                
                </div>
              
            @endguest

            
            <div class="mb-5">
                {{ $products->links() }}
            </div>
            {{-- untuk keperluan paging --}}
            </div>
@endsection
            