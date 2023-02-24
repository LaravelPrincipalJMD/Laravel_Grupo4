
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Shop Homepage - Start Bootstrap Template</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/stylesproducts.css" rel="stylesheet" />
    <script defer src="{{URL::asset('assets/products.js')}}"></script>
    @vite(['resources/css/app.scss', 'resources/js/app.js', 'resources/css/styles.css','resources/css/stylesproducts.css', 'resources/js/products/scripts.js','resources/css/index.css'])

</head>

<body>
<div id="load-container">
        <div id="loader" class="spinner-border bg-primary" role="status">
            <span class="load"></span>
        </div>
    </div>

    <div id="all">
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <img id="logo" src="{{URL::asset('logo.png')}}" alt="..." />
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#services">WELCOME</a></li>
                        <li class="nav-item"><a class="nav-link" href="#services">SERVICES</a></li>
                        <li class="nav-item"><a class="nav-link" href="#services">PRODUCTS</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">ABOUT</a></li>
                        <li class="nav-item"><a class="nav-link" href="#team">TEAM</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('cartView')}}?idUser={{Auth::user()->id}}">CART</a></li>
                            @guest
                            <i class="fa-solid fa-user text-primary dropdown-toggle mt-2" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"></i>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            </ul>
                            @endif
                            @else
                            <div class="dropdown">
                                <button class="btn btn-primary text-light dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();  document.getElementById('logout-form').submit();">{{ __('Logout')}}</a></li>
                                </ul>
                                <form id="logout-form" action="{{ route('logout')}}" method="POST" class="d-none">
                                    @csrf
                                    {{csrf_field()}}
                                </form>
                            </div>
                            @endguest
                        </div>
                    </ul>
                </div>
            </div>
        </nav>
    <!-- Header-->
    <header class="bg-primary py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">PRODUCTS HUB</h1>
                <p class="lead fw-normal text-white mb-0">JUICY JUICE</p>
            </div>
        </div>
    </header>
    @if(session('message'))
    <p>{{session('message')}}</p>
    @endif
    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <?php $i=1 ?>
            @foreach ($products as $product => $p)
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="{{URL::asset('img/Products_web/' . $p->image)}}" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">

                        <?php $i++ ?>
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">{{$p->name}}</h5>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                <!-- Product price-->
                                {{$p->price}}€
                            </div>
                            <p>{{$p->description}}</p>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{route('Controll')}}?idUser={{Auth::user()->id}}&productId={{$p->id}}">ADD TO CART</a></div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p>
        </div>
    </footer>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>
