@extends('layouts')

@section("title","Opportunities")
@section('content')
<link rel="stylesheet" href="{{url('CSS/opportunities.css')}}">

<div class="opportunities">
  <div class="opportunities-up">
    <h1>Volunteer Opportunities</h1>
  </div>

    <main>
        <section class="top">
            <div>
                <h1>Find Volunteer Opportunities That Matter to You</h1>
                <p>Search for opportunities based on your interests, skills, and location.</p>
                <form class="search-form">
                    <input type="text" placeholder="Search keywords">
                    <select name="location">
                        <option value="">All Locations</option>
                        <option value="Ampara">Ampara</option>
                        <option value="Anuradhapura">Anuradhapura</option>
                        <option value="Badulla">Badulla</option>
                        <option value="Batticaloa">Batticaloa</option>
                        <option value="Colombo">Colombo</option>
                        <option value="Galle">Galle</option>
                        <option value="Gampaha">Gampaha</option>
                        <option value="Hambantota">Hambantota</option>
                        <option value="Jaffna">Jaffna</option>
                        <option value="Kalutara">Kalutara</option>
                        <option value="Kandy">Kandy</option>
                        <option value="Kegalle">Kegalle</option>
                        <option value="Kilinochchi">Kilinochchi</option>
                        <option value="Kurunegala">Kurunegala</option>
                        <option value="Mannar">Mannar</option>
                        <option value="Matale">Matale</option>
                        <option value="Matara">Matara</option>
                        <option value="Mullaitivu">Mullaitivu</option>
                        <option value="Nuwara Eliya">Nuwara Eliya</option>
                        <option value="Polonnaruwa">Polonnaruwa</option>
                        <option value="Puttalam">Puttalam</option>
                        <option value="Ratnapura">Ratnapura</option>
                        <option value="Trincomalee">Trincomalee</option>
                        <option value="Vavuniya">Vavuniya</option>


                    </select>
                    <select name="category">
                        <option value="">All Categories</option>
                        <option value="animals">Animal Welfare</option>
                        <option value="environment">Environmental Protection</option>
                        <option value="education">Education & Literacy</option>
                    </select>
                    <button type="submit">Find Opportunities</button>
                </form>
            </div>
        </section>

        <section class="oppor">
    <h2>Featured Volunteer Opportunities</h2>
    <div class="opportunities-container" id="opportunities-container">
        <div class="opportunity">
            <h3>Animal Shelter Volunteer</h3>
            <p>Walk dogs, play with cats, and help care for animals in need.</p>
            <button>Learn More</button>
        </div>
        <div class="opportunity">
            <h3>Community Garden Volunteer</h3>
            <p>Help plant, maintain, and harvest fresh produce for local families.</p>
            <button>Learn More</button>
        </div>
        <div class="opportunity">
            <h3>Food Bank Volunteer</h3>
            <p>Assist in sorting and distributing food to those in need.</p>
            <button>Learn More</button>
        </div>
        <div class="opportunity">
            <h3>Senior Center Volunteer</h3>
            <p>Engage in activities and provide companionship for seniors.</p>
            <button>Learn More</button>
        </div>
        <div class="opportunity extra-opportunity">
            <h3>Beach Cleanup Volunteer</h3>
            <p>Help keep our beaches clean by picking up trash and debris.</p>
            <button>Learn More</button>
        </div>
        <div class="opportunity extra-opportunity">
            <h3>Library Assistant Volunteer</h3>
            <p>Support library staff with shelving books and assisting patrons.</p>
            <button>Learn More</button>
        </div>
        <div class="opportunity extra-opportunity">
            <h3>Tutor for Underprivileged Children</h3>
            <p>Provide educational support and mentorship to children in need.</p>
            <button>Learn More</button>
        </div>
        <div class="opportunity extra-opportunity">
            <h3>Park Restoration Volunteer</h3>
            <p>Assist in maintaining and improving local parks and trails.</p>
            <button>Learn More</button>
        </div>
        <div class="opportunity extra-opportunity">
            <h3>Homeless Shelter Volunteer</h3>
            <p>Help serve meals and provide support to homeless individuals.</p>
            <button>Learn More</button>
        </div>
        <div class="opportunity extra-opportunity">
            <h3>Hospital Volunteer</h3>
            <p>Support medical staff and assist with patient care activities.</p>
            <button>Learn More</button>
        </div>
        <div class="opportunity extra-opportunity">
            <h3>Animal Rescue Volunteer</h3>
            <p>Assist in rescuing and caring for injured or abandoned animals.</p>
            <button>Learn More</button>
        </div>
        <div class="opportunity extra-opportunity">
            <h3>Environmental Advocacy Volunteer</h3>
            <p>Raise awareness and advocate for environmental protection policies.</p>
            <button>Learn More</button>
        </div>
        <div class="opportunity extra-opportunity">
            <h3>Community Arts Volunteer</h3>
            <p>Support local art projects and community art events.</p>
            <button>Learn More</button>
        </div>
        <div class="opportunity extra-opportunity">
            <h3>Museum Docent Volunteer</h3>
            <p>Provide tours and educational experiences to museum visitors.</p>
            <button>Learn More</button>
        </div>
        <div class="opportunity extra-opportunity">
            <h3>Disaster Relief Volunteer</h3>
            <p>Assist with disaster preparedness and response efforts.</p>
            <button>Learn More</button>
        </div>
    </div>
    <button class="view-all-btn" id="view-all-btn">View All Opportunities</button>
    <button class="show-less-btn" id="show-less-btn" style="display: none;">Show Less</button>
</section>

        <section class="benefits">
            <h2>Why Volunteer with Us?</h2>
            <ul>
                <li>
                    <img src="{{url('/Images/Diverse Opportunities.jpg')}}" alt="Diverse Opportunities">
                    <h3>Discover a Wide Range of Opportunities</h3>
                    <p>Find volunteer experiences that match your interests and skills.</p>
                </li>
                <li>
                    <img src="{{url('/Images/impact.jpg')}}" alt="Make a Difference">
                    <h3>Make a Positive Impact in Your Community</h3>
                    <p>Contribute to causes you care about and create lasting change.</p>
                </li>
                <li>
                    <img src="{{url('/Images/connect.jpg')}}" alt="Connect with Others">
                    <h3>Connect with Like-Minded People</h3>
                    <p>Build new relationships and expand your network.</p>
                </li>
            </ul>
        </section>

        <section class="cta">
            <h2>Ready to Make a Difference?</h2>
            <p>Register today to start browsing and applying for volunteer opportunities.</p>
            <button class="register-btn">Register Now</button>
        </section>

        <section class="interactive-map">
            <h2>Opportunities Map</h2>
            <div class="map">
            <svg   version="1.2" viewbox="0 0 1000 1000"  xmlns="http://www.w3.org/2000/svg">
 <g id="features">

 <a xlink:title="Trincomalee" xlink:href="">
     <path d="M534.5 241.9l0.1 3.6 2.7 2-2.4 2.3-2.2 2.6 3.6 2.8 3.9-0.3 3.2-2.9 2.4-4.2 1.5-3.9 0.1 0.1 8.3 10.1 7.4 12.7 3 3.1 4.2 1.3 3.4 2.7 5 12.1 1.2 1.3 1.3 1.4 0.1 0 5.6 2.6 2.9 6 3.2 12.2 0.6-2.2 0.7-0.9 1.3 0.3 2.2 1.2-0.6 2.3 6.4 7 2.1 3.5 0 4.2-1.7 1.7-2.4 1.1-2.2 2.5 0.1 0 1.6-0.4 1.8-0.5 0.4-0.2 0.8-0.5 0.1 0.1 5 10.9 0.7 5.6-5.7 1-0.1 0 1.2-3.8-1.5-3-2.6-0.4-1.8 4 0.6 3.1 1.7 2.2 0.9 2.4-1.7 3.5-1.4-1-2.5-1.9-4-2.5-4-1-3.9 1.7-3 4 1.1 2.1 3.6-0.5 4.8-4 3.3 3.5 2.9 4.2 3.6 3.5 5.1 1.5 10.6-0.2 3.6-2.3-2.4-5.4 6.1-2.8 2.4-0.8 2.5 0.2 0.1 0 2.8 1.6 2.5 2.8 1.9 3.2 1.7 9.3 3.6 12 0.1 3.1 0.1 3.2-2.9-2.1-3.1-6.2-2.7-1.3-0.1 1.7 1.1 7.6 0.1 0.5 1.3 2.9 1.5 0.8 1.4 0.6 0.1 0 3.1 0 2.4 1.2 1.5 8.9 1.8 6.2 0.3 1 0.5 3.8-20.7-2.2-3.9 1.3-3.5 0-2.9 0-2.1 2.3-1.5 2.8-1.8 1.3-1.6 1.4-1.4 6.1-1.2 2.2-3.3 7.6-5.7 1.4-1.2-0.4-0.9-0.7 2.7-1.7 1.2-2.9-0.8-4.4 0.1-3-0.3-2.9-1.7-2.4-2.9 0.3-4.1-2.1-3.7-2.9-3.8-2.2-4.1 0-17.5-4.3-9.7 1-2.9-2.9-0.9-4.9-3.6-2.7-3.7-1.5-2.7-4-3.5 1 5-17.9 0.6-2.9 0.9-2.8 2.9-2.8 3.2-2.2 1.9-3.4-1.5-3.6-2.7-2-2-2.7-3.3-7.7-6.1-9.1-0.9-5.6-2.5-2.4-1.9-2.2-0.2-4.8 3.5-8.3-1.7-4.9-4.3-9.4-0.1-10 3.9-5.8 2.7-6-2.2-1.7-1.9-2.5-3.5-3.9-10.1-7-5.8-3.4-6.8-0.1-6.5 2.6 1-4 1.9-3.4 9.1-4.2 10.6-1.4 4.5-1.3 4-2.3 4.4-1.3 3.6-1.6z" id="LK53" name="Trikuṇāmalaya">
