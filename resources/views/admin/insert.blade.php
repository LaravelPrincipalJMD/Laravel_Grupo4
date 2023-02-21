@extends('template.adminTemplate')
@section('mainDash')
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Principal</div>
                        <a class="nav-link" href="../admin">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-house-chimney"></i></i></div>
                            Main
                        </a>
                        <div class="sb-sidenav-menu-heading">Editing</div>
                        <a class="nav-link collapsed" href="editar" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-pen-to-square"></i></div>
                            Edit&nbsp; <span class="text-warning">products</span>
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{route('admin.editar')}}"><span class="text-warning">Edit</span>&nbsp;a product</span></a>
                                <a class="nav-link" href="{{route('admin.borrar')}}"><span class="text-warning">Delete</span>&nbsp;a product</span></a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="editar" data-bs-toggle="collapse" data-bs-target="#collapseUser" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-user-pen"></i></div>
                            Edit&nbsp; <span class="text-warning">users</span>
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseUser" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{route('admin.editarUser')}}"><span class="text-warning">Edit</span>&nbsp;a user</span></a>
                                <a class="nav-link" href="{{route('admin.borrarUser')}}"><span class="text-warning">Delete</span>&nbsp;a user</span></a>
                            </nav>
                        </div>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                    Authentication
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="login.html">Login</a>
                                        <a class="nav-link" href="register.html">Register</a>
                                        <a class="nav-link" href="password.html">Forgot Password</a>
                                    </nav>
                                </div>
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                    Error
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="401.html">401 Page</a>
                                        <a class="nav-link" href="404.html">404 Page</a>
                                        <a class="nav-link" href="500.html">500 Page</a>
                                    </nav>
                                </div>
                            </nav>
                        </div>
                        <div class="sb-sidenav-menu-heading">Insert</div>
                        <a class="nav-link" href="{{route('admin.creacion')}}">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-file-plus"></i></div>
                            Insert&nbsp; <span class="text-warning">a product</span>
                        </a>
                        <a class="nav-link" href="{{route('admin.creacionUser')}}">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-user-plus"></i></div>
                            Insert&nbsp; <span class="text-warning">a user</span>
                        </a>


                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Admin
                </div>
            </nav>
        </div>

        <div id="layoutSidenav_content">
            <main>
                <h2 class="px-5 pt-5 display-5">Inserting a <span class="text-warning">Product</span></h2>
                <form class="p-5" action="{{ route('admin.crear') }}" method="POST">
                    @method('POST')
                    @csrf

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Name:</label>
                        <input name="name" type="text" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text"></div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Description</label>
                        <input name="description" type="description" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Price:</label>
                        <input name="price" type="number" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Stock:</label>
                        <input name="stock" type="number" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Imagen:</label>
                        <input name="image" type="file" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
            </main>
            @if ($errors->any())
            <div>
                {!! implode('', $errors->all(':message'))!!}
            </div>
        @endif
        @if (session('mensaje'))
        <div class="alert alert-success mt-3">
            {{session('mensaje')}}
        </div>
    @endif
            @endsection






            @section('footer')
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2022</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        @endsection
