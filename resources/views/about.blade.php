@extends('layouts')

@section("title","About GVN")
@section('content')
<link rel="stylesheet" href="{{url('CSS/about.css')}}">

<div class="about-us">
    <div class="about-us-up">
        <h1>About GVN</h1>
    </div>
    <div class="about-container">
        <div class="image">
            <img src="{{url('/Images/volunteer 2.jpg')}}" alt="">
        </div>
        <div class="introduction">
            <p>The Green Volunteer Network Project has stepped up to help connect people who want to
                help the environment with organizations that need support. We all know that there are big
                environmental problems like climate change, the loss of animal and plant species, and we
                need to work together to solve them. But sometimes people and organizations who want to
                help find the right places to volunteer find it difficult to manage all the volunteers. That's
                where our project comes in. We're creating a website where anyone can easily find and sign
                up for volunteer opportunities, like planting trees or helping with wildlife surveys. Our goal is
                to make it simple for both volunteers and organizations. By bringing everyone to the same
                platform, we hope to create a stronger community working together for a healthier
                environment.
            </p>
            <br>
            <p>    
                The main goals are to involve more people in volunteering for environmental causes and to
                teach more people why protecting the environment is so important. With this site, we want to
                make it easy for anyone to get involved and make a difference. By giving organizations a
                better way to connect with volunteers, we hope to inspire more people to help. And this also
                provides the opportunity to make necessary donations. With these goals in mind, I believe
                that this project can make a difference in protecting our environment for the future.
            </p>
        </div>
        <div class="mission-vision">
            <div class="card">
              <h2>Mission</h2>
              <p>Our mission is to mobilize a global community of volunteers dedicated
                 to environmental conservation and sustainability. Through collaborative action, 
                 education, and advocacy, we strive to protect ecosystems, preserve biodiversity,
                  and promote eco-friendly practices. Together, we work towards a greener,
                   healthier planet for all.
                </p>
            </div>
            <div class="card">
              <h2>Vision</h2>
              <p>
              To create a thriving planet where every individual is empowered
               to safeguard and cherish the natural world for present and future generations.
              </p>
            </div>
          </div>
    </div>
</div>
@endsection