</a>
 <a xlink:title="Mullaitivu" xlink:href=""> <path d="M534.5 241.9l-3.6 1.6-4.4 1.3-4 2.3-4.5 1.3-10.6 1.4-9.1 4.2 4.3-15.8-2.8-3.7-7.4-4.5-7.2-1.1-3.4 2.3-3.6 0.9 0.4-3.2 2.2-3.3-2.7-4.7-6.2-0.7-0.8-7.5-7.2-2.7-7.5 0.2-0.5 1.1-0.4 1.2-2.2 1.3-2.3 1.1-4 3.5-5.6 2.5-3.6-5.3-5.7-3.6-8 0.2-4.4-0.3-4.2 0.4-0.6 3.4 1.8 2.5 3.4 0.5 0.2 1.9 0 2.1 0.9 4 0.2 3.9-4.1 6.3-6.4 5.2-10.7 6.8-38.1 2 3-8.4-1.1-1.6-1.1-2.1 0.8-2.7 1.2-2.6 0.8-2.6 1-2.3 5.1-1.7 0.3-4.8-0.5-5.5 0.9-3.4 0.1-3.5-0.2-1.8-0.5-1.6-4.2-6.8-1.4-7.6-0.3-8 6.1 0.8-0.6-6.5 6-7.9 17.7-2 6.3-0.1 6.2 1.1 6.1-0.6 4-10.1 3.1-0.1 10.5 0.6 5.8-0.4 3.9-2.1 3.2-10.6 1.1-0.3 1.7 2.2 4.6 3.8 5.2 2.9-0.6-5.3 0.7-5.3 4.9-3.9 0.5-3.9 1.1-1.1 1.2-0.8 1.4-1.2 27.3 22.2 0.2 0.4 1.7 2.7 2.5 3.3 5 4.7 3.1 4-2.7 1.5-0.1 0-1.5-0.7-0.2-0.1-0.1 0-2.4-3.1-1.3-0.7-4.2-0.7-1.8 0.5 0.9 1.9 0.3 0.6 11.9 11.2 4.7 2.6-1.8-2.9-1.1-2.7 0.5-1.9 3.2-0.8 1.5 1 2.5 7.3 2.2 4.4 8.8 17.6-1.8-0.6-4.9-1.9-3 0-1.3 3.3 1.8 0.8 3.7 0.7 3.4 2.1 0 0.3 0.5 5 1.6 0 0.7-1.3 0.7-0.6 0.8-0.4 1.1-0.7 1.1 4.6 0.2 0.6 3.2 7.5 4.4 6.7 4.5 2.9 0.3 0.3 0.5 0.4 0 1.7-1.1 1.6-2.1 0.8-0.6-0.7-2.6-4.1-2.7-1.5-6.3-1.6-3.7-1.7 1.7 2.4 0.9 1.3 8.3 7.8 0 0.8z" id="LK45" name="Mulativ">
</a>
 <a xlink:title="Jaffna" xlink:href=""> <path d="M466.1 133.1l-1.4 1.2-1.2 0.8-15.7-10.8-5.4-2.5-4.8-1.1-0.7-0.3-0.7-0.3-4.1-3.2-1.6-0.9-1.6-0.3-1.9 0.1-0.4-2.3-3-9 0.6 0.3 0-1.8-8.4-4.2-20.3-16.7-16.6-19.2-8.4-4.6-13.2-3.1-3.5-2.5-0.5-3.6 4.9-2.1 1.5-0.3 4.8-0.8 9.6-0.4 4.6 0.8 3.2 2.3 2.1 7.6 2.1 3.2 30.2 35.7 4.4 3.2 9 5.2 36.4 29.6z m-85.3-37.6l-11.8-5.2-4.3-2.5-2.9 0 0.6 5.7 1.6 1.6 2.4 1.9 1.5 2.3-1.5 3-1.7 0.6-1.7-1-1.5-1.3-4.5-2.3-8.6-7.5-4.9-2.1 2.5 2.8 4.5 3.9 2.6 2.8-5.6-1-5.5-2.3-11.1-6.2-8.9-7-5.2-1.9-0.5-0.3-2-1.3-1.9-0.8-0.3 1.7-2.5-1.7-1-2.3-0.4-2.7-0.9-3-1.5-2.6-0.9-1.2-2.4-3.1-1.5-2.7 5-2.5 9.1-8.5 4-1.8 0.1 0 18 1.6 9.4-1.1 3.4 0.4 1.4 3.2-0.3 4.9 0.7 1.7 2 0.6 1.9 0.3 5.5 1.4 1.2 0.7 1 2 2.5-0.1 1.9-0.6 0.8-0.2 1.1-0.2 0.8-0.1 1.8 1.1 0.8 0.4 6.4 7.1 9.3 10.1 0 0.1-3.1 6.7-4.9 8.5z m-121 27l-1.9 1.7-1.9 1.8-5.8 0.4-5.4-1.8-2.3-3 0-9.6 0.6-2.4 1.6 0.3 1.5 2 1 2.4 4 1.3 4.7 0.4 1.2 0.8 2.7 5.7z m38-27.4l-3.6-2.6-3.5-5.4-5.6-11.2 2.5-4 0.6-5.1 1.5-4.2 5-1.1 2.6 0.8 0.1 0 0.2 2-0.9 2.8-0.6 3.1 0.1 3.2 0.3 2.6 0 0.2 0.2 0.5 0.8 1.8 1.1 1.2 0.8 1 1 0.2 4.5-0.2 0.7 0.7 0.3 3.5 0.6 1.4 2.6 1.7 3.6 1.5 3 1.7 0.2 0.6 0.8 1.7-1.6 1.6-3 0-3.3-1-2.3-1.4-1.6-0.4-4.2 2.4-2.9 0.4z" id="LK41" name="Yāpanaya">
</a>
 <a xlink:title="Kilinochchi" xlink:href=""> <path d="M423.6 104.5l3 9 0.4 2.3-2.8 0.2-1.8 0.7-0.3 0.4-0.5 0.8-0.9 0.5-3.1-2.3-1.2-0.2-7.5 0.2-2.1-0.6-16.4-14.3-7-4.6-0.1 0-2.5-1.1 4.9-8.5 3.1-6.7 0-0.1 11 12.1 7.2 4.5 16.6 7.7z m39.9 30.6l-1.1 1.1-0.5 3.9-4.9 3.9-0.7 5.3 0.6 5.3-5.2-2.9-4.6-3.8-1.7-2.2-1.1 0.3-3.2 10.6-3.9 2.1-5.8 0.4-10.5-0.6-3.1 0.1-4 10.1-6.1 0.6-6.2-1.1-6.3 0.1-17.7 2-6 7.9 0.6 6.5-6.1-0.8-4.4 3.3-4.9 2.5-7.9 0.7-1.7 0 1.4-5.7 0-13.6 0.5-2-0.4-1.3-2.7-0.5-6.4-3.3-2.4-2.4-1.6-4.4-0.3-0.8-1.1-5.4-0.1-3.1 2.8-3 5.1-2.5 5.6-1.8 4.7-0.7 2.1-1.1 5-6.7 0.6-0.5 0.9-0.7 1.7-1 2.1-0.8 2.6-0.4-2.2-4-1.3-1.8-1.3-1.8-3.4-3.4-4.5-3.4-17-10-3.5-4.3 7.4 0.2 7.1 2.9 13.9 8.1 13.2 3.3 3.5 2.3 5.5 4.8 1.3 2.5-2.8 1.4 0.6 1.6 0.8 1.6-1.4 1.6 4.8 3.3 11.4-2.8 20.8-8.3 5.7 0.5 12.2 3.4 14.5 6.6 11 2.1z" id="LK42" name="Kilinŏchchi">
