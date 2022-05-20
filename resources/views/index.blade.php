<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>@yield('title') - Dashboard Admin</title>

    <!-- Fontfaces CSS-->
    <link href="{{asset('template/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('template/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('template/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('template/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{asset('template/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Vendor CSS-->
    <link href="{{asset('template/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('template/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('template/vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('template/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('template/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('template/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('template/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('template/css/theme.css')}}" rel="stylesheet" media="all">

</head>
<body class="body" >
    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-transparent " >
        <div class="container-fluid">
          <a class="navbar-brand text-blue font-weight-bold" href="#" ></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto mr-4">
              <a class="nav-link active text-white" aria-current="page" href="/">Home</a>
              <a class="nav-link text-white" href="/login">Login</a>
            </div>
          </div>
        </div>
      </nav>
      <div class="jumbotron" style="background: url(../template/images/bg2.jpg);">
        <div class="container mx-auto">
          <h1 class="display-4" style="color: rgba(245, 245, 245, 0.801);">Welcome to <br> <span class="font-weight-bold" style="color: rgba(255, 0, 0, 0.808);">Jaya Laundry</span></h1>
          <hr class="hr my-4 mx-auto">
          <p>"cek pesananmu di sini"</p>
          <form action="/cekPesanan" method="get">
            <input name="keyword" type="text" class="search form-control me-2" placeholder="Search" aria-label="Search">
            <br>
            <button type="submit" class="btn btn-primary btn-lg" href="produk.html" role="button">Search</button>
          </form>
         </div>
    </div>
</body>

    <!-- Jquery JS-->
    <script src="{{asset('template/vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap JS-->
    <script src="{{asset('template/vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{asset('template/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Vendor JS       -->
    <script src="{{asset('template/vendor/slick/slick.min.js')}}">
    </script>
    <script src="{{asset('template/vendor/wow/wow.min.js')}}"></script>
    <script src="{{asset('template/vendor/animsition/animsition.min.js')}}"></script>
    <script src="{{asset('template/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
    </script>
    <script src="{{asset('template/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('template/vendor/counter-up/jquery.counterup.min.js')}}">
    </script>
    <script src="{{asset('template/vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{asset('template/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('template/vendor/chartjs/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('template/vendor/select2/select2.min.js')}}">
    </script>

    <!-- Main JS-->
    <script src="{{asset('template/js/main.js')}}"></script>

</body>

</html>
<!-- end document-->
