@extends('template')
@section('title', 'About Us')
 
@section('intro-header')
  <!-- Header -->
  <header class="intro-header text-white" style="background-image: url('{{ asset
 
('belajar_laravel/images/about.jpg') }}')">
    <div class="container text-center">
      <p class="title">About me.</p>
      <p class="lead">Lahir di pemalang 17 mei 2001 tepatnya di desa jaga mulya kecamatan warungpring, kabupaten Pemalang.<br/>
        Pendidikan terakhir di SMK ISLAM RANDUDONGKAL.</p>
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
          <h2>Hoby</h2>
          <p class="lead">Selain menyukai coding saya juga suka photograpy, game and design grafis walaupun nggak mahir-mahir amat hehe</p>
          <h2>Social Media</h2>
          <p>me on sosial media
          <a href="{{ url('https://www.instagram.com/ajissx/') }}" class="btn-primary mt-5 my-5">selengkapnya</a></p>
          <!-- Card Wider -->
<div class="card card-cascade wider">

  <!-- Card image -->
  <div class="view view-cascade overlay">
    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/photo6.jpg" alt="Card image cap">
    <a href="#!">
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>

  <!-- Card content -->
  <div class="card-body card-body-cascade text-center">

    <!-- Title -->
    <h4 class="card-title"><strong>Alison Belmont</strong></h4>
    <!-- Subtitle -->
    <h5 class="blue-text pb-2"><strong>Graffiti Artist</strong></h5>
    <!-- Text -->
    <p class="card-text">Sed ut perspiciatis unde omnis iste natus sit voluptatem accusantium doloremque
      laudantium, totam rem aperiam. </p>

    <!-- Linkedin -->
    <a class="px-2 fa-lg li-ic"><i class="fab fa-linkedin-in"></i></a>
    <!-- Twitter -->
    <a class="px-2 fa-lg tw-ic"><i class="fab fa-twitter"></i></a>
    <!-- Dribbble -->
    <a class="px-2 fa-lg fb-ic"><i class="fab fa-facebook-f"></i></a>

  </div>

</div>
<!-- Card Wider -->

<!-- Card Narrower -->
<div class="card card-cascade narrower">

  <!-- Card image -->
  <div class="view view-cascade overlay">
    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(147).jpg"
      alt="Card image cap">
    <a>
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>

  <!-- Card content -->
  <div class="card-body card-body-cascade">

    <!-- Label -->
    <h5 class="pink-text pb-2 pt-1"><i class="fas fa-utensils"></i> Culinary</h5>
    <!-- Title -->
    <h4 class="font-weight-bold card-title">Cheat day inspirations</h4>
    <!-- Text -->
    <p class="card-text">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit
      laboriosam, nisi ut aliquid ex ea commodi.</p>
    <!-- Button -->
    <a class="btn btn-unique">Button</a>

  </div>

</div>
<!-- Card Narrower -->

<!-- Card Regular -->
<div class="card card-cascade">

  <!-- Card image -->
  <div class="view view-cascade overlay">
    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/men.jpg" alt="Card image cap">
    <a>
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>

  <!-- Card content -->
  <div class="card-body card-body-cascade text-center">

    <!-- Title -->
    <h4 class="card-title"><strong>Billy Coleman</strong></h4>
    <!-- Subtitle -->
    <h6 class="font-weight-bold indigo-text py-2">Web developer</h6>
    <!-- Text -->
    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus, ex, recusandae.
      Facere modi sunt, quod quibusdam.
    </p>

    <!-- Facebook -->
    <a type="button" class="btn-floating btn-small btn-fb"><i class="fab fa-facebook-f"></i></a>
    <!-- Twitter -->
    <a type="button" class="btn-floating btn-small btn-tw"><i class="fab fa-twitter"></i></a>
    <!-- Google + -->
    <a type="button" class="btn-floating btn-small btn-dribbble"><i class="fab fa-dribbble"></i></a>

  </div>

</div>
<!-- Card Regular -->
        </div>
      </div>
    </div>
  </section>
  <!-- END : Main -->
@endsection