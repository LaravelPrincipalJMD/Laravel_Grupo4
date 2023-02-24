<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Agency - Start Bootstrap Theme</title>
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



    @vite(['resources/css/app.scss', 'resources/js/app.js', 'resources/css/styles.css', 'resources/css/index.css', 'resources/css/loading.css','resources/js/about/about.js'])
</head>

<body id="page-top">
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
                        <li class="nav-item"><a class="nav-link" href="#">WELCOME</a></li>
                        <li class="nav-item"><a class="nav-link" href="#services">SERVICES</a></li>
                        <li class="nav-item"><a class="nav-link" href="#products">PRODUCTS</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">ABOUT</a></li>
                        <li class="nav-item"><a class="nav-link" href="#team">TEAM</a></li>
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
                                    <li><a class="dropdown-item" href="{{ route('profile') }}?userId={{ Auth::user()->id }}">{{ __('profile')}}</a></li>
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
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Welcome To JuiceHub!</div>
                <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section timeline-panel texto-desaparecer" id="services">
            <div class="container mb-5">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Services</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">E-Commerce</h4>
                        <p class="text-muted">
                            For most orders, shipping costs are free of charge for orders of €25.90 or more. For purchases below this amount, shipping costs are €3.95. Delivery of products takes between 24/48 hours.
                        </p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Contact Us</h4>
                        <p class="text-muted">
                            If you have any help or questions, you can contact our employees. They will help you with all your questions.
                        </p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Web Security</h4>
                        <p class="text-muted">
                            You will be able to save your data when you register and there will be a security of your data to avoid any kind of problem.
                        </p>

                    </div>
                </div>
            </div>

        </section>
        <!-- Products Grid-->
        <section class="page-section bg-light" id="products">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Products</h2>
                    <h3 class="section-subheading text-muted"> The most recommended products on our website.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Products item 1-->
                        <div class="products-item timeline-panel texto-desaparecer">
                            <a class="products-link" data-bs-toggle="modal" href="#productsModal1">
                                <div class="products-hover">
                                    <div class="products-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{URL::asset('img/Products/1.png')}}" alt="..." />
                            </a>
                            <div class="products-caption">
                                <div class="products-caption-heading">Small Juices</div>
                                <div class="products-caption-subheading text-muted">Price: 2.00€</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Products item 2-->
                        <div class="products-item timeline-panel texto-desaparecer">
                            <a class="products-link" data-bs-toggle="modal" href="#productsModal2">
                                <div class="products-hover">
                                    <div class="products-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{URL::asset('img/Products/2.png')}}" alt="..." />
                            </a>
                            <div class="products-caption">
                                <div class="products-caption-heading">Ice drink</div>
                                <div class="products-caption-subheading text-muted">Price: 1.50€</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Products item 3-->
                        <div class="products-item timeline-panel texto-desaparecer">
                            <a class="products-link" data-bs-toggle="modal" href="#productsModal3">
                                <div class="products-hover">
                                    <div class="products-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{URL::asset('img/Products/3.png')}}" alt="..." />
                            </a>
                            <div class="products-caption">
                                <div class="products-caption-heading">Big Juices</div>
                                <div class="products-caption-subheading text-muted">Price: 2.50€</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- Products item 4-->
                        <div class="products-item timeline-panel texto-desaparecer">
                            <a class="products-link" data-bs-toggle="modal" href="#productsModal4">
                                <div class="products-hover">
                                    <div class="products-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{URL::asset('img/Products/4.png')}}" alt="..." />
                            </a>
                            <div class="products-caption">
                                <div class="products-caption-heading">Sport Juices</div>
                                <div class="products-caption-subheading text-muted">Price: 1.50€</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- Products item 5-->
                        <div class="products-item timeline-panel texto-desaparecer">
                            <a class="products-link" data-bs-toggle="modal" href="#productsModal5">
                                <div class="products-hover">
                                    <div class="products-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{URL::asset('img/Products/5.png')}}" alt="..." />
                            </a>
                            <div class="products-caption">
                                <div class="products-caption-heading">Energy drink</div>
                                <div class="products-caption-subheading text-muted">Price: 4.00€</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Products item 6-->
                        <div class="products-item timeline-panel texto-desaparecer">
                            <a class="products-link" data-bs-toggle="modal" href="#productsModal6">
                                <div class="products-hover">
                                    <div class="products-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{URL::asset('img/Products/6.png')}}" alt="..." />
                            </a>
                            <div class="products-caption">
                                <div class="products-caption-heading">JuiceHub Bottle</div>
                                <div class="products-caption-subheading text-muted">Price: 3.00€</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">About</h2>
                    <h3 class="section-subheading text-muted">Fruit production process.</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div onclick="this.nextSibling.nextSibling.classList.toggle('texto-desaparecer'); this.nextSibling.nextSibling.classList.toggle('texto-aparecer') " class="timeline-image"><img class="rounded-circle img-fluid" src="{{URL::asset('img/about/1.jpg')}}" alt="..." /></div>
                        <div class="timeline-panel texto-desaparecer">
                            <div class="timeline-heading">
                                <h4>First step</h4>
                                <h4 class="subheading">The fruit plantation</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">The fruit must be harvested at the optimum moment of maturity to ensure the maximum quality and flavor of the juice.

                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div onclick="this.nextSibling.nextSibling.classList.toggle('texto-desaparecer'); this.nextSibling.nextSibling.classList.toggle('texto-aparecer') " class="timeline-image"><img class="rounded-circle img-fluid" src="{{URL::asset('img/about/2.jpg')}}" alt="..." /></div>
                        <div class="timeline-panel texto-desaparecer">
                            <div class="timeline-heading">
                                <h4>Second step</h4>
                                <h4 class="subheading">Selection of fruit</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">The fruit arrives at the plant and is analyzed before going to the processing line to ensure that it meets all quality standards.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div onclick="this.nextSibling.nextSibling.classList.toggle('texto-desaparecer'); this.nextSibling.nextSibling.classList.toggle('texto-aparecer') " class="timeline-image"><img class="rounded-circle img-fluid" src="{{URL::asset('img/about/3.jpg')}}" alt="..." /></div>
                        <div class="timeline-panel texto-desaparecer">
                            <div class="timeline-heading">
                                <h4>Third step</h4>
                                <h4 class="subheading">Juice production</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">At this stage, the machinery used varies depending on the type of fruit, eliminating the stone or rind. Then the extraction of the material begins and we are left with the juice of the fruit.</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div onclick="this.nextSibling.nextSibling.classList.toggle('texto-desaparecer'); this.nextSibling.nextSibling.classList.toggle('texto-aparecer') " class="timeline-image"><img class="rounded-circle img-fluid" src="{{URL::asset('img/about/4.jpg')}}" alt="..." /></div>
                        <div class="timeline-panel texto-desaparecer">
                            <div class="timeline-heading">
                                <h4>Fourth step</h4>
                                <h4 class="subheading">Juice packaging</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">The juice is cooled to be packaged in beverage cartons or plastic bottles, the formats in which it reaches the end consumer.</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>

                                <br />
                                End of Story!
                                <br />

                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- Team-->
            <section class="page-section bg-light" id="team">
                <div class="container">
                    <div class="text-center">
                        <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                        <h3 class="section-subheading text-muted">Our team consists of three people.</h3>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="team-member">
                                <img class="mx-auto rounded-circle" src="{{URL::asset('img/Team/1.jpg')}}" alt="..." />
                                <h4>Manuel Moya</h4>
                                <p class="text-muted">Programmer</p>
                                <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Twitter Profile"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="team-member">
                                <img class="mx-auto rounded-circle" src="{{URL::asset('img/Team/2.jpg')}}" alt="..." />
                                <h4>Jose Fernandez</h4>
                                <p class="text-muted">Programmer</p>
                                <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen Twitter Profile"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="team-member">
                                <img class="mx-auto rounded-circle" src="{{URL::asset('img/Team/3.jpg')}}" alt="..." />
                                <h4>Daniel Reyes</h4>
                                <p class="text-muted">Programmer</p>
                                <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker Twitter Profile"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer-->
                <footer class="footer py-4">

                    <div class="container">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-lg-4 text-lg-start">Copyright &copy; Your Website 2022</div>
                            <div class="col-lg-4 text-center  align-items-center justify-content-center">
                                <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/">
                                    <img alt="Licencia de Creative Commons" style="border-width:0" src="https://i.creativecommons.org/l/by-nc-nd/4.0/88x31.png" />
                                </a>
                            </div>
                            <div class="col-lg-4 text-lg-end">
                                <a class="link-dark text-decoration-none me-3" href="#!"> LOC: Sevilla</a>
                                <a class="link-dark text-decoration-none" href="#!">TLF: 644428372</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </section>
    </div>



    <!-- Products Modals-->
    <!-- Products item 1 modal popup-->
    <div class="products-modal modal fade" id="productsModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="../assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Product details-->
                                <h2 class="text-uppercase">Basic Juice</h2>
                                <p class="item-intro text-muted">Basic fruit flavoured juices.</p>
                                <img class="img-fluid d-block mx-auto" src="{{URL::asset('img/Products/1.png')}}" alt="..." />
                                <p>The classic without sugar. With vitamin C.<br> JuiceHub juices have all the flavour and nutritional properties of fruit.</p>
                                <strong>Flavours</strong>
                                <p>Orange, strawberry, peach, grape, lemon and apple.</p>

                                <ul class="list-inline">
                                    <li>
                                        <strong>Quantity:</strong>
                                        4 x 25cL
                                    </li>
                                    <li>
                                        <strong>Price:</strong>
                                        2.00 €
                                    </li>

                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Products item 2 modal popup-->
    <div class="products-modal modal fade" id="productsModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="../assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Product details-->
                                <h2 class="text-uppercase">Ice drink</h2>
                                <p class="item-intro text-muted">Ice drink with any fruit flavor.</p>
                                <img class="img-fluid d-block mx-auto" src="{{URL::asset('img/Products/2.png')}}" alt="..." />
                                <p>A soft drink whose main base is chopped or grated ice and that can be of various flavors</p>
                                <strong>Flavours</strong>
                                <p>Orange, strawberry, peach, grape, lemon and apple.</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Quantity:</strong>
                                        1 x 50cL
                                    </li>
                                    <li>
                                        <strong>Price:</strong>
                                        1.50 €
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Products item 3 modal popup-->
    <div class="products-modal modal fade" id="productsModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="../assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Product details-->
                                <h2 class="text-uppercase">Big Juice</h2>
                                <p class="item-intro text-muted">Basic fruit flavoured juices</p>
                                <img class="img-fluid d-block mx-auto" src="{{URL::asset('img/Products/3.png')}}" alt="..." />
                                <p>The classic without sugar. With vitamin C.<br> JuiceHub juices have all the flavour and nutritional properties of fruit.</p>
                                <strong>Flavours</strong>
                                <p>Orange, strawberry, peach, grape, lemon and apple.</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Quantity:</strong>
                                        1 x 1 L
                                    </li>
                                    <li>
                                        <strong>Price:</strong>
                                        2.50 €
                                    </li>

                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Products item 4 modal popup-->
    <div class="products-modal modal fade" id="productsModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="../assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Product details-->
                                <h2 class="text-uppercase">Sport Juices</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="{{URL::asset('img/Products/4.png')}}" alt="..." />
                                <p>The classic without sugar. With vitamin C.<br> JuiceHub juices have all the flavour and nutritional properties of fruit.</p>
                                <strong>Flavours</strong>
                                <p>Orange, strawberry, peach, grape, lemon and apple.</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong>
                                        Lines
                                    </li>
                                    <li>
                                        <strong>Category:</strong>
                                        Branding
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Products item 5 modal popup-->
    <div class="products-modal modal fade" id="productsModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="../assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Product details-->
                                <h2 class="text-uppercase">Energy drink</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="{{URL::asset('img/Products/5.png')}}" alt="..." />
                                <p>The classic without sugar. With vitamin C.<br> JuiceHub juices have all the flavour and nutritional properties of fruit.</p>
                                <strong>Flavours</strong>
                                <p>Orange, strawberry, peach, grape, lemon and apple.</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong>
                                        Southwest
                                    </li>
                                    <li>
                                        <strong>Category:</strong>
                                        Website Design
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Products item 6 modal popup-->
    <div class="products-modal modal fade" id="productsModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="../assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Product details-->
                                <h2 class="text-uppercase">JuiceHub Bottle
                                </h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="{{URL::asset('img/Products/6.png')}}" alt="..." />
                                <p>The classic without sugar. With vitamin C.<br> JuiceHub juices have all the flavour and nutritional properties of fruit.</p>
                                <strong>Flavours</strong>
                                <p>Orange, watermelon sugar, peach, grape, cherry and apple.</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong>
                                        Window
                                    </li>
                                    <li>
                                        <strong>Category:</strong>
                                        Photography
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>