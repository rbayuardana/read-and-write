@extends('layouts.app')

@section('content')

    @if (Session::has('cart'))
        <div class="container">
            {{-- View Cart. Fitur Cart yang BELUM kami pasang adalah update cart, 
            delete item, dan checkout yang bekerja. tombol checkout hanya sebatas 
            redirect ke home page. --}}

            <form>
                
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                        <ul class="list-group">
                            @foreach ($products as $product)
                                <li class="list-group-item">
                                    <strong id="proName" value="{{$product['item']['prodnama']}}">{{$product['item']['prodnama']}}</strong>
                                    {{-- <span class="badge">{{$product['qty']}}</span> --}}
                                    <p>Quantity : {{$product['qty']}}</p>
                                    <p>Product Price : IDR.{{$product['item']['price']}}</p>
                                    <strong>Subtotal : IDR.{{$product['price']}}</strong><br><br>

                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                        <strong>Total: IDR.{{$totalPrice}}</strong>
                            <div class="div"><a  class="btn btn-danger" href="/cart/delete">Delete All Items</a></div>
                        
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                        <a type="button" href="/checkout" class="btn btn-success">Checkout</a>
                    </div>
                </div>
            </form>
        </div>
    @else
    <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
            <h1>CART IS EMPTY</h1>
        </div>
    </div>
    @endif

@endsection