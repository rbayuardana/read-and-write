@extends('layouts.app')

@section('content')


<div class="container">
  <div class="h1">
    
    Add Product
  </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
        </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="/products" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="prodnama">Input Product Name</label>
                    <input type="text" class="form-control col-md-4 col-form-label text-md-right
                    @error('prodnama') is-invalid @enderror" id="prodnama"  placeholder="Product Name" name="prodnama" value="{{old('prodnama')}}">
                        @error('prodnama')
                          <div class="invalid-feedback">
                              {{$message}}
                          </div>  
                        @enderror
                    </div>
    
                    <div class="form-group">
                      <label for="desc">Input Product Desc</label>
                    <textarea class="form-control col-md-4 col-form-label text-md-right
                    @error('desc') is-invalid @enderror" id="desc"  placeholder="Product Desc" name="desc" value="{{old('desc')}}"></textarea>
                        @error('desc')
                          <div class="invalid-feedback">
                              {{$message}}
                          </div>  
                        @enderror
                    </div>
    
                    <div class="form-group">
                        <label for="prodtypeId" class="my-1 mr-2">Stationary Type</label><br>
                      <select class="custom-select col-md-4 col-form-label mr-sm-2 form-control 
                      @error('prodtypeId') is-invalid @enderror" id="prodtypeId" name="prodtypeId" >
                        <option selected>Choose...</option>
                        @foreach ($prodtypes as $prodtype)
                            <option value="{{$prodtype->id}}">{{$prodtype->nama}}</option>
                        @endforeach
                      </select>
                          @error('prodtypeId')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>  
                          @enderror
                    </div>
    
                    <div class="form-group">
                        <label for="stock">Input Product Stock</label>
                      <input type="number" class="form-control col-md-4 col-form-label text-md-right
                      @error('stock') is-invalid @enderror" id="stock"  placeholder="Product Stock" name="stock" value="{{old('stock')}}">
                          @error('stock')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>  
                          @enderror
                    </div>
    
                    <div class="form-group">
                        <label for="price">Input Product Price</label>
                      <input type="number" class="form-control col-md-4 col-form-label text-md-right
                      @error('price') is-invalid @enderror" id="price"  placeholder="Product Price" name="price" value="{{old('price')}}">
                          @error('price')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>  
                          @enderror
                    </div>
    
                    <div class="form-group">
                      <label for="image">Input Gambar Produk</label>
                      <input type="file" class="col-md-4 col-form-label text-md-right
                      @error('image') is-invalid @enderror" id="image" name="image" value="{{old('image')}}">
                        @error('image')
                          <div class="invalid-feedback">
                              {{$message}}
                          </div>  
                        @enderror
                    </div>
        
                    <button type="submit" class="btn btn-dark">Add</button>
                </form>
            </div>
        </div>
      </div>
    </div>
</div>
@endsection
