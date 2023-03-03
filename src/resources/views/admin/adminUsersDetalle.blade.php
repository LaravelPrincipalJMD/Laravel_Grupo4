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
                    <h1 class="mt-4">Users</h1> <a class="text-decoration-none text-warning" href="{{ route('admin') }}">Volver</a>
                        <div class="w-25 card bg-warning text-white mb-4 mt-4">
                            <div class="card-body">Search a user</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <form action="{{ route('admin.detalleUser') }}" method="GET" class="d-inline">
                                    <input type="text" name="name" id="name">
                                    <button class="btn btn-dark btn-sm" type="submit">Search</button>
                                </form>
                            </div>
                        </div>


                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Users</li>
                    </ol>

                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Users
                        </div>
                        <div class="table-responsive">
                            <table class="table table-white">
                                <tbody>
                                    <tr>
                                        <th>Name:</th>
                                        <th>Surname:</th>
                                        <th>Email:</th>
                                        <th>Password:</th>
                                        <th>Rol:</th>
                                    </tr>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->surname }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->password }}</td>
                                            <td>{{ $user->rol }}</td>
                                            <td><button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal{{ $user->id }}">
                                                    Edit
                                                </button>
                                            </td>
                                            <td>
                                                <form action="{{ route('admin.eliminarUser', $user) }}" method="POST"
                                                    class="d-inline">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                                                </form>
                                            </td>
                                            <div class="modal fade" id="exampleModal{{ $user->id }}" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Editing
                                                                {{ $user->name }}</h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form method="POST"
                                                                action="{{ route('admin.actualizarUser', $user->id) }}">
                                                                @method('PUT')
                                                                @csrf

                                                                <div class="mb-3">
                                                                    <label for="exampleInputEmail1"
                                                                        class="form-label">Name:</label>
                                                                    <input name="name" type="text"
                                                                        class="form-control @error('name') is-invalid @enderror"
                                                                        id="exampleInputEmail1"
                                                                        aria-describedby="emailHelp"
                                                                        value="{{ $user->name }}">
                                                                    <div id="emailHelp" class="form-text"></div>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="exampleInputPassword1"
                                                                        class="form-label">Surname:</label>
                                                                    <input name="surname" type="text"
                                                                        class="form-control @error('surname') is-invalid @enderror"
                                                                        id="exampleInputPassword1"
                                                                        value="{{ $user->surname }}">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="exampleInputPassword1"
                                                                        class="form-label">Email:</label>
                                                                    <input name="email" type="email"
                                                                        class="form-control @error('email') is-invalid @enderror"
                                                                        id="exampleInputPassword1"
                                                                        value="{{ $user->email }}">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="exampleInputPassword1"
                                                                        class="form-label">Password</label>
                                                                    <input name="password" type="password"
                                                                        class="form-control @error('password') is-invalid @enderror"
                                                                        id="exampleInputPassword1"
                                                                        value="{{ $user->password }}">
                                                                </div>

                                                                <button type="submit" class="btn btn-warning">Save
                                                                    changes</button>
                                                            </form>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            @if ($errors->any())
                                <div>
                                    {!! implode('', $errors->all(':message')) !!}
                                </div>
                            @endif
                            @if (session('mensaje'))
                                <div class="alert alert-success mt-3">
                                    {{ session('mensaje') }}
                                </div>
                            @endif

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
