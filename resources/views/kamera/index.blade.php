@extends('layouts.main')

@section('content')

<nav>
    <h4>Data Produk</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Data Kamera</li>
    </ol>
</nav>

<div id="app">
    <div class="main-wrapper">
      <div class="main-content">
        <div class="container">
          <div class="card mt-5">
            <div class="card-header">
              <h3>List Product</h3>
              
            </div>
            <div class="card-body">
              @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
              @endif

              @if (session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
              @endif
              <p>
                <a class="btn btn-primary" href="{{ route('kamera.create') }}">New Product</a>
              </p>
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>Image</th>
                    <th>ID</th>
                    <th>Nama Kamera</th>
                    <th>Keterangan</th>
                    <th>Harga Sewa/jam</th>
                    <th>Stok</th>
                    <th>Type</th>
                    <th>Aksi</th>
                    
                  </tr>
                </thead>
                <tbody>
                  @forelse ($data as $item)
                    <tr>

                      <td>{{ $item->image_kamera }}</td>
                      <td>{{ $item->id_kamera }}</td>
                      <td>{{ $item->nama_kamera }}</td>
                      <td>{{ $item->keterangan }}</td>
                      <td>{{ $item->harga_sewa }}</td>
                      <td>{{ $item->stok_kamera }}</td>
                      <td>{{ $item->type_kamera }}</td>
                      <td>
                        <a class= "btn btn-primary" href="">Update</a>
                        <a class= "btn btn-danger" href="">Delete</a>
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