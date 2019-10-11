@extends('layout.main')

@section('title', 'Form Tambah Data Mahasiswa')

@section('container')
<div class="container">
  <div class="row">
    <div class="col-6">
      <h1 class="mt-2">Form Tambah Data Mahasiswa</h1>

      <form method="post" action="/students">
        @csrf
        <div class="form-group">
          <label for="nis">NIS</label>
          <input type="text" class="form-control @error('nis') is-invalid @enderror" id="nis" name="nis" placeholder="masukkan nis" value="{{ old('nis') }}">
          @error('nis')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="masukkan nama" value="{{ old('nama') }}">
          @error('nama')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="masukkan email" value="{{ old('email') }}">
          @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <div class="form-group">
          <label for="nohp">No HP</label>
          <input type="text" class="form-control @error('nohp') is-invalid @enderror" id="nohp" name="nohp" placeholder="masukkan nohp" value="{{ old('nohp') }}">
          @error('nohp')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <div class="form-group">
          <label for="jurusan">Jurusan</label>
          <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" name="jurusan" placeholder="masukkan jurusan" value="{{ old('jurusan') }}">
          @error('jurusan')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <div class="form-group">
          <label for="alamat">Alamat</label>
          <textarea class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat"  value="{{ old('alamat') }}"></textarea>
          @error('alamat')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
      </form>

    </div>
  </div>
</div>
@endsection