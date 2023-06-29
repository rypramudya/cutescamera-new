<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - Cutes Camerable</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet" />

</head>

<body style="background-image: url('{{ URL::asset('assets/img/HALAMAN LOGIN.png') }}'); background-size: cover; background-repeat: no-repeat;">
    <div class="container" id="body-login"><br>

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
                    <label style="color: white">Email</label>
                    <input type="email" name="email" style="padding-top: 20px; padding-bottom: 20px; background-color: rgba(238, 238, 238, 0.5);  border-color: white;" class="form-control" required="">
                </div>
                <div class="form-group">
                    <label style="color: white">Password</label>
                    <input type="password" style="padding-top: 20px; padding-bottom: 20px; background-color: rgba(238, 238, 238, 0.5); border-color: white;" name="password" class="form-control"required="">
                </div>
                <p class="text-right"><a style="color: white" href="#">Lupa password?</a></p>
                {{-- <a href="/dashboard"> --}}
                <button type="submit" class="btn btn-lg btn-block" style="background-color: rgba(0, 0, 0, 0.5); color: white; border-radius: 12px;">Masuk</button>
                <br>
                <p class="text-center">Belum punya akun? <a style="text-decoration: none; color: white;" href="/register">Daftar sekarang</a></p>
            </form>
        </div>
    </div>
</body>
</html>
