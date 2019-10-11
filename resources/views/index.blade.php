@extends('layout.main')

@section('title', 'Home')

@section('container')
<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="jumbotron jumbotron-fluid mt-3">
        <div class="container">
          <h1 class="display-4">{{ $nama }}</h1>
          <p class="lead">Selamat Datang di Website Sederhana Saya.</p>
          <a href="/students" class="btn btn-primary">Selengkapnya</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection