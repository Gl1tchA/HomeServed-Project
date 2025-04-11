<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CleanHome - Login</title>
    <link rel="stylesheet" href="../public/css/loginstyles.css">
</head>
<body>
    <?php
        session_start();  // Start the session

        // Include the database connection
        require_once '../config/connect.php';
        require_once '../controller/UserController.php';

        // Instantiate the UserController with the database connection
        $userController = new UserController($conn);

        // Call the login function if the form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $userController->login();
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
                <h2>Welcome Back!</h2>
                <p class="subtitle">Login to book your next cleaning service</p>
                
                <form class="login-form" method="post" action="login.php" >
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" placeholder="Enter your email">
                    </div>
                    
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="Enter your password">
                    </div>
                    
                    <div class="form-options">
                        <div class="remember-me">
                            <input type="checkbox" id="remember">
                            <label for="remember">Remember me</label>
                        </div>
                        <a href="#" class="forgot-password">Forgot Password?</a>
                    </div>
                    
                    <button type="submit" class="btn-login-form">Log In</button>
                </form>
                
                <div class="login-footer">
                    <p>Don't have an account? <a href="sign-up.php" class="signup-link">Sign Up</a></p>
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

</body>
</html>