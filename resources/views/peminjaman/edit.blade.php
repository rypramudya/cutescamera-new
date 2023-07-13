@extends('layouts.main')

@section('content')

<div id="app">
    <div class="main-wrapper">
      <div class="main-content">
        <div class="container">
          <form method="post" action= "{{ route('peminjaman.update' , $data->id_pinjam) }}" 
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card mt-5">
              <div class="card-header">
                <h3>Verifikasi Peminjaman</h3>
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
                    <input type="text" class="form-control" name="id_pinjam" value="{{ $data->id_pinjam }}" placeholder="ID PINJAM">
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Nama Peminjam</label>
                    <select class="form-control select" name="user_id" id="user_id">
                        <option disabled value> Nama Peminjam </option>
                            <option value="{{ $data->id }}"> {{ Auth::user()->nama }}  </option>
                    </select>
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Nama kamera</label>
                    <input type="text" class="form-control" name="kamera_id" value="{{ $data->barang_sewa->id_kamera }}">
                  </div>

                  <div class="formbold-mb-3">
                        <label for="mulai_sewa" class="formbold-form-label">Mulai</label>
                        <input type="date" name="mulai_sewa" id="mulai_sewa"
                            class="formbold-form-input" value="{{ $data->selesai_sewa }}" />
                  </div>

                  <div class="formbold-mb-3">
                        <label for="selesai_sewa" class="formbold-form-label">Selesai</label>
                        <input type="date" name="selesai_sewa" id="selesai_sewa"
                            class="formbold-form-input" value="{{ $data->selesai_sewa }}" />
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Total Harga</label>
                    <input type="text" class="form-control" name="total_harga" value="{{ $data->total_harga }}" >
                  </div>
                
                  @if ($data->bukti_bayar)
                    <div class="mb-3">
                        <img style="max-width:100px;max-height:100px" src="{{ url('bukti_bayar').'/'.$data->bukti_bayar }}" alt="">
                    </div>
                      
                  @endif
            
                
                  <div class=" form-group">
                    <label for="status" class="form-label" >Status</label>
                    <select class="form-control" style="background-color: rgba(250, 247, 247, 0.993);   color: black;" id="status" name="status"
                        value="{{ $data->status }}">
                        <option selected disabled value>Status</option>
                        <option value="Pending">Pending</option>
                        <option value="Accept">Accept</option>
                        <option value="Denied">Denied</option>
                    </select>
                  </div>

              </div>
              <div class="card-footer">
                <button class="btn btn-primary" type="submit">Verifikasi</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

@endsection