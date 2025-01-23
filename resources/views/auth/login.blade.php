<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('CSS/login.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
    <title>Login</title>
</head>
<body>
<div class="form-container">
        <div class="left-side">
            <h1>Login</h1>
            <form id="loginForm" action="#" method="post" onsubmit="return validateForm()">
            <div class="input-box">
                <input type="email" name="email" required>
                <label><i class="fa-solid fa-envelope"></i> Email</label>
            </div>
            <div class="input-box">
                <input type="password" name="password" id="password" required>
                <label><i class="fa-solid fa-lock"></i> Password</label>
                <i id="eye" class="fas fa-eye-slash "></i>
            </div>
                <div class="for-pass">
                <a href="#"><p>Forgot password?</p></a>
                </div>
                <div class="input-box">
                    <button type="submit">Login</button>
                </div>
                <div class="or-login">
                    <p>Or login with</p>
                </div>
                <div class="social-btn">
                    <a href=""><i class="fa-brands fa-google"></i></a>
                    <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                    <a href=""><i class="fa-brands fa-apple"></i></a>
                </div>
            </form>
            <div class="sign-up-link">
                <p >Don't have an account? <a href="/mainSign">Sign Up</a></p>
            </div>
        </div>
        <div class="right-side">
            <div class="logo">
                  <a href="/"><img src="/Images/GVN Logo.png" alt="Logo"></a>
            </div>
            <h2>Welcome back to the <br><span>Green Volunteer Network</span></h2>
            <div class="paragraph">
                <p>Where every action, big or small, contributes to a greener, 
                healthier planet. Together, we're creating a brighter future 
                for generations to come.</p>
            </div>
            <div class="image1">
                <img src="/Images/clipart 1.jpg" alt="">
            </div>
        </div>
    </div>

    <script>
        let eye = document.getElementById("eye");
        let password = document.getElementById("password");

        password.addEventListener('input', function() {
            if (password.value !== "") {  
                eye.style.display = "block"; 
            } else {
                eye.style.display = "none";  
            }
        });

        eye.onclick = function() {
            if(password.type == "password"){
                password.type = "text";
                eye.classList.remove('fa-eye-slash');
                eye.classList.add('fa-eye');
            } else {
                password.type = "password";
                eye.classList.remove('fa-eye');
                eye.classList.add('fa-eye-slash');
            }
        };

        function validateForm() {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;

            if (username.trim() == "") {
                alert("Please enter your username or email.");
                return false;
            }

            if (password.trim() == "") {
                alert("Please enter your password.");
                return false;
            }

            // Dummy authentication, replace with your actual authentication logic
            if (username === "Thusitha" && password === "thu123") {
                alert("Login successful!");
                window.location.href = "/home "; // Redirect to home page
                return true;
            } else {
                alert("Invalid username or password. Please try again.");
                return false;
            }
        }
    </script>
</body>
</html>
