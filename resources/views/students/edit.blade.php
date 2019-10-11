@extends('layout.main')

@section('title', 'Form Ubah Data Mahasiswa')

@section('container')
<div class="container">
  <div class="row">
    <div class="col-6">
      <h1 class="mt-2">Form Ubah Data Mahasiswa</h1>

      <form method="post" action="/students/{{ $student->id }}">
        @method('patch')
        @csrf
        <div class="form-group">
          <label for="nis">NIS</label>
          <input type="text" class="form-control @error('nis') is-invalid @enderror" id="nis" name="nis" placeholder="masukkan nis" value="{{ $student->nis }}">
          @error('nis')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="masukkan nama" value="{{ $student->nama }}">
          @error('nama')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="masukkan email" value="{{ $student->email }}">
          @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <div class="form-group">
          <label for="nohp">No HP</label>
          <input type="text" class="form-control @error('nohp') is-invalid @enderror" id="nohp" name="nohp" placeholder="masukkan nohp" value="{{ $student->nohp }}">
          @error('nohp')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <div class="form-group">
          <label for="jurusan">Jurusan</label>
          <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" name="jurusan" placeholder="masukkan jurusan" value="{{ $student->jurusan }}">
          @error('jurusan')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <div class="form-group">
          <label for="alamat">Alamat</label>
          <textarea class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat">{{ $student->alamat }}</textarea>
          @error('alamat')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <button type="submit" class="btn btn-primary">Ubah Data</button>
      </form>

    </div>
  </div>
</div>
@endsection