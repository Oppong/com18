@extends('welcome')
@section('title', '| Hompe Page')

@section('content')
@include('includes.nav')
@include('includes.banner')


<div class="introduction-section">
  <div class="row">
        <div class="col-sm-12 col-md-4 mb-4">
            <i class="fas fa-feather fa-lg icon"></i>
            <h5 class="text-uppercase introduction-section-title mt-3">OUR BELIEFS</h5>
            <p class="text-justify text-muted mt-3 introduction-section-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              Ut enim ad minim veniam, quis nostrud </p>
        </div>
        <div class="col-sm-12 col-md-4 mb-4">
            <i class="fas fa-boxes fa-lg icon"></i>
            <h5 class="text-uppercase introduction-section-title mt-3">OUR MISSION</h5>
            <p class="text-justify text-muted mt-3 introduction-section-body ">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              Ut enim ad minim veniam, quis </p>
        </div>

        <div class="col-sm-12 col-md-4 mb-4">
            <i class="fab fa-twitter fa-lg icon"></i>
            <h5 class="text-uppercase introduction-section-title mt-3">OUR COMMUNITY</h5>
            <p class="text-justify text-muted mt-3 introduction-section-body ">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              Ut enim ad minim veniam, quis </p>
        </div>

    </div>
</div>


<div style="background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.8)), url('images/mid2.jpg'); height: 500px; background-size: cover; " >
    <div class="mid">
      <h4 class="mid-heading ">Bible studies Every Sunday</h4>
      <p class="mid-body ">For the word of God is quick, and powerful, and sharper than any twoedged sword, piercing even to the dividing asunder of soul and spirit, and of the joints and marrow, and is a discerner of the thoughts and intents of the heart.</p>
      <a type="button" class="btn btn-outline-light btn-lg mt-4 animated bounceInUp delay-2s" href="contact"> STUDY THE BIBLE</a>
    </div>
</div>

<div class="row">
  <div class="col-sm-12 col-md-6">
    <div class="ministry text-center">
      <h4 class="ministry-heading ">God's Ministry</h4>
      <p class=" ministry-body">For the word of God is quick, and powerful, and sharper than any twoedged sword, piercing even to the dividing asunder of soul and spirit, and of the joints and marrow, and is a discerner of the thoughts and intents of the heart.</p>
      <a type="button" class="btn btn-light text-white mt-4" href="personal" style="background-color: #3C8D8A;"> GET INVOLVED</a>
    </div>
  </div>

  <div class="col-sm-12 col-md-6">
    <div class="beliefs text-center text-white">
      <h4 class="beliefs-heading">Our Beliefs</h4>
      <p class="beliefs-body text-center">For the word of God is quick, and powerful, and sharper than any twoedged sword, piercing even to the dividing asunder of soul and spirit, and of the joints and marrow, and is a discerner of the thoughts and intents of the heart.</p>
      <a type="button" class="btn btn-light mt-4" href="beliefs" style="background-color: #fff; color:#3C8D8A;"> OUR BELIEFS </a>
    </div>
  </div>
</div>


<div class="events">
  <div class="row">
      <div class="col-md-12 text-center">
        <h1 class="contact-form-heading">Upcoming Events</h1>
        <p class="">For the word of God is quick, and powerful, and sharper than any</p>
      </div>
  </div>

    <div class="row mt-5">
  @foreach($events as $event)
      <div class="col-sm-12 col-md-4 mb-5" style="color:#3C8D8A;">
        <h1 class="font-weight-bold">{{$event->event_date}}</h1>
        <h4 class="font-weight-bold">{{$event->event_month}}</h4>
        <h6 class="font-weight-bold mt-4 text-dark">{{$event->event_title}}</h6>
        <p class="text-muted mt-2">{{$event->event_description}}</p>
        <div class="row">
          <i class="fas fa-map-marker-alt mr-2"></i>
          <p class="text-muted">{{$event->event_location}}</p>
        </div>
      </div>
    @endforeach
    </div>


</div>
@include('includes.footer')
@endsection
