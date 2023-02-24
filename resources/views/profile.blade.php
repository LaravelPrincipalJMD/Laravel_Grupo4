<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Profile - Start Bootstrap Theme</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{URL::asset('logo.png')}}" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <script defer src="{{URL::asset('assets/products.js')}}"></script>

    <link href="../css/styles.css" rel="stylesheet" />



    @vite(['resources/css/app.scss', 'resources/js/app.js', 'resources/css/styles.css', 'resources/css/index.css', 'resources/css/loading.css', 'resources/css/profile.css', 'resources/js/about/about.js'])
</head>

<body>

    <!-- Navigation-->


    <!-- loading-->

    <div id= "load-container">
        <div class="box">
            <div class="fruit">
              <div class="leaf"></div>
            </div>
            <div class="fruit right">
              <div class="leaf"></div>
            </div>
            <div class="fruit bottom">
              <div class="leaf"></div>
            </div>
            <div class="fruit bottom right">
              <div class="leaf"></div>
            </div>
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
                            <li class="nav-item"><a class="nav-link" href="{{URL::asset('')}}">WELCOME</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{URL::asset('')}}#services">SERVICES</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{URL::asset('')}}#products">PRODUCTS</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{URL::asset('')}}#about">ABOUT</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{URL::asset('')}}#team">TEAM</a></li>
                            <div class="dropdown">
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
        

            
            
            <section class="vh-100" style="background-color: #f4f5f7;">
                <div class="container py-5 h-100">
                  <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col col-lg-6 mb-4 mb-lg-0">
                      <div class="card mb-3" style="border-radius: .5rem;">
                        <div class="row g-0">
                          <div class="col-md-4 gradient-custom text-center text-white"
                            style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                              alt="Avatar" class="img-fluid my-5" style="width: 80px;" />
                            <h5>Profile</h5>
                            <i class="far fa-edit mb-5"></i>
                          </div>
                          <div class="col-md-8">
                            <form method="POST" name="edit" action="#">
                            <div class="card-body p-4">
                              <h6>Basic information</h6>
                              <hr class="mt-0 mb-4">
                              <div class="row pt-1">
                                <div class=" mb-3">
                                    <h6>Name</h6>
                                    <p class="text-muted">{{$user->name}}</p>
                                </div>
                                <div class=" mb-3">
                                    <h6>Surname</h6>
                                    <p class="text-muted">{{$user->surname}}</p>
                                </div>
                                <div class=" mb-3">
                                  <h6>Email</h6>
                                  <p class="text-muted">{{$user->email}}</p>
                                </div>
                              </div>
                              <h6>Other data</h6>
                              <hr class="mt-0 mb-4">
                              <div class="row pt-1">
                                <form action="{{route('password')}}?userId={{ Auth::user()->id }}" method='GET' class="mb-3">
                                 
                                <h6>Change password</h6>
                                  <input name="password" type="password" class="text-muted">
                                  <input type="submit" value="Save" class="btn btn-primary">
                                  
                                </form>     
                              </div>
                            
                            </div>
                            
                        </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>

        </div>      
</body> 




</html>