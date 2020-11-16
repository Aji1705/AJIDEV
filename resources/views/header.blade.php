<!DOCTYPE html>
<html lang="en">
 
<head>
 
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
 
<title>@yield('title')</title>
 
<!-- Bootstrap core CSS -->
<link href="{{ asset('belajar_laravel/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
 
<!-- Custom styles -->
<link href="{{ asset('belajar_laravel/css/style.css') }}" rel="stylesheet">
 
</head>
 
<body>
 
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand text-white js-scroll-trigger" href="{{ url('/') }}">AJI DEV</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-
 
target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle 
 
navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger text-white" href="{{ url('/') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger text-white" href="{{ url('/about') }}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger text-white" href="{{ url('/contact') }}">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger text-white" href="{{ url('/artikel') }}">Article</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END : Navigation -->