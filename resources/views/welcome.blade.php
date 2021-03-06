<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                color: #FCEEC0;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;

            }
            body{
              background-image: url(https://i.pinimg.com/originals/ec/3f/08/ec3f081a118bae0175cb43c68e673198.jpg);
              background-size: cover;
            }

            .full-height {
                height: 100vh;
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
                color: #FCEEC0;
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
        </style>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <div class="content text-warning">
                <div class="title m-b-md ">
                    Galaxy Gala
                </div>

                <p style="font-size:2em;  font-weight: bold;">A photo gallery for people who like to reach for the stars!</p>

            </div>
        </div>

            <div class='container card-group flex-column col-md-9'>
              <h1 class='text-center text-warning'>Images of The Stars</h1>
              @foreach ($exhibits as $exhibit)
              <div class="card mt-3 mb-3">
                <img class="card-img-top" src="{{$exhibit->image_URL}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">{{$exhibit->exhibit_name}}</h5>
                  <p class="card-text">Artist:{{$exhibit->artist}} Created on:{{$exhibit->year}}</p>
                  <p class="card-text">{{$exhibit->description}}</p>
                </div>
                <div class="card-footer bg-dark">
                  <small class="text-muted">Posted by {{$exhibit->user->name}} on {{$exhibit->updated_at}}.</small>
                </div>
              </div>
              @endforeach
              <button type="submit" class="text-center btn btn-primary">
                <a class="text-warning"href="/exhibits/create"><h2>Add An Exhibit</h2></a>
              </button>

      </div>
    </body>
</html>
