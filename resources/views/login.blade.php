<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - Cutes Camerable</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet" />
    <link href="/landingpage/css/style2.css" rel="stylesheet" />

</head>

<body style="background-image: url('{{ URL::asset('assets/img/loginpage.png') }}'); background-size: cover; background-repeat: no-repeat;" id="page-top">
    <nav class="navbar navbar-expand-lg fixed-top " id="mainNav">
        <div class="container px-5">
            
            <a class="navbar-brand fw-bold" href="#page-top" i>
                <img src="assets/img/cuteslogo.png" width="400" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-landing-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="bi-list"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                    <li class="nav-item"><a class="nav-link me-lg-3" href="katalog" style="font-size: 14px">Katalog</a></li>
                    <li class="nav-item"><a class="nav-link me-lg-3" href="#download" style="font-size: 14px">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container" id=""><br>
        
        <div class="col-md-4 col-md-offset-0 " style="margin-top: 10%">
            <h2 class="text-center" style="color: white"><br><b>Selamat Datang</b></h3>
                <br>
            @if(session('error'))
            <div class="alert alert-danger">
                <b>Opps!</b> {{session('error')}}
            </div>
            @endif
            <form action="{{ route('actionlogin') }}" method="post">
            @csrf
                <div class="form-group">
                    <label style="color: white; font-size: 16px">Email</label>
                    <input type="email" name="email" style="padding-top: 20px; padding-bottom: 20px; background-color: rgba(238, 238, 238, 0.5);  border-color: white;" class="form-control" required="">
                </div>
                <div class="form-group">
                    <label style="color: white; font-size: 16px">Password</label>
                    <input type="password" style="padding-top: 20px; padding-bottom: 20px; background-color: rgba(238, 238, 238, 0.5); border-color: white;" name="password" class="form-control"required="">
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" value=""
                        id="rememberPasswordCheck">
                        <label style="color: white; font-size: 16px"> Remember Password</label>
                    {{-- <label class="form-check-label" for="rememberPasswordCheck">
                        Remember password
                    </label> --}}
                </div>
                {{-- <p class="text-right"><a style="color: white" href="#">Lupa password?</a></p> --}}
                {{-- <a href="/dashboard"> --}}
                <button type="submit" class="btn btn-lg btn-block" style="background-color: rgba(0, 0, 0, 0.5); color: white; border-radius: 12px; font-size: 16px">Masuk</button>
                <br>
                <p class="text-center" style="font-size: 16px">Belum punya akun? <a style="text-decoration: none; color: white; " href="/register">Daftar sekarang</a></p>
            </form>
        </div>
    </div>
</body>
</html>
