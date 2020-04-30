@extends('welcome')
@section('title', '| About Us Page')

@section('content')
@include('includes.nav')
<div style="background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.8)), url('images/youth1.jpg'); height: 600px; background-size: cover; " >
  <div style="background-image: linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.8)), url('images/night.png');  height: 600px; background-size: cover; opacity:0.95;">
    <div class="banner">
      <h1 class="banner-heading animated bounceInDown delay-2s">ABOUT</h1>
      <p class="banner-body animated bounceInUp delay-3s">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
    </div>
  </div>
</div>


<div class="mission">
  <div class="row">
      <div class="col-md-12 text-center">
        <h3 class="mission-heading">OUR HISTORY  AND WHO WE ARE </h3>
        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor </p>
      </div>
  </div>

  <div class="row">
    <div class="col-sm-12 col-md-6 mb-4">
        <h5 class="text-uppercase introduction-section-title mt-3">OUR HISTORY</h5>
        <hr size="5" width="80" align="left" color="#019090" noshade>
        <p class="text-justify text-muted mt-3 introduction-section-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          Ut enim ad minim veniam, quis nostrud Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud </p>

        <p class="text-justify text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          Ut enim ad minim veniam, quis nostrud</p>

          <p class="text-justify text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud</p>
    </div>

    <div class="col-sm-12 col-md-6 mb-4">
        <h5 class="text-uppercase introduction-section-title mt-3">WHO WE ARE</h5>
        <hr size="5" width="80" align="left" color="#019090" noshade>
        <p class="text-justify text-muted mt-3 introduction-section-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          Ut enim ad minim veniam, quis nostrud Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud </p>

        <p class="text-justify text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          Ut enim ad minim veniam, quis nostrud</p>

          <p class="text-justify text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud</p>
    </div>
  </div>

</div>

@include('includes.footer')
@endsection