</a>
 <a xlink:title="Mannar" xlink:href=""> <path d="M366 183.9l0.3 8 1.4 7.6 4.2 6.8 0.5 1.6 0.2 1.8-0.1 3.5-0.9 3.4 0.5 5.5-0.3 4.8-5.1 1.7-1 2.3-0.8 2.6-1.2 2.6-0.8 2.7 1.1 2.1 1.1 1.6-3 8.4 38.1-2 6.2 2.9 3.6 5.7 3.5 9-1.2 8.1-12.3 4.6-13 1.6-8.4-0.9-6.4 3.6-3.5 7.8-5.9 0.6-0.9 3.5 0 3 5.4 4.2 8.8 11.3-22.5 5.9-11.3-0.1-10.2-4.2 1.8 13.7-0.5 21.6-2.2-0.3-1.9-0.9-6.2-3.5-5.9-2.5-6.8-0.6-6.1-2.3-2.6-1.6 0.9-0.9 0.3-1.2 2.3-7.1 0.3-0.3 0.2-0.2 0.5-2 2.2-4.7 2-22.7-5.5-14.5 0.4-2.5 0.4-16.5 0-0.2-0.5-5.6-0.7-2.7-1.2-2-1-2.4 2.2-1.1 3.1-0.6 2-0.6 13.4-12.1 7-3.5 2.9-2.5 1.5-5.7 2.8-5.9 1.5-8.1 7.5-19.2 0.2-1.1 0.7-2.8 1.7 0 7.9-0.7 4.9-2.5 4.4-3.3z m-110.1 37.7l-2.6-1-1.1-2.2 0.7-2.3 3-1 10.3 0 4.6 1.2 4.7 1.2 9.8 3.8 9.4 5.4 7.9 7.7-0.1 0-3.7-0.8-6.7-3.3-3.9-0.7 6 6.8 4.7 5.4 2.1 3.7-5.5-0.7-3.6-2.8-2.5-3-1.9-1.4-2.3-1.2-9.5-8.5-4.7-2.1-4.8-2.2-3.4-0.9-1.8-0.5-5.1-0.6z" id="LK43" name="Mannārama">
</a>
 <a xlink:title="Puttalam" xlink:href=""> <path d="M301.7 339.1l2.6 1.6 6.1 2.3 6.8 0.6 5.9 2.5 6.2 3.5 1.3 9.6-4.2 8.9-7.2 5.9-0.3 1.7-1 2.1-3.9 1.8-2.6 5.7 3.4 6.6 5.8 23.4 1.4 4.2 4.8 0 3.9-1.8 4.1 3.1 4.7-0.2 3.4 2.8 2.5 3.3 0.5 4.4-0.1 4.7 2.4 9.2 0.8 4.6 2.2 4.1 3.2 1.1 2.7 1.8-0.6 2.8-0.9 3 0.2 6.3-0.2 5.3-1.7 2.6-1.4 2.7 2.8 5.2-2.9 2.2-4.8-2.7-1.3 2.3-0.1 2.8-1.8 1.9-1.4 0.4 0.2-0.4 0.2-0.4-3.4 1.6-1.4 3.2-0.4 2.4-0.9 2.1-4.9 2.5-1.1 2.4-0.6 2.5-2.8 1.9-3 1.6-0.9 2.5-0.4 2.8-2.2 5.6-0.7 6.2 1.2 2.6 0.9 2.4-1.6 2.2-2.5 1-3.3 0.3-3 0.9-1.6 2.7-1.1 3 2.8 0.7 1.3 2.2-2.8 1.5-3.3 0.8-1.6 2.3-0.9 2.7-3.5 5.9-2.5 6.4-0.4 8 0.4 8 8.5 45.8 0.6 13.8-4-1.6-3.4 2.2-2.7-0.4-1.8-2-4.5 0.6-4.3 1.1-5.5-0.2-9.9-73-1.4-3 0.9-1 0.7-0.1 1.7 1.1 0.4-4 1.1-4.7 0.3-2.2 0.3-2.3-1.3-3.5-1.8-3.2-0.3-2.1-0.3-2.1 0-8.6-5.3-26.1-0.7-3-2.7-5.7-2.3-12.1-3.8-9.5-5.8-26.2 0-7.5 1 0.5 0.1 0.1 0 0.2 0.5 0.8 0.8-4.3-1.2-13.8-1.2-4.1 3.8-2.5 3.6-4.7 2.6-5.3 1-4.4 1.1-2.9 6.8-10.8-0.1 0.2-3.4 8.2-4.4 7.7 1 1.9 0.2 0.4 1.7 1.8 2.2 0.8 2.8 0-2.3 6.4-2.3 4.6-1 0.8-1.1 0.1-0.8 0.7-0.4 2.4 0.2 5.6-0.2 1.7-3.9 12.4 0.2 2.4 0.3 4.6 4 4.8 1.1 1.3-4.6 9.7 7.4 5.4 10.7 0.8 5.4-3.9-1-4.1-1.8-3.2-0.6-1.3-0.9-1-2-2.6-2.3-1.5-0.7-2.5 7.8-14.8-0.3-2.7-1-2-1.2-1.7-0.7-1.7-0.2-2.8 0.3-4.9-0.1-1.9 0-0.1-0.1-0.4-0.6-1.6-0.4-0.4-0.5-0.4-0.4-1 0.4-2.6 1.1-2.2 3-3.9 0.7-2.6 0.5-4.9 2.1-9.7 2.2-22.8 1.4-2.6 1.5-1.3 1.2-1.5 0.5-3.4 0-9.7 1.3-4.8 3.1-3 3.8-2.6 2.1-2.3z" id="LK62" name="Puttalama">
</a>
 <a xlink:title="Gampaha" xlink:href=""> <path d="M282.1 640.8l5.5 0.2 4.3-1.1 4.5-0.6 1.8 2 2.7 0.4 3.4-2.2 4 1.6 4.9-1.9 8.8-6.9 5.5-0.2 6.4 4.4 6.6-1.9 5.7-4 6.4-1.2 2.1 2.3 0.6 2 1.4 1.9 5.7 6.6 4 2.9 0.4 3.1-2.3 1.8-0.6 8-3 2.8-3.6 1.9-1 6.6 2.8 5.8 5.6-1.3 4.9 1.4-1.7 3.9-3.4 2.4-2.9 6.7-1.2 6.8 3.4 11 0.1 2.1-0.7 1.9-4.2 1.5-6.2-0.6-4.6 2.1-3.7 3.6-0.9 4.4-0.3 4.5-4.9 0.3-4.1-0.5-2.7-1.1-2.6-1.4-2.7-2.5-3.1-1.9-3.9 0.2-4 0.8-11.5-3.3-2.1 0.8-1.8 1-4.1-1-3.8-2-4.9-1.9 2.3-5.5 0.6-2.6-0.1-2.7 0-0.1-11-39.2 1.5-5.8-0.1 3.6 0.9 2.2 1.2 1.7 1.1 2.1 2.2 7.7 1.1 1.9 1.4 0 0.4-2.2 0.6-0.9 0.6-0.2 0.2 0.1-0.1-7.1-0.5-3.1-1.2-2.6-1.1-0.7-3-0.7-1.3-0.9-0.2-0.3-0.8-1.7 0.4-1.9 0.8-1.7 0.5-1.6-1.4-10z" id="LK12" name="Gampaha">
</a>
 <a xlink:title="Colombo" xlink:href=""> <path d="M287.1 713l4.9 1.9 3.8 2 4.1 1 1.8-1 2.1-0.8 11.5 3.3 4-0.8 3.9-0.2 3.1 1.9 2.7 2.5 2.6 1.4 2.7 1.1 4.1 0.5 4.9-0.3 0.3-4.5 0.9-4.4 3.7-3.6 4.6-2.1 6.2 0.6 4.2-1.5 5 0.4 4 2 0.7 4.2-3.1 2.9 0.3 2.2 0.1 2.3-2.9 3.6-2.5 4-1 3.2-1.2 2.8 5.7 6-5.1 4.6-6.7-1.6-7.5 3.2 1.5 6.7-4.5-1.2-3-6.9-1.2-0.7-1.5-0.3-2.8 3.3-3.6 1.8-2.5-1.1-2.6 0.3-8.9 7.6-2.5 1.1-2.7 0.7-6.7 2.5-10.6-6.7-0.3 3.9 1.4 4.3 0.7 3 0.1 2.9-0.1 0.1-0.4 0.6-8.6-22.1-3.1-17.5-0.3-1.7 0-16.7 0.3-0.7z" id="LK11" name="Kŏḷamba">
