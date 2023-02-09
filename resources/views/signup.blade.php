<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Agency - Start Bootstrap Theme</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="../assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        @vite(['resources/css/app.scss', 'resources/js/app.js', 'resources/css/styles.css','resources/css/login.css','resources/js/login.js'])
    </head>
    <body id="page-top">
        <!-- Masthead-->
        <header class="masthead">
            <h1>JUICE <span class="text-primary">HUB</span></h1>
            <div class="container">
               <form action="{{route('singup')}}" method='POST'>
               @csrf

               @if (session('error'))
                  <div class="alert alert-danger" role="alert">
                    <strong>MISSING FIELDS</strong> 
                  </div>
               @endif
                    <div class="col-md-4 div-container">
                        <label for="name" class="form-label">NAME</label>
                        <input type="text" class="form-control" id="name" name="name" value="" >
                        <label for="surname" class="form-label">SURNAME</label>
                        <input type="text" class="form-control" id="surname" name="surname" >
                        <div class="mb-3 email-sec">
                          <label for="email" class="form-label">Email</label>
                          <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelpId" placeholder="abc@mail.com">
                        </div>
                        <div class="mb-3 ps-sec">
                          <label for="password" class="form-label">PASSWORD</label>
                          <input type="password" class="form-control" name="password" id="password" placeholder="">
                        </div>
                        <button type="submit" class="btn btn-primary">SING UP</button>
                        <a href="{{ route('signin') }}">ALREADY HAVE ACCOUNT</a>
                      </div>
               </form>
            </div>
        </header>
        <!-- <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script> -->
    </body>
</html>
