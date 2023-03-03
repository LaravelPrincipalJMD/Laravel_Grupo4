<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Agency - Start Bootstrap Theme</title>
    <link rel="icon" type="image/x-icon" href="../assets/favicon.ico" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <link href="../css/styles.css" rel="stylesheet" />
    @vite(['resources/css/app.scss', 'resources/js/app.js', 'resources/css/styles.css', 'resources/css/custom.css'])
</head>

<body id="page-top">
    @yield('nav')
    @yield('index')
    @yield('side')
    @yield('products')
    @yield('cart')
    @yield('about')
    @yield('form')
    @yield('footer')
    @yield('modal')
    @yield('scripts')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>


</body>

</html>