</a>
 <a xlink:title="Kalutara" xlink:href=""> <path d="M298.8 771.7l0.4-0.6 0.1-0.1-0.1-2.9-0.7-3-1.4-4.3 0.3-3.9 10.6 6.7 6.7-2.5 2.7-0.7 2.5-1.1 8.9-7.6 2.6-0.3 2.5 1.1 3.6-1.8 2.8-3.3 1.5 0.3 1.2 0.7 3 6.9 4.5 1.2-1.5-6.7 7.5-3.2 6.7 1.6 0.8 4.7 4 10.7-0.3 3.7 1.4 4.4 2.3 4.6 7 6.8 1.4 6.8 2.5 2.4 3.2 1.2 5.2 4.7 3.3 6.4-3.5 1.4 1.3 3.9 9.7 13.7 8.3 14.5-8.2 1.9-8 5-4.3 1.9 0 4.9 1.7 5.1-0.4 4.6-3.6-2.8-3.6-3.5-6.8-5.2-7 0.6-6.3 3.5-9.9-1.9-3.9-2.6-3.7-3.2-4.6-2-4.2-0.9-8.4-3.9-1.2-2-1.7-1.6-2.3 0.9-1.5 1-1.4-1.2-1.2-1.7-1.6-0.4-1-4-0.5-0.4-1-0.6-1-0.9-0.6-1.2 0.2-1.4 1.1-0.3 1.2 0.1 0.6 0-1.8-12.2-0.1-1-4.8-12.3-11.2-28.7z" id="LK13" name="Kaḷutara">
</a>
 <a xlink:title="Galle" xlink:href=""> <path d="M317.7 834.6l1.6 0.4 1.2 1.7 1.4 1.2 1.5-1 2.3-0.9 1.7 1.6 1.2 2 8.4 3.9 4.2 0.9 4.6 2 3.7 3.2 3.9 2.6 9.9 1.9 6.3-3.5 7-0.6 6.8 5.2 3.6 3.5 3.6 2.8 0.4-4.6-1.7-5.1 0-4.9 4.3-1.9 8-5 8.2-1.9 2.8 2.9 3.2 2.7 3.9 1.6 3.4 0.1 7.2 3.5 3.7-0.1 2 2.9-4.8 1.4-3.1 3.1 2.7 4.2 3.6 3.5-1.4 6.6-7.1-1.6-4.4-4.2-4.9-3.6-3.8-1.2-3.7 1 2.3 4.3 4.6 2.9 4.8 7 1.8 6.6-4.1 5-8.1-1.4 2.4 2.8 1.1 3.8-1.6 4.8-2.1 4.5 1.5 4.5 3.5 3.4 4.1 2.8 3.7 3.3-3.2 3.7-3.6 3.7-3.2 1.3-1.4 2.2 0.7 2.4 1.8 1 4.1 1.7-1.4 2.8-4.2 1.5-2.5 4.5 0 2.6 0.4 2.4 0.1 0.3-1.5-0.3-1.1-0.5-0.8-1-1-1.1-1.8-0.5-1 0.3-0.9 0.8-0.9 0.6-1.2 0-0.4-0.3-0.4-0.4-1.4-2-0.8-0.5-0.1-0.1-1.7-0.6-9.8-3.5-4.1-0.9-2.8-0.6-5-4-1.2-0.5-2.2-1.1-1.7 1.7-4.3-3.5-18.8-19.9-1.5-1.2-0.2-0.2-0.5-0.7-0.3-0.9 0.1-2-0.6-1-0.8-1.1-2.1-2.7-10.6-22.5-0.5-2.1 0.1-2 0-1.9-0.4-1.2-1.9-4-1.9-10.8-4.3-7.6-2.6-10.9z" id="LK31" name="Gālla">
</a>
 <a xlink:title="Matara" xlink:href=""> <path d="M410.6 945.3l-0.1-0.3-0.4-2.4 0-2.6 2.5-4.5 4.2-1.5 1.4-2.8-4.1-1.7-1.8-1-0.7-2.4 1.4-2.2 3.2-1.3 3.6-3.7 3.2-3.7-3.7-3.3-4.1-2.8-3.5-3.4-1.5-4.5 2.1-4.5 1.6-4.8-1.1-3.8-2.4-2.8 8.1 1.4 4.1-5-1.8-6.6-4.8-7-4.6-2.9-2.3-4.3 3.7-1 3.8 1.2 4.9 3.6 4.4 4.2 7.1 1.6 1.4-6.6-3.6-3.5-2.7-4.2 3.1-3.1 4.8-1.4 4.5-0.7 4.5-1 1.6-3.8 3.9 0 10.2-1.4 3.3 6.2-1.5 4.1 4.1 0.7 5.5-0.9 2.6 3.2-0.2 2.2 3 2.2-1.2 1.2 0 2.2-2.2 0.9 0.4 1.7-1.6 4.1 1.6 3.7-8.9 6.7-2.8 9.9 4 2.9 4.4 1.6 2-0.3 1.3 1.2-1.1 2.4-1.4 2.1 0.8 4 3.8 2 2.7-0.4 2.5 0.5-0.8 2-2.1 2 2.5 8.9-7.5 3.2 0.6 3.7 3.2 2.1 2.2 0.2 2 1.1-0.1 1.9-1.7 0.9 2.8 4.2 5.8 2.7 1.3 0.7-3.5 4.1-9.5-0.5-3.9 0.5-3.1 1.2-3.2 1.8-5.6 4.2-1.6 0.4-1.6 0.3-3.8-1.4-4.1-2.1-2.3-0.7-1.6-0.5-13.4 1.6-3.8-0.8-1.9-1.9-1.2-2.5-1-1.5-0.7-1.1-3.9 2.3-3.5 0.3-6.2-0.9z" id="LK32" name="Mātara">
</a>
 <a xlink:title="Hambantota" xlink:href=""> <path d="M490 942.5l-1.3-0.7-5.8-2.7-2.8-4.2 1.7-0.9 0.1-1.9-2-1.1-2.2-0.2-3.2-2.1-0.6-3.7 7.5-3.2-2.5-8.9 2.1-2 0.8-2-2.5-0.5-2.7 0.4-3.8-2-0.8-4 1.4-2.1 1.1-2.4-1.3-1.2-2 0.3-4.4-1.6-4-2.9 2.8-9.9 8.9-6.7-1.6-3.7 1.6-4.1-0.4-1.7 2.2-0.9 13.1 2.6 16.9 6.1 4.5 0.7 4.4-1.1 4.4-0.4 3.5 2.8 2.7 3.1 8.4 1.7 4.9 1.6 1.1-4.1-2.1-5.9-4.3-4.7 5.7-3.7 5.8-3.2 6.5-2.1 5-3.8-2.2-5.2 1.1-5.2 2.9 0 3.2-0.3 1.9-2.6-0.1-3.1 2.9 2 2.1-2.5 5.8 0 5.8 0.7 3.9 1.4 1.7 4.2 2.3 0.4 2.5-0.1 2.1-1.5 2.9-0.4 4.3 5.7 3.6 6 5.7 2.4 6.3-3.5 2.3-2.3 3.5-1.4 6.7-1.8 13.7-5.3 2.6-1.8 0.5 0.6 2.1 0.3 6.1-2.2 6.4 1.4 3-4.9 0-2-0.1-1.9 1-1.4 1-1.7-1.1-3.1-0.1-3.9 4.5-3.7 5.5-2.4 4.2-4.1 4.9-3.7 6.2-1.1 4.1-4.9 6.9 8.5 2.6 0.2 3 0.4 3.8 4.4 5.6 1.8 2.1 0.6-7.1 11.2-7.2 7.3-13.4 9.5-4.4 1.3-5.8 3.1-42.8 33.7-8.6 4.7-27.8 9.8-0.4-3.3 0-0.2-1.6-1.3-0.1 0-0.3 0.1-1.4 0.4-0.9 1.8-0.5 3.9-1.2 1.5-2 0.6-2.7 1.1-5 3.1-5 2.2-24 5.1-11.7 4-12.7 2.4-5.8 2.2-3.5 4.9-6.3-1.2-3.8 1.5-2.2 0.8-8.9 6.6-8.8 6.6-0.6 0.6z" id="LK33" name="Hambantŏṭa">
