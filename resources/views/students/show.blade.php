@extends('layout.main')

@section('title', 'Detail Mahasiswa')

@section('container')
<div class="container">
  <div class="row">
    <div class="col-6">
      <h1 class="mt-2">Detail Mahasiswa</h1>

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">{{ $student->nama }}</h5>
          <h6 class="card-subtitle mb-2 text-muted">{{ $student->nis }}</h6>
          <p class="card-text">{{ $student->email }}</p>
          <p class="card-text">{{ $student->nohp }}</p>
          <p class="card-text">{{ $student->jurusan }}</p>
          <p class="card-text">{{ $student->alamat }}</p>

          <a href="/students/{{ $student->id }}/edit" class="btn btn-primary btn-sm">Edit</a>
          <form action="/students/{{ $student->id }}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin untuk menghapus data ini ?')">Delete</button>
          </form>
          <a href="/students" class="card-link">Kembali</a>
        </div>
      </div>

    </div>
  </div>
</div>
@endsection