@extends('layouts.main')

@section('content')
    <nav>
        <h4>Laporan Peminjaman</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Laporan Peminjaman</li>
        </ol>
    </nav>

    <div id="app">
        <div class="main-wrapper">
            <div class="main-content">
                <div class="container">
                    <div class="card mt-5">
                        <div class="card-header">


                        </div>
                        <div class="card-body">
                            @if (session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif

                            @if (session('error'))
                                <div class="alert alert-danger">{{ session('error') }}</div>
                            @endif
                            <div class="form-group">
                                <label for="jenis"  class="form-label">Pilih Jenis Laporan</label>
                                <select name="jenis" id="jenis" class="form-control">
                                    <option><<- Pilih Jenis Laporan ->></option>
                                    <option value="1">Bulanan</option>
                                    <option value="2">Tahunan</option>
                                </select>
                            </div>
                            <form action="{{ route('rekap.bulanan') }}" style="display: none" id="bulanan" method="POST">
                                @csrf
                                <div class="form-group mt-2">
                                    <label for="jenis"  class="form-label">Pilih Bulan:</label>
                                    <input type="month" class="form-control" name="bulan">
                                </div>
                                <button type="submit" class="btn btn-primary mt-2">Download</button>
                            </form>
                            <form action="{{ route('rekap.tahunan') }}" style="display: none" id="tahunan" method="post">
                                @csrf
                                <div class="form-group mt-2">
                                    <label for="tahun"  class="form-label">Pilih Tahun:</label>
                                    <?php $years = range(2000, strftime("%Y", time())); ?>
                                    <select id="tahun" name="tahun" class="form-control">
                                        <option>Pilih Tahun</option>
                                        <?php foreach($years as $year) : ?>
                                          <option value="<?php echo $year; ?>"><?php echo $year; ?></option>
                                        <?php endforeach; ?>
                                      </select>
                                </div>
                                <button type="submit" class="btn btn-primary mt-2">Download</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Get the select element
        const selectElement = document.getElementById('jenis');
        // Get the forms
        const bulananForm = document.getElementById('bulanan');
        const tahunanForm = document.getElementById('tahunan');
        // Add an event listener to the select element
        selectElement.addEventListener('change', function() {
        // Check the selected value
        if (this.value === '1') {
            // Show the bulanan form and hide the tahunan form
            bulananForm.style.display = 'block';
            tahunanForm.style.display = 'none';
        } else if (this.value === '2') {
            // Show the tahunan form and hide the bulanan form
            bulananForm.style.display = 'none';
            tahunanForm.style.display = 'block';
        } else {
            // Hide both forms if no option is selected
            bulananForm.style.display = 'none';
            tahunanForm.style.display = 'none';
        }
        });
    </script>
@endsection
