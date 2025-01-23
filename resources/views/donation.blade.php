@extends('layouts')

@section("title","Donation")
@section('content')

<link rel="stylesheet" href="{{url('CSS/donation.css')}}">
<div class="donation">
  <div class="donation-up">
    <h1>Donation</h1>
  </div>

  <div class="don-container" id="flipContainer">
    <form action="" method="post" class="donation-form">
      <div class="container1">
        <section class="section1">
          <h3>Personal Info</h3>
          <div class="input-row">
            <div class="input-box">
              <input type="text" id="first-name" name="first-name" required> 
              <label for="first-name"> <i class="fa-regular fa-user"></i> First Name</label>

            </div>
            <div class="input-box">
              <input type="text" id="last-name" name="last-name" required> 
              <label for="last-name"> <i class="fa-regular fa-user"></i> Last Name</label>

            </div>
          </div>
          <div class="input-box">
            <input type="email" id="email" name="email" required> 
            <label for="email"> <i class="fa-solid fa-envelope"></i> Email</label>

          </div>
        </section>

        <section class="section2">
          <h3>Amount</h3>
          <div class="frequency">
            <div class="frq1">
              <input type="radio" id="one-time" name="frequency" value="one-time" checked>
              <label for="one-time">One-time</label> 
            </div>

            <div class="frq2">
              <input type="radio" id="monthly" name="frequency" value="monthly">
              <label for="monthly">Monthly</label> 
            </div>
          </div>
          <div class="don-amount">
            <div class="amount-btn">
              <input type="radio" id="amount-5" name="amount" value="5">
              <label for="amount-5" class="donation-amount">$5</label>
            </div>
            <div class="amount-btn">
              <input type="radio" id="amount-10" name="amount" value="10">
              <label for="amount-10" class="donation-amount">$10</label>
            </div>
            <div class="amount-btn">
              <input type="radio" id="amount-25" name="amount" value="25">
              <label for="amount-25" class="donation-amount">$25</label>
            </div>
          </div>
          <div class="don-amount">
            <div class="amount-btn">
              <input type="radio" id="amount-50" name="amount" value="50">
              <label for="amount-50" class="donation-amount">$50</label>
            </div>
            <div class="amount-btn">
              <input type="radio" id="amount-100" name="amount" value="100">
              <label for="amount-100" class="donation-amount">$100</label>
            </div>
            <div class="amount-btn">
              <input type="radio" id="amount-other" name="amount" value="other">
              <label for="amount-other" class="donation-amount">Other</label>
            </div>
          </div>

          <div class="input-box" id="other-amount-box" style="display: none;">
            <input type="number" id="custom-amount" name="custom-amount" placeholder="Enter amount">
            <i class="fa-solid fa-dollar-sign"></i>
          </div>
        </section>
        
        <div class="payment-meth">
          <button type="button" onclick="flipForm()"><p>Payment Method <i class="fa-solid fa-arrow-right"></i></p></button>
        </div>
      </div>

    
   <div class="container2">
    <section class="section3">

    <h3>Payment</h3>
    
    <div class="pay-meth">
        <div class="pay-meth1">
          <input type="radio" id="credit" name="frequency" value="credit" checked>
          <label for="credit">Credit Card</label> 
        </div>

        <div class="pay-meth2">
          <input type="radio" id="paypal" name="frequency" value="paypal">
          <label for="paypal">Paypal</label> 
        </div>
      </div>

      <div class="input-row">
        <div class="input-box">
          <input type="text" id="cardholderName" name="cardholderName" required> 
          <label for="cardholderName"> <i class="fa-regular fa-user"></i> Cardholder Name</label>

        </div>
        <div class="input-box">
          <input type="text" id="cardNumber" name="cardNumber" required> 
          <label for="cardNumber"> <i class="fa-regular fa-credit-card"></i> Card Number</label>

        </div>
      </div>

      <div class="input-row">
        <div class="input-box">
          <input type="text" id="ex-date" name="ex-date" required> 
          <label for="ex-date"> <i class="fa-solid fa-calendar-days"></i> Expiry Date</label>

        </div>
        <div class="input-box">
          <input type="text" id="cvv" name="cvv" required> 
          <label for="cvv"> <i class="fas fa-lock"></i> CVV</label>

        </div>
      </div>

      <div class="input-box" id="paypal-email-box" style="display: none;">
        <input type="email" id="paypal-email" name="paypal-email" placeholder="Enter PayPal email" required>
     </div>
     

      <div class="donate-btn">
        <button type="submit"><p>Donate Now <i class="fa-solid fa-arrow-right"></i></p></button>
      </div>
      </section>

      <div class="payment-icons">
        <img src="{{url('Images/visa.svg')}}" alt="">
        <img src="{{url('Images/mastercard.svg')}}" alt="">
        <img src="{{url('Images/paypal.svg')}}" alt="">
        <img src="{{url('Images/amex.svg')}}" alt="">

      </div>
      <div class="don-description">
      <p>Donating to GVN supports environmental conservation, 
        community initiatives, and humanitarian efforts worldwide, 
        making a positive impact on wildlife, climate change, 
        and community well-being.</p>

      </div>
  </div>
    </form>
    
  </div>
</div>

<script>

document.addEventListener("DOMContentLoaded", function() {
  var otherRadio = document.getElementById("amount-other");
  var otherAmountBox = document.getElementById("other-amount-box");
  var amountRadios = document.querySelectorAll(".don-amount input[type='radio']:not(#amount-other)");
  var creditRadio = document.getElementById("credit");
  var paypalRadio = document.getElementById("paypal");
  var paypalEmailBox = document.getElementById("paypal-email-box");

  if (otherRadio && otherAmountBox && amountRadios && creditRadio && paypalRadio && paypalEmailBox) {
    otherRadio.addEventListener("change", function() {
      if (this.checked) {
        otherAmountBox.style.display = "block";
      } else {
        otherAmountBox.style.display = "none";
      }
    });

    amountRadios.forEach(function(radio) {
      radio.addEventListener("change", function() {
        otherAmountBox.style.display = "none";
      });
    });

    creditRadio.addEventListener("change", function() {
      if (this.checked) {
        // Show credit card input boxes
        document.querySelectorAll('.section3 .input-box').forEach(function(box) {
          box.style.display = "block";
        });
        // Hide PayPal email input box
        paypalEmailBox.style.display = "none";
      }
    });

    paypalRadio.addEventListener("change", function() {
      if (this.checked) {
        // Hide credit card input boxes
        document.querySelectorAll('.section3 .input-box').forEach(function(box) {
          box.style.display = "none";
        });
        // Show PayPal email input box
        paypalEmailBox.style.display = "block";
      }
    });
  }
});



// Flip form

function flipForm(){
  var form = document.getElementById('flipContainer');
  form.classList.toggle('flipped');
}
</script>

@endsection
