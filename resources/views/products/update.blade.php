@extends('layouts.app')

@section('content')
<div class="container">
  <div class="h1">
              
    Update Product
  </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            
        </div>
    </div>
    <div class="card">
        <div class="card-body">
        <form method="POST" action="/products/{{$product->id}}" enctype="multipart/form-data">
            @method('patch')
                @csrf
                <div class="form-group">
                  <label for="prodnama">Input Product Name</label>
                <input type="text" class="form-control col-md-4 col-form-label text-md-right
                @error('prodnama') is-invalid @enderror" id="prodnama"  placeholder="Product Name" name="prodnama" value="{{$product->prodnama}}">
                    @error('prodnama')
                      <div class="invalid-feedback">
                          {{$message}}
                      </div>  
                    @enderror
                </div>

                <div class="form-group">
                  <label for="desc">Input Product Desc</label>
                <textarea class="form-control col-md-4 col-form-label text-md-right
                @error('desc') is-invalid @enderror" id="desc"  placeholder="Product Desc" name="desc" value="{{$product->desc}}"></textarea>
                    @error('desc')
                      <div class="invalid-feedback">
                          {{$message}}
                      </div>  
                    @enderror
                </div>


                <div class="form-group">
                    <label for="stock">Input Product Stock</label>
                  <input type="number" class="form-control col-md-4 col-form-label text-md-right
                  @error('stock') is-invalid @enderror" id="stock"  placeholder="Product Stock" name="stock" value="{{$product->stock}}">
                      @error('stock')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>  
                      @enderror
                </div>

                <div class="form-group">
                    <label for="price">Input Product Price</label>
                  <input type="number" class="form-control col-md-4 col-form-label text-md-right
                  @error('price') is-invalid @enderror" id="price"  placeholder="Product Price" name="price" value="{{$product->price}}">
                      @error('price')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>  
                      @enderror
                </div>

                
    
                <button type="submit" class="btn btn-dark">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