</a>
 <a xlink:title="Ampara" xlink:href=""> <path d="M716.5 818.5l-2.1-0.6-5.6-1.8-3.8-4.4-3-0.4-2.6-0.2-6.9-8.5 6-85.1-1.2-4.6-2.7-4 0-4.5-1.6-4.4 1-4.6 0.5-4.4-6.8-4.1-8.2-2.1-1.2-1.1-1.5-0.8-1.7 0-1.8-0.8-1.8-3.2-1-3.6-2.9-5.5 2.7-7.2 4.8-5.7 3.7-2.9-5-7-0.7-5-3.2-5.6-5.1-4.4-0.9-4.5 0.3-5.6-2.7-12.2 0.4-3.1-1.5-0.3-1.4-0.9 3.4-5.3-4.6-1.2-5.7 3.1-2.8 1-2.6 1.1-0.8 2.2-1.6 2.5-3.2 0.8-2.3 0.2 0 3 1.3 2.7 0.2 2.8-1 2.3-1.6 1.9-1.1 1.6-4.7 2.6-5.7-0.2 0.1 8.9 1.2 8.7-4.3 3.1-4.7 1.6-2-3.8-1.8-4.4-0.8-4.2-2.1-4.2-1.6-2.7-1-2.1-2.8-0.5-2 0.5-3.4-3.4-2.6-5.5-1.5-10.2-0.9-2.9-0.7-2.9 0.6-2.1 1.3-2.4 2.4-11.3-0.8-11.6-10.3-2.2-11.3 6.3-4.9 4.6-2.8 1.1-2.3 0.5-4.2 1.5-5.7-9.5-1.8-5.6-0.3-3.8-1.5-3.3-3.5-2.1-0.6-0.6 2.2-11.1-0.5-4.4-1.7-5.3 0.2-3.9 4.3 0 8.6-0.8 4.2-0.7 8.4 3.2 6.8 6.8 11.2 3.5 5.4 3.1 4.5 0.6 0.6-2.4 1-2.8 1.5-1.5 1.3-2.5-0.7-5.5 1-5.2 6.3 1.2 7.4-0.4 6.1 2 7.9 11.5 5.1 4.8 7 2 7.3 1.5-0.3 6.9-2.3 6.8 0.5 3.9 2.1 3.4 7.3 4.4 3.9 3.8 15.1 2.6 15.4-1.6 5.4-3.1 0.1 5.9 1.8 5.7 0.7 13.1 1.6 3.8 8.1-8 4.7-3.8 6.3-1 4.4-0.7 0.2 0.9 1.9 0.4 1.9-2.4 1.4 0 1.8 9.4-0.1 3.4 1.6 0 0-0.1 0.2-3.2 0.6-3.2 0.9-2.8 1.5-1.9 0-1.6-0.2-0.4-0.5-1.4 0.4-0.8 1.3 0.6 2.1 2 0.7 1.8 0.5 5 3.6 5.6 5.7 19.8-1.1 54.6 0.6 3.7 2.4 8.2 0.3 4.8-1.3 9.3-10.6 36.8-0.6 3.8-0.2 5-0.8 4.2-3.3 6.5-0.8 2.9-1.3 4-4.4 7-2.1 3.3 1.5 5.6-2.5 6.7-14.6 23.2z" id="LK52" name="Ampāra">
</a>
 <a xlink:title="Batticaloa" xlink:href=""> <path d="M623.8 412.4l3.9-1.3 20.7 2.2 0.7 2.4 4.8 16.3 1.8 10.6-4.2 5.8-2.3-9.6-0.3-1.4-3.6-9.7-1.6 0-0.3 7.4 0.3 2.3-0.2-0.1-0.2 0.7 0 1.2 0.4 1.4 0.7 0.9 2 0.6 0.4 0.7 1.9 4.9 4 3 3.9-0.3 1.3-5 1.5 0 1.4 2.6 0.4 0.7 1.9 8.4 1.9 3.3 2.6 2.8 1.7 2.7 2.8 6.6 1.1-1.1 1.5-1.1 0.7-1.1 1 2.2-1 1.1 0.5 0.9 0.5 0.5 0 0.1 0.3 0.5 0.1 1.1 0.1-0.1 1.1-0.9 2.4-1.2 1.2-0.9 0.5 1.3 0.7 1.6-0.5 1.9-0.8 1.9 0 1.4 0.1 1.4 1.6 3.2 2.8 2.2 1.9 1.4 1.7 2.8-1.1 0.1-0.5 0.3-0.7 0.5-0.5 0.3-0.4 0.2-0.7 2.6-0.6 2.5 2.7 7.9 1.4 1.7 3.3 3.8 0.1 0 4.8-0.9 1.6 0 1.6 4.9 1.8 3 0.6 0.9 9.9 10.4 3.2 5.1 0.6 4.5-5.1 1.6-2.4-1.6-5.6-7.3-3-2.5-3.8-1.4-0.1 0-0.4 0-2.7 0.2-2.4 2.5-1.6 5.2 2.7 1.2 2.7 0.4 2.3-0.9 1.7-2.3 2.7 1 2.5 1.2 0.9 1.1 0.6 0.7-0.4 2.5 3.1 2.8 3 2.9 2.4 2.8 2.5 4.2-1.2 1.4-0.3 1.3 0.4 1.6 1.1 2.2 1.5-1.8-0.9-3.1 2.7 0.9 5.4 4 1.3 1.8 4.2 10.9-0.3 0.4-1.3 5.9 0.2 0.7 0 0.1 1.1 2.2 0.3 0.9-0.9 1.6-1.7 1.3-1 1.4 1.2 2.1 1.2 1.5 0.3 1.1 0.1 0.2 0.7 1.3 1.7 1.5-2.5 1.8 0.2 0.9-4.4 0.7-6.3 1-4.7 3.8-8.1 8-1.6-3.8-0.7-13.1-1.8-5.7-0.1-5.9-5.4 3.1-15.4 1.6-15.1-2.6-3.9-3.8-7.3-4.4-2.1-3.4-0.5-3.9 2.3-6.8 0.3-6.9-7.3-1.5-7-2-5.1-4.8-7.9-11.5-6.1-2-7.4 0.4-6.3-1.2-3.3-18 2.1-17.9 1.7-6.8 5.2-3.5 6.6-0.9 8.3 1.1 2.2-0.2-1.9-8.6-3.9-8.4-1.7-8.6 1.9-36.7-1.3-12.2z m98.8 139l-0.4-2.5-0.9-1.9-1.1-2.3-0.7-2.3 0.1-2.4 0.7-2.1 0.3-2.3-1.1-2.7 2.9 2.9 2.9 6.7 2 3.1 0.5 1.3 2.2 5.8 5.6 8.9 2.6 4.2 3.9 20.2 0 0.1-0.2 4.6-3.4 2.8-3.2-2.5-1-1.1-0.5-0.5-0.1-1.1-0.2-1.2 0-0.5 1-14.6-0.7-5-2.5-2.2-1-2.1-7.7-11.3z" id="LK51" name="Maḍakalapuva">
</a>
 <a xlink:title="Ratnapura" xlink:href=""> <path d="M363.2 748.2l5.1-4.6-5.7-6 1.2-2.8 1-3.2 2.5-4 2.9-3.6 3.6-1.6 9.6 9.7 2.8 3.7 3.6 2.7 1.6-0.9 2.4-0.5 1.6 2 1.1 2.3 5.8 1.3 7-4 2.9-0.3 3.5 0.1 4.9 2.8 6.4 2.2 4.5 0.6 4.6-0.1-0.1 3.8 1.5 1.7-1.7 1.6-0.9 2.4 4.8 3.6 5.6 0.5 12 2.7 12.6 1.7 4.9-0.8 5.7-0.5 7.6 0.3 7.2-1 13.1-6.8 0.6 8.5 1.7-0.8 1.7-0.7 3.2 3.5 3.9 1.2-0.5 2.2-0.7 1.8-0.9 0.9-6.3 2.8-1.1 3.1 2.5 3.8 3.5 2.9 5.3 1 5.5-2.3 4.7-3.5 4.2-0.2-3.8 5.8-2.3 5.9-4.3 5.1-2.2 5.2-2.2 10-4.4 6.2-3.5 6.6 0.7 3.8 1.5 3.7 0.2 14.3 2.5 5 3.3 4.3 4.4 2.4 4.2 3 2.2 4.2 1.8 5.4 4.3 4.7 2.1 5.9-1.1 4.1-4.9-1.6-8.4-1.7-2.7-3.1-3.5-2.8-4.4 0.4-4.4 1.1-4.5-0.7-16.9-6.1-13.1-2.6 0-2.2 1.2-1.2-3-2.2 0.2-2.2-2.6-3.2-5.5 0.9-4.1-0.7 1.5-4.1-3.3-6.2-10.2 1.4-3.9 0-1.6 3.8-4.5 1-4.5 0.7-2-2.9-3.7 0.1-7.2-3.5-3.4-0.1-3.9-1.6-3.2-2.7-2.8-2.9-8.3-14.5-9.7-13.7-1.3-3.9 3.5-1.4-3.3-6.4-5.2-4.7-3.2-1.2-2.5-2.4-1.4-6.8-7-6.8-2.3-4.6-1.4-4.4 0.3-3.7-4-10.7-0.8-4.7z" id="LK91" name="Ratnapura">
