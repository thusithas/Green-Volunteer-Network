<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('CSS/volunteerSign.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">

    <title>Sign Up</title>
</head>
    <body>
        <div class="form-container">
        <div class="left-side">
            <div class="logo">
                  <a href="/"><img src="/Images/GVN Logo.png" alt="Logo"></a>
            </div>
            <h2>Welcome to the <br><span>Green Volunteer Network</span></h2>

            <div class="paragraph">
            <p>Where every action, big or small, contributes to a greener, 
                healthier planet. Together, we're creating a brighter future 
                for generations to come.</p>
            </div>

                          
                <div class="image1">
                <img src="/Images/clipart 1.jpg" alt="" >
                </div>
                
             
            
        </div>

        <div class="right-side">
            <h1>Join as a Volunteer</h1>
            <form action="#" method="post">

               <div class="row-box">
                <div class="input-box ">
                     <input type="text" name="f_name" required>
                     <label><i class="fa-solid fa-user"></i> First name</label>

                </div>
                <div class="input-box">
                     <input type="text" name="l_name" required>
                     <label><i class="fa-solid fa-user"></i> Last name</label>

                </div>
                </div>

                <div class="input-box">
                     <input type="email" name="email"  required>
                     <label><i class="fa-solid fa-envelope"></i> Email</label>     

                </div>

                <div class="input-box">
                     <input type="password" name="password" id="password" required>
                     <label><i class="fa-solid fa-lock"></i> Password</label>
                     <i id="eye" class="fas fa-eye-slash "></i>

                </div>

                <div class="input-box con-password">
                     <input type="password" name="con-password" id="con-password" required>
                     <label><i class="fa-solid fa-lock"></i> Confirm password</label>
                     <i id="eye2" class="fas fa-eye-slash"></i>

                </div>

                <div class="remember-me">
                    <input type="checkbox" id="remember" name="remember">
                    <label for="remember">Remember me</label>
                </div>

                <div class="agree-terms">
                    <input type="checkbox" id="agree" name="agree" required>
                    <label for="agree">I agree to the <a href="">terms</a> and <a href="">conditions</a></label>
                </div>
               
                <div class="input-box">
                    <button type="submit">Register</button>
                </div>
                <div class="or-login">
                    <p>Or join with</p>

                </div>

                <div class="social-btn">
                    <a href=""><i class="fa-brands fa-google"></i></a>
                    <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                    <a href=""><i class="fa-brands fa-apple"></i></a>
                   
                </div>
            </form>
            <div class="sign-up-link">
                <p >Already have an account? <a href="/login">Login</a></p>
            </div>
        </div>
        
    </div>

    <script>

            let eye = document.getElementById("eye");
            let password = document.getElementById("password");
            let eye2 = document.getElementById("eye2");
            let conPassword = document.getElementById("con-password");

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
                password.style.width = password.type === "password" ? "300px" : "calc(100% - 50px)";
            }

            conPassword.addEventListener('input', function() {
                if (conPassword.value !== "") {  
                    eye2.style.display = "block"; 
                } else {
                    eye2.style.display = "none";  
                }
            });

            eye2.onclick = function() {
                if(conPassword.type == "password"){
                    conPassword.type = "text";
                    eye2.classList.remove('fa-eye-slash');
                    eye2.classList.add('fa-eye');
                } else {
                    conPassword.type = "password";
                    eye2.classList.remove('fa-eye');
                    eye2.classList.add('fa-eye-slash');
                }
                conPassword.style.width = conPassword.type === "password" ? "300px" : "calc(100% - 50px)";
            }

       
    </script>

   
</body>
</html>