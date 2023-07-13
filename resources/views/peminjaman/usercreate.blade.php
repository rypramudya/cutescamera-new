<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
     <!-- Favicons -->
     <link href="assets/img/pnc.png" rel="icon">
     <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
 
     <!-- Google Fonts -->
     <link href="https://fonts.gstatic.com" rel="preconnect">
     <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
 
     <!-- Vendor CSS Files -->
     <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
     <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
     <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
     <link href="{{ asset('assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
     <link href="{{ asset('assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
     <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
     <link href="{{ asset('assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap.min.css">
 
 
     <!-- Template Main CSS File -->
     <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>
<body>
    
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
                          <div class="alert-title"><h4>Whoops!</h4></div>
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
                        <input type="text" class="form-control" name="id_pinjam" value="{{ old('id_pinjam') }}" placeholder="ID PINJAM">
                      </div>
    
                      <div class="mb-3">
                        <label class="form-label">Nama Peminjam</label>
                        <select class="form-control select" name="user_id" id="user_id">
                            <option disabled value> Nama Peminjam </option>
                            @foreach ($cus as $c)
                            
                                <option value="{{ $c->id }}"> {{ Auth::user()->nama }}  </option>
                            @endforeach
                            
                        </select>
                      </div>
    
                      <div class="mb-3">
                        <label class="form-label">Nama Kamera</label>
                        <select class="form-control select" name="kamera_id" id="kamera_id">
                            <option disabled value> Pilih Kamera </option>
                            @foreach ($kam as $item)
                                <option value="{{ $item->id_kamera}}"> {{$item->nama_kamera}}  </option>
                            @endforeach
    
                        </select>
                      </div>
    
                      <div class="formbold-mb-3">
                            <label for="mulai_sewa" class="formbold-form-label">Mulai</label>
                            <input type="date" name="mulai_sewa" id="mulai_sewa"
                                class="formbold-form-input" value="{{ old('mulai_sewa') }}" />
                      </div>
                      <br>
                      <div class="formbold-mb-3">
                            <label for="selesai_sewa" class="formbold-form-label">Selesai</label>
                            <input type="date" name="selesai_sewa" id="selesai_sewa"
                                class="formbold-form-input" value="{{ old('selesai_sewa') }}" />
                      </div>
                      <br>
                      <div class="mb-3">
                        <label class="form-label">Total Harga</label>
                        <input type="number" class="form-control" name="total_harga" value="{{ old('total_harga') }}"  placeholder="Total Harga">
                      </div>
                     
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
</body>
</html>

