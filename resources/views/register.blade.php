<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar - Cutes Camerable</title>
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
            <form action="{{ route('actionregister') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                        <label style="color: white">NIK</label>
                        <input type="number" name="nik" class="form-control" style="padding-top: 20px; padding-bottom: 20px; background-color: rgba(238, 238, 238, 0.5);  border-color: white; color: black;" placeholder="NIK" required>
                    </div>
                    <div class="form-group">
                        <label style="color: white">Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control" style="padding-top: 20px; padding-bottom: 20px; background-color: rgba(238, 238, 238, 0.5);  border-color: white; color: black;" placeholder="Nama Lengkap" required value="{{ old('nama') }}">
                    </div>
                    <div class="form-group">
                        <label style="color: white">Alamat</label>
                        <input type="text" name="alamat" class="form-control" style="padding-top: 20px; padding-bottom: 20px; background-color: rgba(238, 238, 238, 0.5);  border-color: white; color: black;" placeholder="Alamat" required value="{{ old('alamat') }}">
                    </div>
                    <div class="form-group">
                        <label style="color: white">Nomor Handphone</label>
                        <input type="text" name="nohp" class="form-control" style="padding-top: 20px; padding-bottom: 20px; background-color: rgba(238, 238, 238, 0.5);  border-color: white; color: black;" placeholder="Nomor Handphone" required value="{{ old('nohp') }}">
                    </div>
                    <div class="form-group">
                        <label style="color: white">Email</label>
                        <input type="email" name="email" class="form-control" style="padding-top: 20px; padding-bottom: 20px; background-color: rgba(238, 238, 238, 0.5);  border-color: white; color: black;" placeholder="email" required value="{{ old('email') }}">
                    </div>
                    <div class="form-group">
                        <label style="color: white">Password</label>
                        <input type="password" name="password" class="form-control" style="padding-top: 20px; padding-bottom: 20px; background-color: rgba(238, 238, 238, 0.5);  border-color: white; color: black;" placeholder="Password" required>
                    </div>
                    <div class=" form-group">
                        <label for="fotobersamaid" class="form-label" style="color: white">Foto Bersama Identitas</label>
                        <input class="form-control" style="padding-bottom: 20px; background-color: rgba(238, 238, 238, 0.5);  border-color: white; color: black;" type="file" name="fotobersamaid" id="fotobersamaid" required>
                    </div>
                    <div class=" form-group">
                        <label for="fotoid" class="form-label" style="color: white">Foto Identitas</label>
                        <input class="form-control" style="padding-bottom: 20px; background-color: rgba(238, 238, 238, 0.5);  border-color: white; color: black;" type="file" name="fotoid" id="fotoid" required>
                    </div>
                    <div class=" form-group">
                        <label for="jenisid" class="form-label" style="color: white">Jenis Identitas</label>
                        <select class="form-control" style="background-color: rgba(238, 238, 238, 0.5);  border-color: white; color: black;" id="jenisid" name="jenisid"
                            value="{{ Session::get('jenisid') }}">
                            <option selected disabled value>Pilih Jenis Identitas</option>
                            <option value="KTP">KTP</option>
                            <option value="KK">KK</option>
                            <option value="KARTU PELAJAR/MAHASISWA">KARTU PELAJAR/MAHASISWA</option>
                            <option value="SIM">SIM</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-lg btn-block" style="background-color: rgba(0, 0, 0, 0.5); color: white; border-radius: 12px;">Daftar</button>
                    <br>
                    <p class="text-center">Sudah punya akun? <a style="color: white; text-decoration: none" href="/login">Login</a></p>
                </form>
        </div>
    </div>
</body>
</html>
