@extends('layouts.app')

@section('content')


@if (sizeof($products) == 0)
<div class="jumbotron jumbotron-fluid bg-white" style="margin-top: -2%">
  <div class="container  text-dark">
      <h1 class="display-4">Oops, The Product you searched does not exist.</h1>
  </div>
</div>
@endif


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
@endsection
