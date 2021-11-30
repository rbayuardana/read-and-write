@extends('layouts.app')

@section('content')

@guest
  <div class="container">
    <div class="row">
      @foreach ($products as $product)
        <div style="margin: 2%">
          <div class="col">
            <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="{{ asset('storage/' . $product->image)}}" alt="">
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
    </div>
  </div>
@else

  <div class="container">
      <div class="row">
        @foreach ($products as $product)
          <div style="margin: 2%">
            <div class="col">
              <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('storage/' . $product->image)}}" alt="">
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
  </div>
@endguest
@endsection
