@extends('layouts')

@section("title","Home")
@section('content')

<link rel="stylesheet" href="{{ url('CSS/home.css') }}">

<!-- image slider -->
<div class="image-slider">
    <div class="img-list">
        <div class="images">
            <img src="{{url('Images/volunteer 3.jpg')}}" alt="">
        </div>
        <div class="images">
            <img src="{{url('Images/beach cleanup 1.jpg')}}" alt="">
        </div>
        <div class="images">
            <img src="{{url('Images/volunteer 2.jpg')}}" alt="">
        </div>
        <div class="images">
            <img src="{{url('Images/beach cleanup 3.jpg')}}" alt="">
        </div>
    </div>
    <div class="side-btns">
        <button id="pre"><</button>
        <button id="next">></button>
    </div>

    <ul class="dots">
        <li class="active"></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
</div>

<section class="about">
    <div class="about-content">
        <h2>GREEN VOLUNTEER NETWORK</h2>
        <p>The Green Volunteer Network is a community platform
            uniting individuals and organizations committed to
            environmental conservation. Through volunteer
            opportunities and collaborative initiatives, we empower
            members to take action for a sustainable future. Join us in
            protecting our planet through collective effort and
            environmental advocacy.
        </p>
        <a href="/about" class="green-btn"><button type="button">Read More About Us </button></a>

    </div>
</section>

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

<!-- Gallery -->
<section class="gallery">
        <div class="gal-container">
          <h1><span class="text-background">Recent Activities</span></h1>
          <hr class="hr">
          <div class="gallery-container">
            <img src="{{url('Images/volunteer 4.jpg')}}" alt="Image of volunteers working">
            <img src="{{url('Images/clean 1.jpg')}}" alt="Image of a happy community">
            <img src="{{url('Images/volunteer 3.jpg')}}" alt="Image of a happy community">
            <img src="{{url('Images/beach cealup 3.jpg')}}" alt="Image of a happy community">
            <img src="{{url('Images/Volunteer Activities 1.jpg')}}" alt="Image of a happy community">


            </div>
            
          <a href="/gallery" class="green-btn"><button type="button"> See more </button></a>
        </div>
      </section>
<!-- Impact -->
  <div class="impact-container">
    <h1>Our Impact</h1>
    <div class="impact-row">
      <div class="impact-box">
        <i class="fas fa-users"></i>
        <h3><span class="counter">1000+</span></h3>
        <P>Volunteers</P>
      </div>
      <div class="impact-box">
        <i class="fas fa-handshake"></i>
        <h3><span class="counter">50+</span></h3>
        <p>Organizations</p>
      </div>
      <div class="impact-box">
        <i class="fas fa-check-circle"></i>
        <h3><span class="counter">200+</span></h3>
        <p>Completed Projects</p>
      </div>
    </div>
    <p class="paragraph">Together, we're making a difference. See how your contribution can add to our growing impact!</p>
  </div>


<!-- image slider -->
    <script>
        let slider = document.querySelector('.image-slider .img-list');
        let items = document.querySelectorAll('.image-slider .img-list .images');
        let next = document.getElementById('next');
        let prev = document.getElementById('pre');
        let dots = document.querySelectorAll('.image-slider .dots li');

        let lengthItems = items.length - 1;
        let active = 0;
        next.onclick = function(){
            active = active + 1 <= lengthItems ? active + 1 : 0;
            reloadSlider();
        }
        prev.onclick = function(){
            active = active - 1 >= 0 ? active - 1 : lengthItems;
            reloadSlider();
        }
        let refreshInterval = setInterval(()=> {next.click()}, 3000);
        function reloadSlider(){
            slider.style.left = -items[active].offsetLeft + 'px';
             
            let last_active_dot = document.querySelector('.image-slider .dots li.active');
            last_active_dot.classList.remove('active');
            dots[active].classList.add('active');

            clearInterval(refreshInterval);
            refreshInterval = setInterval(()=> {next.click()}, 3000);

            
        }

        dots.forEach((li, key) => {
            li.addEventListener('click', ()=>{
                active = key;
                reloadSlider();
            })
        })
        window.onresize = function(event) {
            reloadSlider();
        };



        //section animation

        document.addEventListener("DOMContentLoaded", function() {
    const aboutSection = document.querySelector('.about');
    const cardsSection = document.querySelector('.cards');
    const gallerySection = document.querySelector('.gallery');
    const impactSection = document.querySelector('.impact-container');

    function isElementInViewport(el) {
        const rect = el.getBoundingClientRect();
        return (
            rect.top >= -100 && // Adjusted to start animation slightly before entering the viewport
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) + 100 && // Adjusted to end animation slightly after leaving the viewport
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    function addAnimationClass() {
        if (isElementInViewport(aboutSection)) {
            aboutSection.classList.add('animate');
        }
        if (isElementInViewport(cardsSection)) {
            cardsSection.classList.add('animate');
        }
        if (isElementInViewport(gallerySection)) {
            gallerySection.classList.add('animate');
        }
        if (isElementInViewport(impactSection)) {
            impactSection.classList.add('animate');
        }
    }

    addAnimationClass();

    window.addEventListener('scroll', addAnimationClass);
});

    </script>

@endsection



