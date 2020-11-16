@extends('template')
@section('title', 'Contact Us')
 
@section('intro-header')
  <!-- Header -->
  <header class="intro-header text-white" style="background: url('{{ asset
 
('belajar_laravel/images/contact-bg.jpg') }}') no-repeat center center;">
    <div class="container text-center">
      <h1>Contact</h1>
      <p class="lead">Contact Us</p>
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
          <h2>Contact Us</h2>
          <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      <!-- Card -->
<div class="card">

  <!-- Card image -->
  <div class="view overlay">
    <img class="card-img-top" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg"
      alt="Card image cap">
    <a href="#!">
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>

  <!-- Card content -->
  <div class="card-body">

    <!-- Title -->
    <h4 class="card-title">Card title</h4>
    <!-- Text -->
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
      content.</p>
    <!-- Button -->
    <a href="#" class="btn btn-primary">Button</a>

  </div>

</div>
<!-- Card -->
      </div>
    </div>
  </section>
  <!-- END : Main -->
@endsection