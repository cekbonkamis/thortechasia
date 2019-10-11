@extends('layout.main')

@section('title', 'Mahasiswa')

@section('container')
<div class="container">
  <div class="row">
    <div class="col-6">
      <h1 class="mt-2">Daftar Mahasiswa</h1>

      <a href="/students/create" class="btn btn-primary mb-3">Tambah Data Mahasiswa</a>

      @if (session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
      @endif

      @if (session('danger'))
      <div class="alert alert-danger">
        {{ session('danger') }}
      </div>
      @endif

      @foreach($students as $student)
      <ul class="list-group">
        <li class="list-group-item d-flex justify-content-between align-items-center">
          {{ $student->nama }}
          <a href="/students/{{ $student->id }}" class="badge badge-info">detail</a>
        </li>
      </ul>
      @endforeach

    </div>
  </div>
</div>
@endsection