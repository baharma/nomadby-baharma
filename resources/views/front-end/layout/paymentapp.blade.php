<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nomads</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="{{asset('nomads-desaint-main/script/xzoom/xzoom.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="{{asset('nomads-desaint-main/script/gijgo/css/gijgo.min.css')}}">
    <link
        href="https://fonts.googleapis.com/css2?family=Assistant:wght@200;300;400;500;600&family=Playfair+Display:ital@0;1&family=Roboto+Slab&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{asset('nomads-desaint-main/styles/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('nomads-desaint-main/styles/main.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <nav class=" justify-content-center navbar navbar-expand-lg navbar-light bg-white">
            <div class="navbar-nav ml-auto mr-auto mr-sm-auto mr-lg-0 mr-md-auto">
                <a href="index.html" class="navbar-brand">
                    <img src="{{asset('nomads-desaint-main/img/logo.png')}}" alt="" />
                </a>
            </div>
            <ul class="navbar-nav mr-auto d-none d-lg-block">
                <li>
                    <span class="text-muted">
                        | &nbsp; Beyond the explorer of the world
                    </span>
                </li>
            </ul>
        </nav>
    </div>
    @yield('content')


    @include('front-end.layout.footer')
    <script src="script/"></script>
    <script src="{{asset('nomads-desaint-main/script/jquery-3.6.1.min.js')}}"></script>
    <script src="{{asset('nomads-desaint-main/script/bootstrap.js')}}"></script>
    <script src="{{asset('nomads-desaint-main/script/retina.min.js')}}"></script>
    <script src="{{asset('nomads-desaint-main/script/retina.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/6708b4c02e.js" crossorigin="anonymous"></script>
    <script src="{{asset('nomads-desaint-main/script/xzoom/xzoom.min.js')}}"></script>
    <script src="{{asset('nomads-desaint-main/script/gijgo/js/gijgo.min.js')}}"></script>
@stack('script')
</body>

</html>