<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title")</title>
    <link rel="stylesheet" href="{{ url('CSS/header.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">

</head>
<body>
    <header>
        <div class="header-up">
            <div class="up-items">
                <div class="searchBar">
                    <input type="text" placeholder="Search here...">
                    <button><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
                <a href="{{ url('/') }}"><img src="{{ url('Images/GVN Logo.png') }}" alt="GVN"></a>
            </div>
        </div>
        <div class="header-down">
            <ul class="nav-links">
                <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ url('/') }}" >Home</a></li>
                <li class="dropdown {{ Request::is('volunteers*') ? 'active' : '' }}">
                    <a href="#" class="dropbtn">Volunteer <i class="fa-solid fa-caret-down"></i></a> 
                    <div class="dropdown-content">
                        <a href="{{ url('/volunteers') }}">Volunteers</a>
                        <a href="{{ url('/opportunities') }}">Opportunities</a>
                    </div>
                </li>              
                <li class="{{ Request::is('organizations*') ? 'active' : '' }}"><a href="/organizations">Organizations</a></li>
                <li class="{{ Request::is('event*') ? 'active' : '' }}"><a href="/event">Events Calendar</a></li>
                <li class="{{ Request::is('about*') ? 'active' : '' }}"><a href="{{ url('/about') }}">About GVN</a></li>
                <li class="{{ Request::is('contact*') ? 'active' : '' }}"><a href="/contact">Contact Us</a></li>
                <li class="{{ Request::is('donation*') ? 'active' : '' }}"><a href="/donation">Donation</a></li>

            </ul>
            <li class="dropdown">
                <button class="join-btn dropbtn">Join Now</button>
                <div class="dropdown-btn-content">
                    <a href="/volunteerSign">Join as a Volunteer</a>
                    <a href="/orgSign">Register your Organization</a>
                    <a href="/login">Login</a>

                </div>
            </li>
        </div>
    </header>
    <div class="content">
        @yield('content')
    </div>

    
</body>
</html>
