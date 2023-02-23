@extends('template.adminTemplate')
@section('mainDash')
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Principal</div>
                        <a class="nav-link" href="../admin">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-house-chimney"></i></div>
                            Main
                        </a>
                        <div class="sb-sidenav-menu-heading">Editing</div>
                        <a class="nav-link collapsed" href="{{ route('admin.editar') }}" data-bs-toggle="collapse"
                            data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-pen-to-square"></i></i></div>
                            Edit&nbsp; <span class="text-warning">products</span>
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{ route('admin.editar') }}"><span
                                        class="text-warning">Edit</span>&nbsp;a product</span></a>
                                <a class="nav-link" href="{{ route('admin.borrar') }}"><span
                                        class="text-warning">Delete</span>&nbsp;a product</span></a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="editar" data-bs-toggle="collapse"
                            data-bs-target="#collapseUser" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-user-pen"></i></div>
                            Edit&nbsp; <span class="text-warning">users</span>
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseUser" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{ route('admin.editarUser') }}"><span
                                        class="text-warning">Edit</span>&nbsp;a user</span></a>
                                <a class="nav-link" href="{{ route('admin.borrarUser') }}"><span
                                        class="text-warning">Delete</span>&nbsp;a user</span></a>
                            </nav>
                        </div>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                                    data-bs-target="#pagesCollapseAuth" aria-expanded="false"
                                    aria-controls="pagesCollapseAuth">
                                    Authentication
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne"
                                    data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="login.html">Login</a>
                                        <a class="nav-link" href="register.html">Register</a>
                                        <a class="nav-link" href="password.html">Forgot Password</a>
                                    </nav>
                                </div>
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                                    data-bs-target="#pagesCollapseError" aria-expanded="false"
                                    aria-controls="pagesCollapseError">
                                    Error
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne"
                                    data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="401.html">401 Page</a>
                                        <a class="nav-link" href="404.html">404 Page</a>
                                        <a class="nav-link" href="500.html">500 Page</a>
                                    </nav>
                                </div>
                            </nav>
                        </div>
                        <div class="sb-sidenav-menu-heading">Insert</div>
                        <a class="nav-link" href="{{ route('admin.creacion') }}">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-file-plus"></i></div>
                            Insert&nbsp; <span class="text-warning">a product</span>
                        </a>
                        <a class="nav-link" href="{{ route('admin.creacionUser') }}">
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
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Dashboard</h1>

                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Control the WebSite</li>
                    </ol>
                    <div class="d-flex justify-content-around align-items-center">
                        <a class="text-decoration-none text-bold w-35" href="{{ route('admin.products') }}">
                            <div class="card bg-black text-white mb-4">
                                <div class="card-body hover">
                                  <p class="em2">Explore <span class="span">products</span></p>
                                  <p class="em1 text-light">Search, insert, edit or delete a <span class="span">product</span>  from our database</p>
                                </div>
                            </div>
                        </a>

                        <a class="text-decoration-none text-bold w-35" href="{{ route('admin.users') }}">
                            <div class="card bg-black text-white mb-4">
                                <div class="card-body hover">
                                  <p class="em2">Explore <span class="span">users</span></p>
                                  <p class="em1 text-light">Search, insert, edit or delete a <span class="span">user</span>  from our database</p>
                                </div>
                            </div>
                        </a>

                    </div>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Users</li>
                    </ol>
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body">GO INTO USERS</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <form action="{{ route('admin.detalleUser') }}" method="GET" class="d-inline">
                                        <input type="text" name="name" id="name">
                                        <button class="btn btn-info btn-sm" type="submit">Search</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-warning text-white mb-4">
                                <div class="card-body">Edit user</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link"
                                        href="{{ route('admin.editarUser') }}">Choose a product to edit</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-success text-white mb-4">
                                <div class="card-body">Insert user</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="insertUser">Go to create</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-danger text-white mb-4">
                                <div class="card-body">Delete user</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="borrarUser">Go to delete</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Productos
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Users
                        </div>
                    </div>
                </div>
            </main>
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
    </div>
</div>
