@extends('layouts')

@section("title","Contact Us")
@section('content')
<link rel="stylesheet" href="{{ url('CSS/contact.css') }}">

<div class="contact-us">
    <div class="contact-up">
        <h1>Contact Us</h1>
    </div>
    <div class="contact-container">
        <div class="container-left">
            <h1>Let's talk <p>on something <span>great</span></p><p> together</h1></p>
            <div class="contact-info">
                <p><i class="fa-solid fa-envelope"></i> greenvnetwork@gmail.com</p>
                <p><i class="fa-solid fa-location-dot"></i> 23,Newtown,Rathnapura</p>
                <p><i class="fa-solid fa-phone"></i> 011 233 4466</p>
            </div>
            <div class="social-btn">
                <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                <a href=""><i class="fa-brands fa-youtube"></i></a>
                <a href=""><i class="fa-brands fa-twitter"></i></a>
                <a href=""><i class="fa-brands fa-instagram"></i></a>
            </div>
        </div>
        <div class="container-right">
            <form action="">
                <div class="input-box">
                    <input type="text" required>
                    <label><i class="fa-regular fa-user"></i> Name</label>
                </div>
                
                <div class="input-box">
                    <input type="text" required>
                    <label><i class="fa-regular fa-envelope"></i> Email</label>
                </div>

                <div class="input-box">
                    <textarea rows="6" cols="50" placeholder="Your message"></textarea>
               </div>  
               <div class="input-box"> 
                    <input type="submit" value="Send Message">
               </div> 
            </form>
        </div>
    </div>
</div>

@endsection



