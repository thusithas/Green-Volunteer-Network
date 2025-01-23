<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join</title>
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
     <link rel="stylesheet" href="{{url('/CSS/mainSign.css')}}">
</head>
<body>
    <nav>
        <a href="/"><img src="{{ url('Images/GVN Logo.png') }}" alt="GVN"></a>

        <ul>
            <li><a href="/">Home</a></li>
            <li class="dropdown"><a href="/volunteers">Volunteer</a>
                <div class="dropdown-content">
                    <a href="/volunteers">Volunteers</a>
                    <a href="/opportunities">Opportunities</a>
                </div>
            </li>
            <li><a href="/organizations">Organization</a></li>
            <li><a href="/event">Events Calendar</a></li>
            <li><a href="/about">About GVN</a></li>
            <li><a href="/contact">Contact Us</a></li>

        </ul>
    </nav>

    <div class="page-content">
        <h1>JOIN US TO SAVE THE ENVIRONMENT</h1>

        <div class="buttons">
            <a href="/volunteerSign"><button type="button"><span></span>Volunteer</button></a>
            <a href="/orgSign"><button type="button"><span></span>Organization</button></a>

        </div>
    </div>
</body>
</html>