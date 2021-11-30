@extends('layouts.app')

@section('content')
<div class="container">
    <div class="container">
        <div class="row"style="margin: 5%">
            
            <div class="col" > 
                <div class="card" style="width: 26rem;">
                    
                    <img class="card-img-top" src="{{ asset('storage/' . $product->image)}}" alt="Card image cap">
                    
                </div>       
            </div>

            <div class="col">
                <h1>{{$product->prodnama}}</h1>
                <h5>Stationary Type : {{$product->ProdType->nama}}</h5>
                <p>{{$product->desc}}</p>
                <h5>Stock : {{$product->stock}}</h5>
                <h5>Price : IDR{{$product->price}}</h5>

                @if ( auth()->user()->email == 'admin@admin.com')
                    <a href="/{{$product->id}}/update" class="btn btn-dark">Edit</a>
                    <form action="/products/{{$product->id}}" method="POST" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                @else
                    <a href="{{route('AddToCart', ['id' => $product->id])}}" class="btn btn-dark">Add To Cart</a>
                @endif
                
                
                
            </div>
            
        </div>
    </div>
</div>
@endsection
