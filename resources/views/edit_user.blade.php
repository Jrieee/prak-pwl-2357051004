@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="card shadow-sm">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="mb-0">Edit Pengguna</h5>
                            <small class="text-muted">Ubah data pengguna</small>
                        </div>
                        <a href="{{ url('/user') }}" class="btn btn-sm btn-outline-secondary">Kembali</a>
                    </div>

                    <div class="card-body">
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('user.update', $user->id) }}" method="POST" novalidate>
                            @csrf
                            @method('PUT')

                            <div class="form-floating mb-3">
                                <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama lengkap" value="{{ old('nama', $user->nama) }}" required>
                                <label for="nama">Nama</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" id="npm" name="npm" class="form-control" placeholder="NPM" value="{{ old('npm', $user->npm) }}">
                                <label for="npm">NPM</label>
                            </div>

                            <div class="mb-3">
                                <label for="kelas_id" class="form-label">Kelas</label>
                                <select name="kelas_id" id="kelas_id" class="form-select">
                                    <option value="">-- Pilih Kelas --</option>
                                    @foreach ($kelas as $kelasItem)
                                        <option value="{{ $kelasItem->id }}" {{ (old('kelas_id', $user->kelas_id) == $kelasItem->id) ? 'selected' : '' }}>{{ $kelasItem->nama_kelas }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                    <a href="{{ url('/user') }}" class="btn btn-link">Batal</a>
                                </div>
                                <small class="text-muted">Perubahan akan disimpan ke database.</small>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
