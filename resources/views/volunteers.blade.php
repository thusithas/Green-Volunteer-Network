@extends('layouts')

@section("title","Volunteers")
@section('content')
<link rel="stylesheet" href="{{url('CSS/Volunteer.css')}}">

<div class="volunteers">
  <div class="volunteer-up">
    <h1>Volunteers</h1>
  </div>
  <div class="mainImg">
    <img src="{{url('Images/Volunteer 10.jpg')}}" alt="">
  </div>

  <div class="user-section">
    <div class="user-section-content">
    <!-- before log -->
    <h2>Become a
    <span>VOLUNTEER</span>
    </h2>
    <a href=""><button>Join</button></a>

    <!-- After log -->

    <!-- <h2>Make a Difference <br>
     <span>With Us</span>
    </h2> -->
    </div>
    <div class="mainImg">
    <img src="{{url('Images/Volunteer Activities 1.jpg')}}" alt="">
  </div>

  </div>

  <!-- Volunteers section -->
  <section class="active-volunteers">
    <h1> <span class="text-background">Active Volunteers </span></h1>
    <hr class="hr">

    <!-- <div class="img-container">
        <div class="img-content">
            <div class="content1">
              <img src="{{url('Images/man 1.jpg')}}" alt="">

              <div class="con-text">
                <p>Name</p>
                <p>Mobile</p>
                <p>Email</p>
                <p>City</p>
              </div>
            </div>
        </div>
        
    </div> -->
  
    <div class="image-container">
   <div class="img-content">
      <img src="{{url('Images/man 1.jpg')}}" alt="" class="circular-image">
      <div class="image-text">
        <p>Name</p>
        <p>Mobile</p>
        <p>Email</p>
        <p>City</p>
      </div>
      </div>

      <div class="img-content">
      <img src="{{url('Images/man 1.jpg')}}" alt="" class="circular-image">
      <div class="image-text">
        <p>Name</p>
        <p>Mobile</p>
        <p>Email</p>
        <p>City</p>
      </div>
      </div>

      <div class="img-content">
      <img src="{{url('Images/man 1.jpg')}}" alt="" class="circular-image">
      <div class="image-text">
        <p>Name</p>
        <p>Mobile</p>
        <p>Email</p>
        <p>City</p>
      </div>
      </div>
    </div>
    <div class="image-container">
   <div class="img-content">
      <img src="{{url('Images/man 1.jpg')}}" alt="" class="circular-image">
      <div class="image-text">
        <p>Name</p>
        <p>Mobile</p>
        <p>Email</p>
        <p>City</p>
      </div>
      </div>

      <div class="img-content">
      <img src="{{url('Images/man 1.jpg')}}" alt="" class="circular-image">
      <div class="image-text">
        <p>Name</p>
        <p>Mobile</p>
        <p>Email</p>
        <p>City</p>
      </div>
      </div>

      <div class="img-content">
      <img src="{{url('Images/man 1.jpg')}}" alt="" class="circular-image">
      <div class="image-text">
        <p>Name</p>
        <p>Mobile</p>
        <p>Email</p>
        <p>City</p>
      </div>
      </div>
    </div>
  </section>

   <!-- Volunteers opportunities -->
   <section class="active-volunteers">
    <!-- card -->
<div class="cards">
    <h1><span class="text-background">Featured Volunteer Opportunities</span></h1>
    <hr class="hr">
    <div class="card-container">
        <!-- card 1 -->
        <div class="card">
            <img src="{{url('Images/TreePlanting 1.jpeg')}}" alt="">
            <div class="card-content">
                <h3>Tree Planting Events</h3>
                <p>Join us for a tree 
                    planting event at the local park.
                </p>
                <button type="button">
                    Click
                </button>
            </div>
        </div>

        <!-- card 2 -->
        <div class="card">
            <img src="{{url('Images/beach cleanup 2.jpg')}}" alt="">
            <div class="card-content">
                <h3>Beach Cleanup</h3>
                <p>Help us clean up the 
                    beach and protect marine life
                </p>
                <button type="button">
                    Click
                </button>
            </div>
        </div>

        <!-- card 3 -->
        <div class="card">
            <img src="{{url('Images/Wildlife Conservation 1.jpeg')}}" alt="">
            <div class="card-content">
                <h3>Wildlife Conservation </h3>
                <p>Join our team for a 
                    wildlife conservation project.
                </p>
                <button type="button">
                    Click
                </button>
            </div>
        </div>
    </div>
</div>
  </section>
</div>
@endsection