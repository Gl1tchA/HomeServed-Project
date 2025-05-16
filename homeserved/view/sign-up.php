<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CleanHome - Signup</title>
    <link rel="stylesheet" href="../public/css/loginstyles.css">
    <link rel="stylesheet" href="../public/css/signup.css">
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


        <div class="container">
        <!-- Sign Up Form Section -->
        <div class="signup-section">
            <div class="signup-box">
                <h2>Let's create your account!</h2>
                <p class="subtitle">So you can book and schedule our services anytime, anywhere.</p>

                <form class="signup-form" method="post" action="sign-up.php">
                    <div class="form-group oneline">
                        <div class="form-field">
                            <label for="fname">First Name</label>
                            <input type="text" id="fname" name="fname" placeholder="First name">
                        </div>
                        <div class="form-field">
                            <label for="lname">Last Name</label>
                            <input type="text" id="lname" name="lname" placeholder="Last name">
                        </div>
                        <div class="form-field">
                            <label for="suffix">Suffix</label>
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
                        <input type="email" id="email" name="email" placeholder="example@acc.com">
                    </div>
                    <div id="email-error" class="error-message"></div>

                    <div class="form-group">
                        <label for="birthday">Birthday</label>
                        <input type="date" id="birthday" name="birthday">
                    </div>

                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" id="address" name="address" placeholder="Enter your address">
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="Enter your password">
                    </div>
                    <div id="password-error" class="error-message"></div>

                    <div class="form-group">
                        <label for="repassword">Re-password</label>
                        <input type="password" id="repassword" name="repassword" placeholder="Confirm your password">
                    </div>

                    <button type="submit" class="btn-signup">Sign Up</button>
                </form>

                <div class="signup-footer">
                    <p>Already have an account? <a href="login.php" class="login-link">Log in</a></p>
                </div>
            </div>
        </div>

        <!-- Interactive Slideshow Section -->
        <div class="slideshow-section">
            <div class="slideshow-container">
                <!-- Slide 1 -->
                <div class="slide active">
                    <img src="../public/image/slide1.jpg" alt="Cleaning Service">
                    <div class="slide-content">
                        <h3>Professional Cleaning Services</h3>
                        <p>Our expert team delivers spotless results for your home or office.</p>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="slide">
                    <img src="../public/image/slide2.jpg" alt="Scheduling">
                    <div class="slide-content">
                        <h3>Easy Scheduling</h3>
                        <p>Book services at your convenience with our user-friendly platform.</p>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="slide">
                    <img src="../public/image/slide3.jpg" alt="Satisfaction">
                    <div class="slide-content">
                        <h3>100% Satisfaction Guarantee</h3>
                        <p>We're not happy until you're completely satisfied with our service.</p>
                    </div>
                </div>

                <!-- Navigation Dots -->
                <div class="dots-container">
                    <div class="dot active" onclick="currentSlide(1)"></div>
                    <div class="dot" onclick="currentSlide(2)"></div>
                    <div class="dot" onclick="currentSlide(3)"></div>
                </div>
            </div>
        </div>
    </div>
    </main>

    <footer>
        <div class="footer-container">
            <p>&copy; 2025 CleanHome. All rights reserved.</p>
        </div>
    </footer>

    <script src="../public/js/validator.js"></script>
</body>

</html>