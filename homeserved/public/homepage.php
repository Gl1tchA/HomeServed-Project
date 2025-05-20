<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeServe - Home Care Made Easy</title>
    <link rel="stylesheet" href="css/styles.css?v=1">
    <link rel="stylesheet" href="css/generalcss.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito&display=swap">
    
</head>

<body>
    <?php
    session_start();  // Make sure session is started
    ?>
    <header>
        <div class="container">
            <div class="logo">
                <img src="image/logo.png" alt="House Icon">
                <h1>HOMESERVE</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="homepage.php"><img src="../public/image/home-icon.png" alt="Home"></a></li>
                    <li><a href="../view/aboutus.php">About</a></li>
                    <li><a href="../view/types.php">Types of Cleaning</a></li>
                    <li><a href="../view/faq.php">FAQs</a></li>
                    <li><a href="../view/partner.php">Be a HomeServe Partner</a></li>
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
                        <p class="locations">We're now cleaning in BGC, Makati, Mandaluyong, Manila, Paranaque, Pasay,
                            Pasig, Quezon City, Taguig</p>

                        <div class="service-cards">
                            <div class="service-card">
                                <h3>Ironing</h3>
                                <h2 class="price"><span class="currency">₱</span>1000</h2>
                                <p>A 3+ hr ironing of removing wrinkles and creases from fabric. Ensures clothes and
                                    linens look neat, polished, and professionally maintained. Client must provide their
                                    ironing tools (Flat/steam iron and Iron Board).</p>
                                <button class="btn-book">Book Now</button>
                            </div>

                            <div class="service-card active">
                                <h3>Quick Cleaning</h3>
                                <h2 class="price"><span class="currency">₱</span>500</h2>
                                <p>A 2 - hr streamlined cleaning service designed to refresh the space quickly and
                                    efficiently, focusing on the most critical areas. Vacuum is upon request. Cleaner
                                    has cleaning tools and Chemicals. Time Extension is not applicable.</p>
                                <button class="btn-book">Book Now</button>
                            </div>

                            <div class="service-card">
                                <h3>General Cleaning</h3>
                                <h2 class="price"><span class="currency">₱</span>950</h2>
                                <p>A 3-hr general cleaning of a condo that involves a thorough cleaning of rooms and
                                    common areas to ensure the space is clean. Cleaner will bring their own Vacuum and
                                    Cleaning Materials.</p>
                                <button class="btn-book">Book Now</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-image">
                    <img src="image/cleaners.png" alt="Professional Cleaners">
                </div>
            </div>
        </section>

        <section class="cleaning-services">
            <div class="container">
                <h2>Additional Services...? YOU WANT??</h2>
                <div class="services-grid">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-spray-can"></i>
                        </div>
                        <h3>Disinfection Service</h3>
                        <p>Professional disinfection to eliminate viruses and bacteria from high-touch surfaces.</p>
                        <a href="#" class="btn-service">Learn More</a>
                    </div>
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-couch"></i>
                        </div>
                        <h3>Upholstery Cleaning</h3>
                        <p>Refresh your furniture with our specialized upholstery cleaning techniques.</p>
                        <a href="#" class="btn-service">Learn More</a>
                    </div>
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-broom"></i>
                        </div>
                        <h3>Post-Construction Cleaning</h3>
                        <p>Thorough cleaning after renovations or construction projects.</p>
                        <a href="#" class="btn-service">Learn More</a>
                    </div>
                </div>
            </div>
        </section>




    </main>


    <footer>
        <div class="container">
            <p>&copy; 2025 HomeServe. All rights reserved.</p>
        </div>
    </footer>



</body>

</html>