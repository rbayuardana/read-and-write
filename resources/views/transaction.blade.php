@extends('layouts.app')

@section('content')
    
    @if (sizeof($transactions) == 0)    
    <div class="jumbotron jumbotron-fluid bg-white" style="margin-top: -2%">
        <div class="container  text-dark">
            <h1 class="display-4">Oops, Your Transaction History is Empty !</h1>
        </div>
    </div>

    @endif

    <div class="container">
        <div class="row">
            <div class="col-10">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Produk</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Harga Produk</th>
                            <th scope="col">Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($transactions as $tr) 
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$tr->proName}}</td>
                                <td>{{$tr->quantity}}</td>
                                <td>{{$tr->proPrice}}</td>
                                <td>{{$tr->subtotal}}</td>
                            </tr>
                        @endforeach 
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    












@endsection