</a>
 <a xlink:title="Moneragala" xlink:href=""> <path d="M692.5 802.6l-4.1 4.9-6.2 1.1-4.9 3.7-4.2 4.1-5.5 2.4-4.5 3.7 0.1 3.9 1.1 3.1-1 1.7-1 1.4 0.1 1.9 0 2-3 4.9-6.4-1.4-6.1 2.2-2.1-0.3-0.5-0.6-2.6 1.8-13.7 5.3-6.7 1.8-3.5 1.4-2.3 2.3-6.3 3.5-5.7-2.4-3.6-6-4.3-5.7-2.9 0.4-2.1 1.5-2.5 0.1-2.3-0.4-1.7-4.2-3.9-1.4-5.8-0.7-5.8 0-2.1 2.5-2.9-2 0.1 3.1-1.9 2.6-3.2 0.3-2.9 0-1.1 5.2 2.2 5.2-5 3.8-6.5 2.1-5.8 3.2-5.7 3.7-1.8-5.4-2.2-4.2-4.2-3-4.4-2.4-3.3-4.3-2.5-5-0.2-14.3-1.5-3.7-0.7-3.8 3.5-6.6 4.4-6.2 2.2-10 2.2-5.2 4.3-5.1 2.3-5.9 3.8-5.8 2.8 0.2 1.7 2.7 1.1 4 1.8 1 1.9 0.4 2.1 4.7 1.6 5.1 1.6 0.8 1.6 0.9 1 7.4 2.6 3.3 2 3.3 0.9-6.2 3.3-5.1 2.5 1.6 2.5 1.2 0.7-5.5 4.8-1.7-3.4-5.4-2.2-6.4 0-3.6 0.5-3.4 3.4-5.3-0.3-4.1-4.1-1.1-0.9-3 2-4.2-0.5-5 0.6-4.9 7.8-0.7 2-3.9 6.7-2-5.6-7.9 4.9-2.7 5.9-1.6 2.9-2.4 2.3-2.9 1.1-1.9 1.4-1.4 2.3 1 3-0.6 1.1-3.4 0.6-3.6 1.6-2.4 1.2-2.6 0.9-6.4 1.1-4.2 0-4.3-0.7-3.2-1.2-3.1-1.7-2.1-1.2-1.1-2.5-3.2-8.5 2.2-2.7-2.8-2.3-4.8-3.5-3.5-2.9-3.7 0.7-4.7 2.7-4.1 3.8 0.5 3.2 3.5 3.8-1.6 2.1-3.6 6.3-8 1.8-4.4 0-4.8 9-2.1 1.8 4.4 2 3.8 4.7-1.6 4.3-3.1-1.2-8.7-0.1-8.9 5.7 0.2 4.7-2.6 1.1-1.6 1.6-1.9 1-2.3-0.2-2.8-1.3-2.7 0-3 2.3-0.2 3.2-0.8 1.6-2.5 0.8-2.2 2.6-1.1 2.8-1 5.7-3.1 4.6 1.2-3.4 5.3 1.4 0.9 1.5 0.3-0.4 3.1 2.7 12.2-0.3 5.6 0.9 4.5 5.1 4.4 3.2 5.6 0.7 5 5 7-3.7 2.9-4.8 5.7-2.7 7.2 2.9 5.5 1 3.6 1.8 3.2 1.8 0.8 1.7 0 1.5 0.8 1.2 1.1 8.2 2.1 6.8 4.1-0.5 4.4-1 4.6 1.6 4.4 0 4.5 2.7 4 1.2 4.6-6 85.1z" id="LK82" name="Mŏṇarāgala">
</a>
 <a xlink:title="Kegalle" xlink:href=""> <path d="M363.2 710l0.7-1.9-0.1-2.1-3.4-11 1.2-6.8 2.9-6.7 3.4-2.4 1.7-3.9-4.9-1.4-5.6 1.3-2.8-5.8 1-6.6 3.6-1.9 3-2.8 0.6-8 2.3-1.8-0.4-3.1 4.7-2.7 4.8-4.3 5-3.6 5.4-2.5 11.3-2.5 2.5-0.1 1.6-2.3 0.8-2.7-0.3-4.8 0.8-4.4 5.1-2 5.5 0.7 3.4 3.5 2.1 4.5 2.8 7.1 10 8.7-0.4 4.5 2 1.4 5.8 3.3 2.8 3.4-0.5 4.1 0 3.4 3.4 3.3 2.6 3.4-1.3 3.1-1.8 2.8-2.5 0.6-2.5 0.2-3.6 3.9-8 1.3-2.6 2.4 3.5 8.4 1.6 2.9-1.6 3.6-0.2 4.6 0.3 0.7 0.8 0.2-2 3.3-3.2 2.8-1.8 0.6-1.2 1.8 1.2 1.7 1.5 1.5-1.6 8.7 2 6.7 6.7 2.1 5.3 4 1.8 6.1 0.4 3.1-2.7 2.4-4.6 0.1-4.5-0.6-6.4-2.2-4.9-2.8-3.5-0.1-2.9 0.3-7 4-5.8-1.3-1.1-2.3-1.6-2-2.4 0.5-1.6 0.9-3.6-2.7-2.8-3.7-9.6-9.7-3.6 1.6-0.1-2.3-0.3-2.2 3.1-2.9-0.7-4.2-4-2-5-0.4z" id="LK92" name="Kægalla">
</a>
 <a xlink:title="Badulla" xlink:href=""> <path d="M549.6 562l0.6 0.6 3.5 2.1 1.5 3.3 0.3 3.8 1.8 5.6 5.7 9.5 4.2-1.5 2.3-0.5 2.8-1.1 4.9-4.6 11.3-6.3 10.3 2.2 0.8 11.6-2.4 11.3-1.3 2.4-0.6 2.1 0.7 2.9 0.9 2.9 1.5 10.2 2.6 5.5 3.4 3.4 2-0.5 2.8 0.5 1 2.1 1.6 2.7 2.1 4.2 0.8 4.2-9 2.1 0 4.8-1.8 4.4-6.3 8-2.1 3.6-3.8 1.6-3.2-3.5-3.8-0.5-2.7 4.1-0.7 4.7 2.9 3.7 3.5 3.5 2.3 4.8 2.7 2.8 8.5-2.2 2.5 3.2 1.2 1.1 1.7 2.1 1.2 3.1 0.7 3.2 0 4.3-1.1 4.2-0.9 6.4-1.2 2.6-1.6 2.4-0.6 3.6-1.1 3.4-3 0.6-2.3-1-1.4 1.4-1.1 1.9-2.3 2.9-2.9 2.4-5.9 1.6-4.9 2.7 5.6 7.9-6.7 2-2 3.9-7.8 0.7-0.6 4.9 0.5 5-2 4.2 0.9 3 4.1 1.1 0.3 4.1-3.4 5.3-0.5 3.4 0 3.6 2.2 6.4 3.4 5.4-4.8 1.7-0.7 5.5-2.5-1.2-2.5-1.6-3.3 5.1-0.9 6.2-2-3.3-2.6-3.3-1-7.4-1.6-0.9-1.6-0.8-1.6-5.1-2.1-4.7-1.9-0.4-1.8-1-1.1-4-1.7-2.7-2.8-0.2-4.2 0.2-4.7 3.5-5.5 2.3-5.3-1-3.5-2.9-2.5-3.8 1.1-3.1 6.3-2.8 0.9-0.9 0.7-1.8 0.5-2.2-3.9-1.2-3.2-3.5-1.7 0.7-1.7 0.8-0.6-8.5 4.4-1.1 2.3-3.4-2.1-1-2.1-1.4 3.4-5.5-0.9-1.6-1.2-1.4-1.3-3.6-1.6-3.2-7.3-3.7-0.3-3.7 4.2-0.2 4.3 0.2 3.1-3.5 1.1-4.6 3.7-3.4 4.1-2 8.8-1.9 5.1-7.6 1-4.5 2.1-4.1 1.9-1.7 1.5-2 0.8-1.7-0.4-1.6-1.2-4.1 1.1-2.1 1.6-2-0.9-1.2-1-1.2-0.5-2 0.5-2.1-1.7-5.8 0.2-4.2 2.9-1.8 4.9-1.4 6.2-5.7 0.4-7.6-5-16.8-2-35.1-1.2-19 2.3-10.9z" id="LK81" name="Badulla">
</a>
 <a xlink:title="Matale" xlink:href=""> <path d="M549.8 537.3l-0.2 3.9 1.7 5.3 0.5 4.4-2.2 11.1-2.3 10.9 1.2 19-7.3-0.8-4.7 0.7-2.6 4.3-1.4 1.3-1.7 0.9-2.8-3.5-3.8 1.9-9.5-0.1-7.3 6.1-6.6 1-8.6-7.1-3.4-1.4-3.2 2-1.4 3.6 0.8 8.5-5 5.5-8.4-0.5-14.7-9.2-4.7-6.6 0.1-2.4 1.3-1.7 0.5-2.8-0.7-2.9-1.2-2.5-1.4-2.3-2.3-4.7 0.6-4.9 3.3-3 0.8-2-0.1-2.1 0.7-2.7 0.1-2.7-4.2-4.2-1.3-7.2-0.7-7.7-1.1-1.7-0.9-0.6 0-4-1.6-4-2.3-3.8-1.6-3.7-1.8-0.5-2-1.1-0.6-4.1 1.1-3.8 4.9-3.6 7.7-2.9 4.1-4.9 3.7 0.1 2.8 1.8 3.4-2.3 1.7-2.8 1.6-1.2 1.5-0.8-0.1-1.7-0.6-1.1 3-3 2.2-3.4 0-4.3 1.2-3.8 2.4 0 1.7 0.5 1.3-1 4.5-4.7 3-2.6 4.4-2.2 4.8-2 2 2 3.2 3.6-0.1 4.1 1.3 1.3 1.9 0.8 1.5-1 0.1-1.5 2.8-1.3 2.7 0.8 3.6 0.7 3.4 2.1-6.9 7.2-2.3 11-0.6 5.4-2.2 9.4-0.8 1.6-0.4 1.7-6.7 1.5-1.6 6.4 3.1 14.1-0.4 4.6 2.3 3.2 6.1 1.3 5.8-2.4 4.5-4.2 2 2.8 3.6 2.2 1-4.1 0.5-4.1 12.3 0.8 12-2.2z" id="LK22" name="Mātale">
