@extends('layouts.main')

@section('content')

<nav>
    <h4>Data Peminjaman</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Data Peminjaman</li>
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
              <p>
                <a class="btn btn-primary" href="{{ route('peminjaman.create') }}">Tambah Pinjam</a>
              </p>
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nama Peminjam</th>
                    <th>Nama Kamera</th>
                    <th>Mulai Sewa</th>
                    <th>Selesai Sewa</th>
                    <th>Total Harga</th>
                    <th>Bukti</th>
                    <th>Status</th>
                    <th>Aksi</th>
                    
                  </tr>
                </thead>
                <tbody>
                  
                  @forelse ($data as $item)
                    <tr>

                        <td>{{ $item->id_pinjam }}</td>
                        <td>{{ $item->penyewa->nama }}</td>
                        <td>{{ $item->barang_sewa->nama_kamera }}</td>
                        <td>{{ $item->mulai_sewa }}</td>
                        <td>{{ $item->selesai_sewa }}</td>
                        <td>{{ $item->total_harga }}</td>
                        <td>
                          <img style="max-width:100px;max-height:100px" src="{{ url('image_kamera').'/'.$item->image_kamera }}" alt="">
                        </td>
                        <td>{{ $item->status }}</td>
                        <td>
                      </td>
                    </tr>
                  @empty
                    <tr>
                      <td colspan="6">
                          No record found!
                      </td>
                    </tr>
                  @endforelse
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



@endsection