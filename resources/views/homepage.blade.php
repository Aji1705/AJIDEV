@extends('template')
@section('title', 'Aji dev')
 
@section('intro-header')
  <!-- Header -->
  <header class="intro-header text-white" style="background-image: url('{{ asset
 
('belajar_laravel/images/home.jpg') }}')">
    <div class="container text-center mt-5">
      <p class="title">AJI DEV</p>
      <p class="subtitle">Bangun karir Kamu di bidang kreatif digital untuk menjadi seorang profesional</p>
    </div>
  </header>
  <!-- END : Header -->
@endsection
 
@section('main')
    <!-- Main -->
    <section class="main">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2>Sedikit informasi</h2>
            <p class="lead">Saya adalah seorang junior web developer, Bekerja untuk Ligadigiwebs.id perusahaan yang bergerak di bidang developing website dan hosting</p>
          </div>
        </div>
      </div>
    </section>
    <!-- END : Main -->
@endsection