</a>
 <a xlink:title="Polonnaruwa" xlink:href=""> <path d="M534.8 393.9l3.5-1 2.7 4 3.7 1.5 3.6 2.7 0.9 4.9 2.9 2.9 9.7-1 17.5 4.3 4.1 0 3.8 2.2 3.7 2.9 4.1 2.1 2.9-0.3 1.7 2.4 0.3 2.9-0.1 3 0.8 4.4-1.2 2.9-2.7 1.7 0.9 0.7 1.2 0.4 5.7-1.4 3.3-7.6 1.2-2.2 1.4-6.1 1.6-1.4 1.8-1.3 1.5-2.8 2.1-2.3 2.9 0 3.5 0 1.3 12.2-1.9 36.7 1.7 8.6 3.9 8.4 1.9 8.6-2.2 0.2-8.3-1.1-6.6 0.9-5.2 3.5-1.7 6.8-2.1 17.9 3.3 18-1 5.2 0.7 5.5-1.3 2.5-1.5 1.5-1 2.8-0.6 2.4-4.5-0.6-5.4-3.1-11.2-3.5-6.8-6.8-8.4-3.2-4.2 0.7-8.6 0.8-4.3 0-12 2.2-12.3-0.8-0.5 4.1-1 4.1-3.6-2.2-2-2.8-4.5 4.2-5.8 2.4-6.1-1.3-2.3-3.2 0.4-4.6-3.1-14.1 1.6-6.4 6.7-1.5 0.4-1.7 0.8-1.6 2.2-9.4 0.6-5.4 2.3-11 6.9-7.2-3.4-2.1-3.6-0.7-2.7-0.8-2.8 1.3-0.1 1.5-1.5 1-1.9-0.8-1.3-1.3 0.1-4.1-3.2-3.6-2-2 0.3-6.1 4.5-6.4-4.6-3.6 0.4-8.1 1.6-9.1 3.3-8.8 1.9-9.8 3.4-8.9 9.1-1.7 10.2 0 3-1.8 0.9-4.1 1.8-4.1 2.9-3.1z" id="LK72" name="Pŏḷŏnnaruva">
</a>
 <a xlink:title="Kurunegala" xlink:href=""> <path d="M308.3 641.1l-0.6-13.8-8.5-45.8-0.4-8 0.4-8 2.5-6.4 3.5-5.9 0.9-2.7 1.6-2.3 3.3-0.8 2.8-1.5-1.3-2.2-2.8-0.7 1.1-3 1.6-2.7 3-0.9 3.3-0.3 2.5-1 1.6-2.2-0.9-2.4-1.2-2.6 0.7-6.2 2.2-5.6 0.4-2.8 0.9-2.5 3-1.6 2.8-1.9 0.6-2.5 1.1-2.4 4.9-2.5 0.9-2.1 0.4-2.4 1.4-3.2 3.4-1.6-0.2 0.4-0.2 0.4 1.4-0.4 1.8-1.9 0.1-2.8 1.3-2.3 4.8 2.7 2.9-2.2-2.8-5.2 1.4-2.7 1.7-2.6 0.2-5.3-0.2-6.3 0.9-3 0.6-2.8-2.7-1.8-3.2-1.1-2.2-4.1-0.8-4.6-2.4-9.2 0.1-4.7-0.5-4.4 5 2.8 21.3 9.7 4.5 1.2 4.4 1.8 3.5 2.4 4.2 0.7 7.7 2.9 6.9 5.7 3.8 3.8 4.2 2.6 4.3-0.2 3.5 2.9 0 2.9-0.4 2.9 0.7 5-0.3 4.2 0.4 4.1 3.2 1.3 3.8 0.3 1.9 3.2 0.6 3.9 2.1 5.4 1.2 5.5-0.9 8.1 5.9 5.6-1.1 3.8 0.6 4.1 2 1.1 1.8 0.5 1.6 3.7 2.3 3.8 1.6 4 0 4 0.9 0.6 1.1 1.7 0.7 7.7 1.3 7.2 4.2 4.2-0.1 2.7-0.7 2.7 0.1 2.1-0.8 2-3.3 3-0.6 4.9 2.3 4.7 1.4 2.3 1.2 2.5 0.7 2.9-0.5 2.8-1.3 1.7-0.1 2.4-2.8 1.3-2.7 0.7 1.9 3 1.3 3.1-2.4 1.2-3.4-0.5-3.3 1.8 0.3 2.6-0.3 2.4-4-0.3-3.5-2.5-3.4 0-0.7 4.6-1 1.3-0.8 1.4 0.2 1.5 0.4 1.1-4.1 1.2-4.8-0.5-2.1-4.5-3.4-3.5-5.5-0.7-5.1 2-0.8 4.4 0.3 4.8-0.8 2.7-1.6 2.3-2.5 0.1-11.3 2.5-5.4 2.5-5 3.6-4.8 4.3-4.7 2.7-4-2.9-5.7-6.6-1.4-1.9-0.6-2-2.1-2.3-6.4 1.2-5.7 4-6.6 1.9-6.4-4.4-5.5 0.2-8.8 6.9-4.9 1.9z" id="LK61" name="Kuruṇægala">
</a>
 <a xlink:title="Anuradhapura" xlink:href=""> <path d="M495.4 261.4l6.5-2.6 6.8 0.1 5.8 3.4 10.1 7 3.5 3.9 1.9 2.5 2.2 1.7-2.7 6-3.9 5.8 0.1 10 4.3 9.4 1.7 4.9-3.5 8.3 0.2 4.8 1.9 2.2 2.5 2.4 0.9 5.6 6.1 9.1 3.3 7.7 2 2.7 2.7 2 1.5 3.6-1.9 3.4-3.2 2.2-2.9 2.8-0.9 2.8-0.6 2.9-5 17.9-2.9 3.1-1.8 4.1-0.9 4.1-3 1.8-10.2 0-9.1 1.7-3.4 8.9-1.9 9.8-3.3 8.8-1.6 9.1-0.4 8.1 4.6 3.6-4.5 6.4-0.3 6.1-4.8 2-4.4 2.2-3 2.6-4.5 4.7-1.3 1-1.7-0.5-2.4 0-1.2 3.8 0 4.3-2.2 3.4-3 3 0.6 1.1 0.1 1.7-1.5 0.8-1.6 1.2-1.7 2.8-3.4 2.3-2.8-1.8-3.7-0.1-4.1 4.9-7.7 2.9-4.9 3.6-5.9-5.6 0.9-8.1-1.2-5.5-2.1-5.4-0.6-3.9-1.9-3.2-3.8-0.3-3.2-1.3-0.4-4.1 0.3-4.2-0.7-5 0.4-2.9 0-2.9-3.5-2.9-4.3 0.2-4.2-2.6-3.8-3.8-6.9-5.7-7.7-2.9-4.2-0.7-3.5-2.4-4.4-1.8-4.5-1.2-21.3-9.7-5-2.8-2.5-3.3-3.4-2.8-4.7 0.2-4.1-3.1-3.9 1.8-4.8 0-1.4-4.2-5.8-23.4-3.4-6.6 2.6-5.7 3.9-1.8 1-2.1 0.3-1.7 7.2-5.9 4.2-8.9-1.3-9.6 1.9 0.9 2.2 0.3 0.5-21.6-1.8-13.7 10.2 4.2 11.3 0.1 22.5-5.9 0.1 7.5 2.3 6.6 3.5 1.2 3.4 1.6 1.5 2.8 0.9 3.2 2.4 4.9 4.9 2.6 2.4 0.7 2.2 0.1 3.5-6.3 4.1-1.8 4.3-10.1 9.1-11.8 7-3.2 4.3 2.2 3.9 2.8 7.3 0 6.2-4.7 5.8-5.3 5-5.9 2.8-4.3 3.3-3.9 5.5-4.4-2-6-4.2-5.5-6-2.1-0.4-5.1 17.1-0.6 6.7-4.7 6.1-1.8 6.3-1.2z" id="LK71" name="Anurādhapura">
