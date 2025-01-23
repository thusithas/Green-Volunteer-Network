@extends('layouts')

@section("title","Organizations")
@section('content')

<link rel="stylesheet" href="{{url('CSS/org.css')}}">

<div class="organizations">
    <div class="org-container">
    <div class="org-up">
        <h1>Organizations</h1>
    </div>
    <div class="organization-container">
    <div class="organization" onclick="showOrganizationInfo('Galle Tourism Board', 'Galle', '+94 1234567', 'The Galle Tourism Board is responsible for promoting tourism in the Galle district and preserving its cultural heritage.');">
      <img src="{{url('Images/organization1.jpg')}}" alt="Galle Tourism Board" class="org-img">
      <div class="org-name">Galle Tourism Board</div>
    </div>

    
    <div class="organization" onclick="showOrganizationInfo('Cultural Ministry of Sri Lanka', 'Colombo', '+94 7654321', 'The Cultural Ministry of Sri Lanka oversees the preservation and promotion of Sri Lanka\'s rich cultural heritage.');">
      <img src="{{url('Images/organization4.jpg')}}" alt="Cultural Ministry of Sri Lanka" class="org-img">
      <div class="org-name">Cultural Ministry of Sri Lanka</div>
    </div>

    <div class="organization" onclick="showOrganizationInfo('Matara District Council', 'Matara', '+94 9876543', 'The Matara District Council is responsible for local governance and development in the Matara district.');">
      <img src="{{url('Images/organization3.jpg')}}" alt="Matara District Council" class="org-img">
      <div class="org-name">Matara District Council</div>
    </div>

    <div class="organization" onclick="showOrganizationInfo('Matara District Council', 'Matara', '+94 9876543', 'The Matara District Council is responsible for local governance and development in the Matara district.');">
      <img src="{{url('Images/organization5.jpg')}}" alt="Matara District Council" class="org-img">
      <div class="org-name">Matara District Council</div>
    </div>
    </div>
    <div class="organization-container">

    <div class="organization" onclick="showOrganizationInfo('Matara District Council', 'Matara', '+94 9876543', 'The Matara District Council is responsible for local governance and development in the Matara district.');">
      <img src="{{url('Images/organization2.jpg')}}" alt="Matara District Council" class="org-img">
      <div class="org-name">Matara District Council</div>
    </div>

    <div class="organization" onclick="showOrganizationInfo('Matara District Council', 'Matara', '+94 9876543', 'The Matara District Council is responsible for local governance and development in the Matara district.');">
      <img src="{{url('Images/organization6.jpg')}}" alt="Matara District Council" class="org-img">
      <div class="org-name">Matara District Council</div>
    </div>

    <div class="organization" onclick="showOrganizationInfo('Matara District Council', 'Matara', '+94 9876543', 'The Matara District Council is responsible for local governance and development in the Matara district.');">
      <img src="{{url('Images/organization9.jpg')}}" alt="Matara District Council" class="org-img">
      <div class="org-name">Matara District Council</div>
    </div>

    <div class="organization" onclick="showOrganizationInfo('Matara District Council', 'Matara', '+94 9876543', 'The Matara District Council is responsible for local governance and development in the Matara district.');">
      <img src="{{url('Images/organization7.jpg')}}" alt="Matara District Council" class="org-img">
      <div class="org-name">Matara District Council</div>
    </div>
  </div>
    </div>
</div>

<!-- Popup Window -->
<div id="popup" class="popup">
  <div class="popup-content">
    <span class="close" onclick="closePopup()">&times;</span>
    <h2 id="popup-org-name"></h2>
    <p><strong>Location:</strong> <span id="popup-org-location"></span></p>
    <p><strong>Contact Information:</strong> <span id="popup-org-contact"></span></p>
    <p><strong>Work:</strong></p>
    <p id="popup-org-description"></p>
  </div>
</div>

<script>
  function showOrganizationInfo(name, location, contact, description) {
    document.getElementById('popup-org-name').innerHTML = name;
    document.getElementById('popup-org-location').innerHTML = location;
    document.getElementById('popup-org-contact').innerHTML = contact;
    document.getElementById('popup-org-description').innerHTML = description;
    document.getElementById('popup').style.display = 'block';
    
  }

  function closePopup() {
    document.getElementById('popup').style.display = 'none';
  }
</script>

@endsection
