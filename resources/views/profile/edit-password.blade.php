@extends('layouts.main')

@section('content')
    <nav>
        <h4>Ubah Password</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Ubah Password</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body" style="padding-top: 20px">
                    <form action="{{ route('update-password') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="password_lama" class="col-form-label">Kata Sandi Saat ini:</label>
                            <input type="password" class="form-control" id="password_lama" name="password_lama" required>
                        </div>
                        <div class="form-group">
                            <label for="passwordbaru" class="col-form-label">Kata Sandi Baru:</label>
                            <input type="password" class="form-control" id="passwordbaru" name="passwordbaru" required>
                        </div>
                        <div class="form-group">
                            <label for="konfirmasipassword" class="col-form-label">Konfirmasi Kata Sandi Baru:</label>
                            <input type="password" class="form-control" id="konfirmasipassword" name="konfirmasipassword" required>
                        </div>
                        <div class="footer">
                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
