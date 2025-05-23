<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Types of Cleaning</title>
    <link rel="stylesheet" href="../public/css/types-cleaning-styles.css">
    <link rel="stylesheet" href="../public/css/generalcss.css">
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
                <img src="../public/image/logo.png" alt="House Icon">
                <h1>HOMESERVE</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="../public/homepage.php"><img src="../public/image/home-icon.png" alt="Home"></a></li>
                    <li><a href="aboutus.php">About</a></li>
                    <li><a href="types.php" class="active">Types of Cleaning</a></li>
                    <li><a href="faq.php">FAQs</a></li>
                    <li><a href="#">Be a HomeServe Partner</a></li>
                </ul>
            </nav>
            <?php
                    require_once '../view/login_nav.php'; 
            ?>
            
        </div>
    </header>

    <main>
        <section class="page-title">
            <div class="container">
                <h1>Our Cleaning Services</h1>
                <p>Professional cleaning solutions for every need</p>
            </div>
        </section>

        <section class="slideshow-container">
            <!-- Slide 1 -->
            <div class="slide">
                <div class="slide-content">
                    <div class="slide-text" style="background-color: #FFD700;">
                        <h2>Deep Cleaning</h2>
                        <p>A comprehensive cleaning service that reaches every nook and cranny. Perfect for seasonal cleaning or homes that haven't been professionally cleaned in a while.</p>
                        <p>Our deep cleaning includes detailed attention to bathrooms, kitchens, floors, and hard-to-reach areas that are often overlooked.</p>
                        <p class="image-credit">Image from <a href="#">HomeServe</a></p>
                        <a href="#" class="btn-read-more">READ MORE</a>
                    </div>
                    <div class="slide-image">
                        <img src="../public/image/cleaning.jpg" alt="Deep Cleaning Service">
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="slide">
                <div class="slide-content">
                    <div class="slide-text" style="background-color: #22bb74;">
                        <h2>Basic Electronics</h2>
                        <p>Need some help with electronics but you don't have the knowledge? Book an electritian now to solve your problem and to keep your household safe.</p>
                        <p>Our basic electronics service includes help with wiring, device setup, minor repairs, and ensuring your electronics function smoothly.</p>
                        <p class="image-credit">Image from <a href="#">HomeServe</a></p>
                        <a href="#" class="btn-read-more">READ MORE</a>
                    </div>
                    <div class="slide-image">
                        <img src="../public/image/electronics.jpg" alt="Move-In/Out Cleaning">
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="slide">
                <div class="slide-content">
                    <div class="slide-text" style="background-color: #4A90E2;">
                        <h2>Plumbing</h2>
                        <p>A professional service to keep your plumbing system in top shape. Perfect for addressing leaks, clogs, and routine maintenance.</p>
                        <p>Our plumbing service includes fixing leaks, unclogging drains, installing fixtures, and ensuring your pipes work efficiently.</p>
                        <p class="image-credit">Image from <a href="#">HomeServe</a></p>
                        <a href="#" class="btn-read-more">READ MORE</a>
                    </div>
                    <div class="slide-image">
                        <img src="../public/image/plumbing.jpg" alt="Regular Home Cleaning">
                    </div>
                </div>
            </div>

            <!-- Slide 4 -->
            <div class="slide">
                <div class="slide-content">
                    <div class="slide-text" style="background-color: #E74C3C;">
                        <h2>Childcare</h2>
                        <p>A caring and responsible service for parents needing assistance with their little ones. Ideal for busy families or occasional babysitting needs.</p>
                        <p>Our childcare service includes attentive supervision, meal preparation, educational activities, and creating a safe, nurturing environment.</p>
                        <p class="image-credit">Image from <a href="#">HomeServe</a></p>
                        <a href="#" class="btn-read-more">READ MORE</a>
                    </div>
                    <div class="slide-image">
                        <img src="../public/image/childcare.jpg" alt="Office Cleaning">
                    </div>
                </div>
            </div>

            <!-- Slide 5 -->
            <div class="slide">
                <div class="slide-content">
                    <div class="slide-text" style="background-color: #9B59B6;">
                        <h2>Gardening</h2>
                        <p>A dedicated service to keep your outdoor space looking its best. Perfect for maintaining healthy plants and creating a beautiful garden.</p>
                        <p>Our gardening service includes lawn care, plant maintenance, weeding, pruning, and ensuring your garden flourishes year-round.</p>
                        <p class="image-credit">Image from <a href="#">HomeServe</a></p>
                        <a href="#" class="btn-read-more">READ MORE</a>
                    </div>
                    <div class="slide-image">
                        <img src="../public/image/gardening.jpg" alt="Eco-Friendly Cleaning">
                    </div>
                </div>
            </div>

            <!-- Navigation buttons -->
            <button class="prev-btn"><i class="fas fa-chevron-left"></i></button>
            <button class="next-btn"><i class="fas fa-chevron-right"></i></button>

            <!-- Dots/circles -->
            <div class="dots-container">
                <span class="dot active"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let slideIndex = 0;
            const slides = document.querySelectorAll('.slide');
            const dots = document.querySelectorAll('.dot');
            const prevBtn = document.querySelector('.prev-btn');
            const nextBtn = document.querySelector('.next-btn');

            // Hide all slides initially except the first one
            for (let i = 1; i < slides.length; i++) {
                slides[i].style.display = 'none';
            }

            // Function to show current slide
            function showSlide(n) {
                // Hide all slides
                for (let i = 0; i < slides.length; i++) {
                    slides[i].style.display = 'none';
                    dots[i].classList.remove('active');
                }

                // Show the current slide
                slides[n].style.display = 'block';
                dots[n].classList.add('active');
            }

            // Next/previous controls
            function moveSlide(n) {
                slideIndex += n;
                
                if (slideIndex >= slides.length) {
                    slideIndex = 0;
                }
                if (slideIndex < 0) {
                    slideIndex = slides.length - 1;
                }
                
                showSlide(slideIndex);
            }

            // Event listeners for buttons
            prevBtn.addEventListener('click', function() {
                moveSlide(-1);
            });

            nextBtn.addEventListener('click', function() {
                moveSlide(1);
            });

            // Event listeners for dots
            dots.forEach((dot, index) => {
                dot.addEventListener('click', function() {
                    slideIndex = index;
                    showSlide(slideIndex);
                });
            });

            // Auto slide change every 5 seconds
            setInterval(function() {
                moveSlide(1);
            }, 5000);
        });
    </script>
</body>
</html>