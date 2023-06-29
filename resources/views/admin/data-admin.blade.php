@extends('layouts.main')

@section('content')
    <nav>
        <h4>Data Admin</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Data Admin</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                {{-- button tambah admin --}}
                <div class="card-body" style="padding-top: 20px">
                    <div class="table-responsive">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-admin-modal">
                            Tambah Admin
                        </button>
                        <table class="table table-hover" id="example" style="width: 100%">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $no++ }}.</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>
                                            <a href="{{ route('edit-admin', $item->id) }}"
                                                class="btn btn-warning bi bi-pencil-square mx-1"></a>

                                            <form action="{{ route('hapus-admin', $item->id) }}" method="post"
                                                onsubmit="return confirm('Yakin akan menghapus data ?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" name="submit"
                                                    class="btn btn-danger bi bi-trash mx-1"></button>
                                            </form>
                                            {{-- <a href="" class="btn btn-danger bi bi-trash mx-1"></a> --}}

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- modal tambah admin --}}
    <div class="modal fade" id="add-admin-modal" tabindex="-1" role="dialog" aria-labelledby="add-admin-modal-label"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="add-admin-modal-label">Tambah Admin</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('tambah-admin') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nama" class="col-form-label">Nama:</label>
                            <input type="text" class="form-control" id="name" name="nama" required>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-form-label">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-form-label">Password:</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
            </div>
        </div>
    </div>
@endsection
