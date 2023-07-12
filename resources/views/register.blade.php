<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar - Cutes Camerable</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet" />
    <link href="/landingpage/css/style2.css" rel="stylesheet" />
</head>

<body style="background-image: url('{{ URL::asset('assets/img/loginpage.png') }}'); background-size: cover; background-repeat: no-repeat;">
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
            <form action="{{ route('actionregister') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                        <label style="color: white; font-size: 16px">NIK</label>
                        <input type="number" name="nik" class="form-control" style="padding-top: 20px; padding-bottom: 20px; background-color: rgba(250, 247, 247, 0.993);  border-color: white; color: black;" placeholder="NIK" required>
                    </div>
                    <div class="form-group">
                        <label style="color: white; font-size: 16px">Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control" style="padding-top: 20px; padding-bottom: 20px; background-color: rgba(250, 247, 247, 0.993);  border-color: white; color: black;" placeholder="Nama Lengkap" required value="{{ old('nama') }}">
                    </div>
                    <div class="form-group">
                        <label style="color: white; font-size: 16px">Alamat</label>
                        <input type="text" name="alamat" class="form-control" style="padding-top: 20px; padding-bottom: 20px; background-color: rgba(250, 247, 247, 0.993);  border-color: white; color: black;" placeholder="Alamat" required value="{{ old('alamat') }}">
                    </div>
                    <div class="form-group">
                        <label style="color: white; font-size: 16px">Nomor Handphone</label>
                        <input type="text" name="nohp" class="form-control" style="padding-top: 20px; padding-bottom: 20px; background-color: rgba(250, 247, 247, 0.993);  border-color: white; color: black;" placeholder="Nomor Handphone" required value="{{ old('nohp') }}">
                    </div>
                    <div class="form-group">
                        <label style="color: white; font-size: 16px">Email</label>
                        <input type="email" name="email" class="form-control" style="padding-top: 20px; padding-bottom: 20px; background-color: rgba(250, 247, 247, 0.993);  border-color: white; color: black;" placeholder="Email" required value="{{ old('email') }}">
                    </div>
                    <div class="form-group">
                        <label style="color: white; font-size: 16px">Password</label>
                        <input type="password" name="password" class="form-control" style="padding-top: 20px; padding-bottom: 20px; background-color: rgba(250, 247, 247, 0.993);  border-color: white; color: black;" placeholder="Password" required>
                    </div>
                    <div class=" form-group">
                        <label for="fotobersamaid" class="form-label" style="color: white; font-size: 16px">Foto Bersama Identitas</label>
                        <input class="form-control" style="padding-bottom: 20px; background-color: rgba(250, 247, 247, 0.993);  border-color: white; color: black;" type="file" name="fotobersamaid" id="fotobersamaid" required>
                    </div>
                    <div class=" form-group">
                        <label for="fotoid" class="form-label" style="color: white; font-size: 16px">Foto Identitas</label>
                        <input class="form-control" style="padding-bottom: 20px; background-color: rgba(250, 247, 247, 0.993);  border-color: white; color: black;" type="file" name="fotoid" id="fotoid" required>
                    </div>
                    <div class=" form-group">
                        <label for="jenisid" class="form-label" style="color: white; font-size: 16px">Jenis Identitas</label>
                        <select class="form-control" style="background-color: rgba(250, 247, 247, 0.993);  border-color: white; color: black;" id="jenisid" name="jenisid"
                            value="{{ Session::get('jenisid') }}">
                            <option selected disabled value>Pilih Jenis Identitas</option>
                            <option value="KTP">KTP</option>
                            <option value="KK">KK</option>
                            <option value="KARTU PELAJAR/MAHASISWA">KARTU PELAJAR/MAHASISWA</option>
                            <option value="SIM">SIM</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-lg btn-block" style="background-color: rgba(0, 0, 0, 0.5); color: white; border-radius: 12px; font-size: 16px">Daftar</button>
                    <br>
                    <p class="text-center" style="font-size: 16px">Sudah punya akun? <a style="color: white; text-decoration: none" href="/login">Login</a></p>
                </form>
        </div>
    </div>
</body>
</html>
