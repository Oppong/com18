@extends('welcome')
@section('title', '| Contact Us Page')

@section('content')
@include('includes.nav')
<div style="background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.8)), url('images/youth1.jpg'); height: 600px; background-size: cover; " >
  <div style="background-image: linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.8)), url('images/night.png');  height: 600px; background-size: cover; opacity:0.95;">
    <div class="banner">
      <h1 class="banner-heading animated bounceInDown delay-2s">CONTACT</h1>
      <p class="banner-body animated bounceInUp delay-3s">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
    </div>
  </div>
</div>

<div class="contact-form">
  <div class="row">
      <div class="col-md-12 text-center">
        <h1 class="contact-form-heading">CONTACT US</h1>
        <p class="">Have any Questions Let Us Know </p>
      </div>
  </div>

  <form class="text-center" action="" method="post">

    <div class="form-group py-2">
      <input type="text" name="name" placeholder="Your Name" class="form-control">
    </div>

    <div class="form-group py-2">
      <input type="text" name="email" placeholder="Your Email" class="form-control">
    </div>

    <div class="form-group py-2">
      <input type="text" name="subject" placeholder="Write a Subject" class="form-control">
    </div>
    <div class="form-group py-2">
      <textarea name="name" rows="8" cols="80" placeholder="Your message " class="form-control"></textarea>
    </div>

    <div class="">
        <button type="button" class="btn font-weight-bold text-white" style="background-color: #019090;">SUBMIT MESSAGE</button>
    </div>
  </form>
</div>


<div class="" style="background-color: #019090;">
  <div class="contact">
    <div class="row">
        <div class="col-sm-12 col-md-4 mb-4">
          <i class="fas fa-phone fa-lg icon text-white"></i>
          <h5 class="text-uppercase contact-title mt-3 text-white">Phone Number</h5>
          <p class="footer-body">+44 0495 04590 405 <br> +44 0495 04590 405</p>
        </div>

        <div class="col-sm-12 col-md-4 mb-4">
          <i class="fas fa-envelope fa-lg icon text-white"></i>
          <h5 class="text-uppercase contact-title mt-3 text-white">Email Address </h5>
          <p class="text-white mt-3">immanuelcomm18@gmail.com <br> immanue18@gmail.com </p>
        </div>

        <div class="col-sm-12 col-md-4 mb-4">
          <i class="fas fa-location-arrow fa-lg icon text-white"></i>
          <h5 class="text-uppercase contact-title mt-3 text-white">Location </h5>
          <p class="text-white mt-3"> Tema West (Collins Dawuda Road) <br> GPS: 000/000/112</p>
        </div>
    </div>
  </div>
</div>





@include('includes.footer')
@endsection
