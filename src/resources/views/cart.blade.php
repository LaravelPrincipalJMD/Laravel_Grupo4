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
    @vite(['resources/css/app.scss', 'resources/js/app.js', 'resources/css/styles.css','resources/css/stylesproducts.css', 'resources/js/products/scripts.js','resources/css/index.css','resources/css/cart.css'])

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
                        <li class="nav-item"><a class="nav-link" href="{{route('home')}}">WELCOME</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('home')}}#services">SERVICES</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('products')}}">PRODUCTS</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('home')}}#about">ABOUT</a></li>
                        <li class="dropdown">
                            @auth('web')
                                <li class="nav-item"><a class="nav-link" href="{{route('cartView')}}?idUser={{Auth::user()->id}}">CART</a></li>
                                <div class="dropdown">
                                <button class="btn btn-primary text-light dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                    <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();  document.getElementById('logout-form').submit();">{{ __('Logout')}}</a></li>
                                </ul>
                                <form id="logout-form" action="{{ route('logout')}}" method="POST" class="d-none">
                                    @csrf
                                    {{csrf_field()}}
                                </form>
                                </div>
                            @endauth
                            @guest
                                @if (!Auth::user())
                                    <i class="fa-solid fa-user text-primary dropdown-toggle mt-2" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"></i>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    </ul>
                                @endif
                            @endguest
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    <!-- Header-->
    <header>
            <h3 class="text-primary">CART HUB</h3>
    </header>
    
    @if(session('message'))
    <p>{{session('message')}}</p>
    @endif
    <!-- Section-->
    <section class="py-5">
        @foreach ($products as $product => $p)
        <div class="col mb-5 w-100" id="cart-product">
            <div class="card">
                <!-- Product image-->
                <img class="card-img" src="{{URL::asset('img/Products web/'.($product+1).'.png')}}" alt="..." />
                <!-- Product details-->
                <div class="card-body p-4" id="content">
                    <div id="body" class="text-center">
                        <!-- Product name-->
                        <h5 class="fw-bolder">{{$p->name}}</h5>
                        <!-- Product price-->
                        <p id="price">{{$p->price}}???</p>
                    </div>
                    <p>{{$p->description}}</p>
                    <p>X{{$p->pivot->amount}}</p>
                </div>
                <div class="arrows-container">
                    <a href="{{route('plus')}}?idUser={{Auth::user()->id}}&productId={{$p->id}}"><i id="plus" class="bi bi-plus-circle-fill"></i></a>
                    <a href="{{route('dash')}}?idUser={{Auth::user()->id}}&productId={{$p->id}}"><i id="dash" class="bi bi-dash-circle"></i></a></a>
                </div>
                <!-- Product actions-->
                <div class="card-footer border-top-0 bg-transparent">
                    <div class="text-center"><a class="btn btn-outline-danger mt-auto" href="{{route('delete')}}?idUser={{Auth::user()->id}}&productId={{$p->id}}"><i class="bi bi-cart-x"></i></a></div>
                </div>
            </div>
        </div>
        @endforeach
    </section>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p>
        </div>
    </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>