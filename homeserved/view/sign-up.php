<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CleanHome - Signup</title>
    <link rel="stylesheet" href="../public/css/loginstyles.css?v=1.0.1">
</head>
<body>
    <?php
            // register.php

            require_once '../config/connect.php';  // Include database connection
            require_once '../controller/UserController.php';  // Include UserController

            // Create an instance of UserController, passing the database connection
            $userController = new UserController($conn);

            // Handle registration if the form is submitted
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $userController->register();  // Call the register method from the controller
            }
    ?>
    
    <header>
        <div class="container">
            <div class="logo">
                <img src="../public/image/house-icon.png" alt="House Icon">
                <h1><span class="green">CLEAN</span>HOME</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="../public/homepage.php"><img src="image/home-icon.png" alt="Home"></a></li>
                    <li><a href="aboutus.php">About</a></li>
                    <li><a href="types.php">Types of Cleaning</a></li>
                    <li><a href="#">FAQs</a></li>
                    <li><a href="#">Be a Cleanhome Partner</a></li>
                </ul>
            </nav>
            <div class="login-btn">
                <a href="login.php">
                    <button class="btn-login">Log In</button>
                </a>
            </div>
        </div>
    </header>

    <main>


        <div class="login-container">
            <div class="login-box">
                <h2>Let's create your account!</h2>
                <p class="subtitle">So you can book and schedule our services anytime,<br> anywhere.</p>
                
                <form class="login-form" method="post" action="sign-up.php">
                    <div class="form-group oneline">
                        <div class="form-field">
                            <label for="fname">First Name</label>
                            <input type="text" id="fname" name="fname" placeholder="First name">
                        </div>
                        <div class="form-field">
                            <label for="lname">Last Name</label>
                            <input type="text" id="lname" name="lname" placeholder="Last name">
                        </div>
                        <div>
                    <label  for="suffix">Suffix</label>
                            <select id="suffix" name="suffix">
                                <option value="">None</option>
                                <option value="Jr.">Jr.</option>
                                <option value="Sr.">Sr.</option>
                                <option value="II">II</option>
                                <option value="III">III</option>
                                <option value="IV">IV</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" placeholder="example@acc.com" onblur="validateEmail()">
                    </div>
                    <div id="email-error" class="error-message"></div>
                    <br>
                    <div class="form-group">
                        <label for="birthday">Birthday</label>
                        <input type="date" id="birthday" name="birthday" placeholder="Enter your birthday">
                    </div>                   
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="address" id="address" name="address" placeholder="Enter your address">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="Enter your password">
                    </div>
                    <div id="password-error"></div>
                    <div class="form-group">
                        <label for="repassword">Re-password</label>
                        <input type="password" id="password" name="repassword" placeholder="Enter your password">
                    </div>
                    

                    <button type="submit" class="btn-login-form">Sign-up</button>
                </form>
                
                <div class="login-footer">
                    <p>Already have an acoount? <a href="login.php" class="signup-link">Log in</a></p>
                </div>
            </div>
            
            <div class="login-image">
                <div class="green-circle"></div>
                <img src="../public/image/cleaners.png" alt="Professional Cleaners">
                <div class="login-message">
                    <h3>Your clean home is just a click away!</h3>
                    <p>Professional cleaners ready to transform your space</p>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2025 CleanHome. All rights reserved.</p>
        </div>
    </footer>

    <script src="../public/js/validator.js"></script>
</body>
</html>