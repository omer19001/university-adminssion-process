@extends('layouts.app')

@section('content')
<div class="container-fluid">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
       
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item active" style="background-image: url({{asset('images/silder.jpg')}})">
        <div class="carousel-caption    d-md-block slider-text">
          <h2 class="display-4  ">the altimute college admission advisor</h2>
          <p class="lead  ">start by creating an account and then login to find the right college for you .</p>
          <a href="{{route('register')}}" class="btn btn-primary btn-lg">register</a>
          <a href="{{route('login')}}" class="btn btn-success btn-lg">login</a>
        </div>
      </div>
      <!-- Slide Two - Set the background image for this slide in the line below -->
      
      <!-- Slide Three - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('https://source.unsplash.com/szFUQoyvrxM/1920x1080')">
        <div class="carousel-caption   d-md-block slider-text">
          <h2 class="display-4">this is the first college admission advisor for hight school gaduates .</h2>
          <p class="lead">start by creating an account and then login to find the right college for you .</p>
          <a href="{{route('register')}}" class="btn btn-primary btn-lg">register</a>
          <a href="{{route('login')}}" class="btn btn-success btn-lg">login</a>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
  </div>
@endsection
