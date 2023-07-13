@extends('layouts.main')

@section('content')

    <div id="app">
        <div class="main-wrapper">
            <div class="main-content">
                <div class="container">
                    <form method="post" action="{{ route('peminjaman.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="card mt-5">
                            <div class="card-header">
                                <h3>Peminjaman</h3>
                            </div>
                            <div class="card-body">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <div class="alert-title">
                                            <h4>Whoops!</h4>
                                        </div>
                                        There are some problems with your input.
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                @if (session('success'))
                                    <div class="alert alert-success">{{ session('success') }}</div>
                                @endif

                                @if (session('error'))
                                    <div class="alert alert-danger">{{ session('error') }}</div>
                                @endif
                                <div class="mb-3">
                                    <label class="form-label">ID</label>
                                    <input type="text" class="form-control" name="id_pinjam"
                                        value="{{ $newIdFormatted }}" readonly placeholder="ID PINJAM">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Nama Peminjam</label>
                                    <select class="form-control select" name="user_id" id="user_id">
                                        <option disabled value> Nama Peminjam </option>
                                        @foreach ($cus as $c)
                                            <option value="{{ $c->id }}"> {{ $c->user->nama }} </option>
                                        @endforeach

                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Nama Kamera</label>
                                    <select class="form-control select" name="kamera_id" id="kamera_id">
                                        <option disabled selected value> Pilih Kamera </option>
                                        @foreach ($kam as $item)
                                            <option value="{{ $item->id_kamera }}"> {{ $item->nama_kamera }} </option>
                                            @php
                                                $hargaKamera = $item->harga_sewa;
                                            @endphp
                                        @endforeach
                                    </select>
                                </div>

                                <div class="formbold-mb-3">
                                    <label for="mulai_sewa" class="formbold-form-label">Mulai</label>
                                    <input type="date" name="mulai_sewa" id="mulai_sewa" class="formbold-form-input"
                                        value="{{ old('mulai_sewa') }}" onchange="updateTotalHarga()" />
                                </div>
                                <br>
                                <div class="formbold-mb-3">
                                    <label for="selesai_sewa" class="formbold-form-label">Selesai</label>
                                    <input type="date" name="selesai_sewa" id="selesai_sewa" class="formbold-form-input"
                                        value="{{ old('selesai_sewa') }}" onchange="updateTotalHarga()" />
                                </div>

                                <br>
                                <div class="mb-3">
                                    <label class="form-label">Total Harga</label>
                                    <input type="text" class="form-control" name="total_harga" id="total_harga"
                                        value="{{ old('total_harga') }}" placeholder="Total Harga" readonly>
                                </div>



                                <script>
                                    var kameraSelect = document.getElementById('kamera_id');
                                    var mulaiSewaInput = document.getElementById('mulai_sewa');
                                    var selesaiSewaInput = document.getElementById('selesai_sewa');
                                    var totalHargaInput = document.getElementById('total_harga');

                                    kameraSelect.addEventListener('change', updateTotalHarga);
                                    mulaiSewaInput.addEventListener('change', updateTotalHarga);
                                    selesaiSewaInput.addEventListener('change', updateTotalHarga);

                                    function updateTotalHarga() {
                                        var tanggalMulai = new Date(mulaiSewaInput.value);
                                        var tanggalSelesai = new Date(selesaiSewaInput.value);

                                        if (tanggalMulai && tanggalSelesai) {
                                            var selisihHari = (tanggalSelesai - tanggalMulai) / (1000 * 3600 * 24);
                                            var harga = Number('{{ $hargaKamera }}');
                                            var totalHarga = selisihHari > 0 ? selisihHari * harga : 0;

                                            totalHargaInput.value = totalHarga;
                                        } else {
                                            totalHargaInput.value = "";
                                        }
                                    }
                                </script>

                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Bukti Bayar</label>
                                    <input class="form-control" type="file" name="bukti_bayar" id="bukti_bayar">
                                </div>


                            </div>
                            <div class="card-footer">
                                <button class="btn btn-primary" type="submit">Create</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
