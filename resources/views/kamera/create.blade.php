@extends('layouts.main')

@section('content')

<div id="app">
    <div class="main-wrapper">
      <div class="main-content">
        <div class="container">
          <form method="post" action="{{ route('kamera.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="card mt-5">
              <div class="card-header">
                <h3>Tambah Kamera</h3>
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
                    <input type="text" class="form-control" name="id_kamera" value="{{ old('id_kamera') }}" placeholder="ID kamera">
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Nama Kamera</label>
                    <input type="text" class="form-control" name="nama_kamera" value="{{ old('nama_kamera') }}"  placeholder="Nama kamera">
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Keterangan</label>
                    <input type="text" class="form-control" name="keterangan" value="{{ old('keterangan') }}"  placeholder="Keterangan kamera">
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Harga Sewa / Jam</label>
                    <input type="text" class="form-control" name="harga_sewa" value="{{ old('harga_sewa') }}"  placeholder="Harga sewa kamera perjam">
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Stok</label>
                    <input type="text" class="form-control" name="stok_kamera" value="{{ old('stok_kamera') }}"  placeholder="Stock">
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Type</label>
                    <input type="text" class="form-control" name="type_kamera" value="{{ old('type_kamera') }}"  placeholder="Type kamera">
                  </div>
                  <div class="mb-3">
                    <label for="formFile" class="form-label">Image</label>
                    <input class="form-control" type="file" name="image_kamera" id="formFile">
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