<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CleanHome - Home Care Made Easy</title>
    <link rel="stylesheet" href="css/styles.css?v=1">
</head>
<body>
    <?php
        session_start();  // Make sure session is started
    ?>
    <header>
        <div class="container">
            <div class="logo">
                <img src="image/house-icon.png" alt="House Icon">
                <h1><span class="green">CLEAN</span>HOME</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="homepage.php"><img src="../public/image/home-icon.png" alt="Home"></a></li>
                    <li><a href="../view/aboutus.php">About</a></li>
                    <li><a href="../view/types.php">Types of Cleaning</a></li>
                    <li><a href="../view/faq.php">FAQs</a></li>
                    <li><a href="#">Be a Cleanhome Partner</a></li>
                </ul>
            </nav>
            <?php
                require_once '../view/login_nav.php'; 
            ?>


            
        </div>
    </header>

    <main>
        <section class="hero">
            <div class="container">
                <div class="hero-content">
                    <h1>Home care <br>made easy!</h1>
                    <p>Book a professional cleaner in seconds!</p>
                    
                    <div class="cleaning-panel">
                        <h2>What can we clean for you today?</h2>
                        <p class="locations">We're now cleaning in BGC, Makati, Mandaluyong, Manila, Paranaque, Pasay, Pasig, Quezon City, Taguig</p>
                        
                        <div class="service-cards">
                            <div class="service-card">
                                <h3>Ironing</h3>
                                <h2 class="price"><span class="currency">₱</span>1000</h2>
                                <p>A 3+ hr ironing of removing wrinkles and creases from fabric. Ensures clothes and linens look neat, polished, and professionally maintained. Client must provide their ironing tools (Flat/steam iron and Iron Board).</p>
                                <button class="btn-book">Book Now</button>
                            </div>
                            
                            <div class="service-card active">
                                <h3>Quick Cleaning</h3>
                                <h2 class="price"><span class="currency">₱</span>500</h2>
                                <p>A 2 - hr streamlined cleaning service designed to refresh the space quickly and efficiently, focusing on the most critical areas. Vacuum is upon request. Cleaner has cleaning tools and Chemicals. Time Extension is not applicable.</p>
                                <button class="btn-book">Book Now</button>
                            </div>
                            
                            <div class="service-card">
                                <h3>General Cleaning</h3>
                                <h2 class="price"><span class="currency">₱</span>950</h2>
                                <p>A 3-hr general cleaning of a condo that involves a thorough cleaning of rooms and common areas to ensure the space is clean. Cleaner will bring their own Vacuum and Cleaning Materials.</p>
                                <button class="btn-book">Book Now</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-image">
                    <div class="green-circle"></div>
                    <img src="image/cleaners.jpg" alt="Professional Cleaners">
                </div>
            </div>
        </section>
    </main>


    <footer>
        <div class="container">
            <p>&copy; 2025 CleanHome. All rights reserved.</p>
        </div>
    </footer>



</body>
</html>