</a>
 <a xlink:title="Nuwara Eliya" xlink:href=""> <path d="M508.4 753.2l-13.1 6.8-7.2 1-7.6-0.3-5.7 0.5-4.9 0.8-12.6-1.7-12-2.7-5.6-0.5-4.8-3.6 0.9-2.4 1.7-1.6-1.5-1.7 0.1-3.8 2.7-2.4-0.4-3.1-1.8-6.1-5.3-4-6.7-2.1-2-6.7 1.6-8.7-1.5-1.5-1.2-1.7 1.2-1.8 1.8-0.6 3.2-2.8 2-3.3-0.8-0.2-0.3-0.7 6.6 0.6 10.4 15.4 6.7 4 5-5.3 2.7-7.8-2.7-3.7-3.4-3.3-4.1-7.5-1.8-0.8-1.9 0.6 5.2-4.2 8.4 1 4.6-1 6.7-4.6 4.5-0.1 4 1 14.8-17.6 4.7-7.9-2.1-8.7-0.7-6.7 4 3.6 3.3 4.4 2.4 0.9 2 0.2 5.3 8.4 8.4 0.6 9.9-1.4 9.6 1.9-0.2 4.2 1.7 5.8-0.5 2.1 0.5 2 1 1.2 0.9 1.2-1.6 2-1.1 2.1 1.2 4.1 0.4 1.6-0.8 1.7-1.5 2-1.9 1.7-2.1 4.1-1 4.5-5.1 7.6-8.8 1.9-4.1 2-3.7 3.4-1.1 4.6-3.1 3.5-4.3-0.2-4.2 0.2 0.3 3.7 7.3 3.7 1.6 3.2 1.3 3.6 1.2 1.4 0.9 1.6-3.4 5.5 2.1 1.4 2.1 1-2.3 3.4-4.4 1.1z" id="LK23" name="Nuvara Ĕliya">
</a>
 <a xlink:title="Vavuniya" xlink:href=""> <path d="M498.3 254l-1.9 3.4-1 4-6.3 1.2-6.1 1.8-6.7 4.7-17.1 0.6 0.4 5.1 6 2.1 4.2 5.5 2 6-5.5 4.4-3.3 3.9-2.8 4.3-5 5.9-5.8 5.3-6.2 4.7-7.3 0-3.9-2.8-4.3-2.2-7 3.2-9.1 11.8-4.3 10.1-4.1 1.8-3.5 6.3-2.2-0.1-2.4-0.7-4.9-2.6-2.4-4.9-0.9-3.2-1.5-2.8-3.4-1.6-3.5-1.2-2.3-6.6-0.1-7.5-8.8-11.3-5.4-4.2 0-3 0.9-3.5 5.9-0.6 3.5-7.8 6.4-3.6 8.4 0.9 13-1.6 12.3-4.6 1.2-8.1-3.5-9-3.6-5.7-6.2-2.9 10.7-6.8 6.4-5.2 4.1-6.3-0.2-3.9-0.9-4 0-2.1-0.2-1.9-3.4-0.5-1.8-2.5 0.6-3.4 4.2-0.4 4.4 0.3 8-0.2 5.7 3.6 3.6 5.3 5.6-2.5 4-3.5 2.3-1.1 2.2-1.3 0.4-1.2 0.5-1.1 7.5-0.2 7.2 2.7 0.8 7.5 6.2 0.7 2.7 4.7-2.2 3.3-0.4 3.2 3.6-0.9 3.4-2.3 7.2 1.1 7.4 4.5 2.8 3.7-4.3 15.8z" id="LK44" name="Vavuniyāva">
</a>
 <a xlink:title="Kandy" xlink:href=""> <path d="M428.6 698.3l0.2-4.6 1.6-3.6-1.6-2.9-3.5-8.4 2.6-2.4 8-1.3 3.6-3.9 2.5-0.2 2.5-0.6 1.8-2.8 1.3-3.1-2.6-3.4-3.4-3.3 0-3.4 0.5-4.1-2.8-3.4-5.8-3.3-2-1.4 0.4-4.5-10-8.7-2.8-7.1 4.8 0.5 4.1-1.2-0.4-1.1-0.2-1.5 0.8-1.4 1-1.3 0.7-4.6 3.4 0 3.5 2.5 4 0.3 0.3-2.4-0.3-2.6 3.3-1.8 3.4 0.5 2.4-1.2-1.3-3.1-1.9-3 2.7-0.7 2.8-1.3 4.7 6.6 14.7 9.2 8.4 0.5 5-5.5-0.8-8.5 1.4-3.6 3.2-2 3.4 1.4 8.6 7.1 6.6-1 7.3-6.1 9.5 0.1 3.8-1.9 2.8 3.5 1.7-0.9 1.4-1.3 2.6-4.3 4.7-0.7 7.3 0.8 2 35.1 5 16.8-0.4 7.6-6.2 5.7-4.9 1.4-2.9 1.8-9.6-1.9-9.9 1.4-8.4-0.6-5.3-8.4-2-0.2-2.4-0.9-3.3-4.4-4-3.6 0.7 6.7 2.1 8.7-4.7 7.9-14.8 17.6-4-1-4.5 0.1-6.7 4.6-4.6 1-8.4-1-5.2 4.2 1.9-0.6 1.8 0.8 4.1 7.5 3.4 3.3 2.7 3.7-2.7 7.8-5 5.3-6.7-4-10.4-15.4-6.6-0.6z" id="LK21" name="Mahanuvara">
</a>
 </g>
 <g id="points">
  <circle class="6.119024936498661|79.76749921454704" cx="268.2" cy="909.3" id="0">
  </circle>
  <circle class="7.68136218747226|80.8847680989463" cx="525.8" cy="546.5" id="1">
  </circle>
  <circle class="9.634283751189258|81.7785832064657" cx="731.8" cy="91.1" id="2">
  </circle>
 </g>
 <g id="label_points">
  <circle class="Trikuṇāmalaya" cx="566.7" cy="325.6" id="LK53">
  </circle>
  <circle class="Mulativ" cx="452.5" cy="183.2" id="LK45">
  </circle>
  <circle class="Yāpanaya" cx="377.9" cy="81.3" id="LK41">
  </circle>
  <circle class="Kilinŏchchi" cx="388.3" cy="151.3" id="LK42">
  </circle>
  <circle class="Mannārama" cx="337" cy="272.4" id="LK43">
  </circle>
  <circle class="Puttalama" cx="314.5" cy="454.3" id="LK62">
  </circle>
  <circle class="Gampaha" cx="323.9" cy="678.1" id="LK12">
  </circle>
  <circle class="Kŏḷamba" cx="310.9" cy="740.3" id="LK11">
  </circle>
  <circle class="Kaḷutara" cx="350" cy="808.3" id="LK13">
  </circle>
  <circle class="Gālla" cx="375.2" cy="890.9" id="LK31">
  </circle>
  <circle class="Mātara" cx="447.2" cy="912.1" id="LK32">
  </circle>
  <circle class="Hambantŏṭa" cx="578.3" cy="874" id="LK33">
  </circle>
  <circle class="Ampāra" cx="716.3" cy="653" id="LK52">
  </circle>
  <circle class="Maḍakalapuva" cx="657.2" cy="518.9" id="LK51">
  </circle>
  <circle class="Ratnapura" cx="450.9" cy="802.5" id="LK91">
  </circle>
  <circle class="Mŏṇarāgala" cx="636.5" cy="768.7" id="LK82">
  </circle>
  <circle class="Kægalla" cx="397.2" cy="688.2" id="LK92">
  </circle>
  <circle class="Badulla" cx="568.3" cy="703.3" id="LK81">
  </circle>
  <circle class="Mātale" cx="482" cy="566.8" id="LK22">
  </circle>
  <circle class="Pŏḷŏnnaruva" cx="564.1" cy="472.4" id="LK72">
  </circle>
  <circle class="Kuruṇægala" cx="382.6" cy="552.1" id="LK61">
  </circle>
  <circle class="Anurādhapura" cx="441.7" cy="392.5" id="LK71">
  </circle>
  <circle class="Nuvara Ĕliya" cx="485" cy="707.2" id="LK23">
  </circle>
  <circle class="Vavuniyāva" cx="437.7" cy="253.3" id="LK44">
  </circle>
  <circle class="Mahanuvara" cx="469.1" cy="641.6" id="LK21">
  </circle>
 </g>
</svg>
            </div>
        </section>
    </main>

    <!-- Modal for detailed opportunity view -->
    <div id="opportunity-modal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Opportunity Details</h2>
            <p>Full description, requirements, and application form will go here.</p>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var modal = document.getElementById("opportunity-modal");
        var btns = document.querySelectorAll(".opportunity button");
        var span = document.getElementsByClassName("close")[0];

        btns.forEach(function(btn) {
            btn.onclick = function() {
                modal.style.display = "block";
            }
        });

        span.onclick = function() {
            modal.style.display = "none";
        }

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    });


    document.addEventListener('DOMContentLoaded', function () {
    var viewAllBtn = document.getElementById('view-all-btn');
    var showLessBtn = document.getElementById('show-less-btn');
    var extraOpportunities = document.querySelectorAll('.extra-opportunity');

    viewAllBtn.addEventListener('click', function () {
        extraOpportunities.forEach(function (opportunity) {
            opportunity.classList.add('visible');
        });
        viewAllBtn.style.display = 'none';
        showLessBtn.style.display = 'block';
    });

    showLessBtn.addEventListener('click', function () {
        extraOpportunities.forEach(function (opportunity) {
            opportunity.classList.remove('visible');
        });
        showLessBtn.style.display = 'none';
        viewAllBtn.style.display = 'block';
    });
});

</script>
@endsection


