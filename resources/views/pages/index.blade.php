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



@include('includes.footer')
@endsection
