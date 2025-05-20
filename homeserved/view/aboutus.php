<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="../public/css/aboutusstlye.css">
    <link rel="stylesheet" href="../public/css/generalcss.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito&display=swap">
</head>
<body>
    <body>
    <?php
        session_start();  // Make sure session is started
    ?>
        <header>
            <div class="container">
                <div class="logo">
                    <img src="../public/image/logo.png" alt="House Icon">
                    <h1>HOMESERVE</h1>
                </div>
                <nav>
                    <ul>
                        <li><a href="../public/homepage.php"><img src="../public/image/home-icon.png" alt="Home"></a></li>
                        <li><a href="aboutus.php" class="active">About</a></li>
                        <li><a href="types.php">Types of Cleaning</a></li>
                        <li><a href="faq.php">FAQs</a></li>
                        <li><a href="../view/partner.php">Be a HomeServe Partner</a></li>
                    </ul>
                </nav>
                <?php
                    require_once '../view/login_nav.php'; 
                ?>
                
            </div>
        </header>
    
        <!-- Full-screen Hero Section -->
        <section class="hero">
            <img src="../public/image/aboutus.jpg" alt="About Us Banner">
            <div class="hero-text">
                <h1>About Us</h1>
                <p>Providing professional and reliable cleaning services for your home and office.</p>
            </div>
        </section>
    
        <!-- About Us Content -->
        <main>
            <section class="about-content">
                <div class="container">
                    <h2>Who We Are</h2>
                    <p>HomeServe is dedicated to making your home and office cleaner, healthier, and more comfortable. With our experienced professionals, we ensure top-notch services tailored to your needs.</p>
    
                    <h2>Our Mission</h2>
                    <p>We believe in delivering high-quality, affordable, and eco-friendly cleaning solutions. Our goal is to provide a clean environment where you can live and work stress-free.</p>
    
                    <h2>Why Choose Us?</h2>
                    <ul>
                        <li>Trained and trusted professionals</li>
                        <li>Eco-friendly cleaning solutions</li>
                        <li>Flexible scheduling</li>
                        <li>Affordable pricing</li>
                    </ul>
                </div>
            </section>
        </main>
    
        <footer>
            <div class="container">
                <p>&copy; 2025 HomeServe. All rights reserved.</p>
            </div>
        </footer>
    </body>
    
</body>

</html>