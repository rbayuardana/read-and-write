<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                margin-bottom: 20vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .margincard{
                margin: 6%;
                padding-left: 3%;
                
            }
            
            body{
                background-image: url('Images/background.jpg');
                background-repeat: no-repeat;
                background-attachment: fixed;  
                background-size: cover;
                
            }
        }
        </style>
        
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links " >
                    @auth
                        <a href="{{ url('/home') }}"  style="color: #fff;">Home</a>
                    @else
                        <a href="{{ route('login') }}"  style="color: #fff;">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"  style="color: #fff;">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>

            <div class="container">
                <div class="content">
                    <div class="row">
                        <div class="col">
                            <div class="title m-b-md" style="color: #fff; font: larger; text-shadow: #636b6f">
                                ReadAndWrite
                            </div>        
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <form method="GET" action="/products">
                                {{-- @csrf --}}
                                <div class="form-group">
                                    <input type="text"
                                      class="form-control" name="search" id="search" placeholder="Search Here">
                                </div>
                                <button type="submit" class="btn btn-dark">Search</button>
                            </form>
                        </div>
                    </div>

                    
                    <div class="row margincard">
                        @foreach ($prodtypes as $prodtype)
                                  
                            <div class="col">
                                <div class="card mb-4" style="width: 10rem;">
                                    <img class="card-img-top" src="{{ asset('storage/' . $prodtype->img)}}" alt="">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$prodtype->nama}}</h5>
                                        <a href="/prodtypes/{{$prodtype->id}}" class="btn btn-dark">Product Detail</a>
                                    </div>
                                </div>  
                            </div>
                        
                        @endforeach
                    </div>
                        
                    
                    
                   
    
                    {{-- <div class="container"> --}}
                        
                    {{-- </div> --}}
                </div>
            </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>
