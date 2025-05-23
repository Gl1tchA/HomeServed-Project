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
        <section class="section1">
        
        
        <div class="section1-container">
            <div class="floating-shape"></div>
        <div class="floating-shape"></div>
        <div class="floating-shape"></div>
            <div class="section1-content">
                <h1 class="section1-title">
                    Best Cleaning<br>
                    <span class="animated-text" id="animatedText">Services</span>
                </h1>
                <p class="section1-description">
                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.
                </p>
                <button class="section1-button">
                    Our Service <i class="fas fa-cog"></i>
                </button>
            </div>
            
            <div class="section1-visual">
                <div class="section1-image-container">
                    <img src="https://images.unsplash.com/photo-1581578731548-c64695cc6952?w=600&h=500&fit=crop" 
                         alt="Professional cleaning service" class="section1-image">
                </div>
                <div class="cleaning-icons">
                    <div class="cleaning-icon">🧽</div>
                    <div class="cleaning-icon">🧹</div>
                    <div class="cleaning-icon">🧴</div>
                    <div class="cleaning-icon">✨</div>
                </div>
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


        <section class="section3">
            <div class="background-shapes">
                <div class="shape"></div>
                <div class="shape"></div>
                <div class="shape"></div>
            </div>

            <div class="section3-container">
                <div class="section3-content">
                    <div class="section3-icon"><i class="fa-solid fa-broom"></i></div>
                    <h1 class="section3-title">
                        Exceptional <span>Commercial</span><br>
                        to Your Needs?
                    </h1>
                    <p class="section3-description">
                        Phasellus tempus posuere pulvinar. Integer ac faucibus mi, vel viverra lectus. Curabitur magna
                        nulla, scelerisque id justo quis, rhoncus congue urna. Nullam auctor aliquam libero. Sed et
                        molestie nibh, eget rhoncus felis.
                    </p>
                    <button class="section3-button">More About Us</button>
                </div>

                <div class="section3-visual">
                    <div class="section3-image-container">
                        <img src="image/cleaners.png" alt="Professional smiling person" class="section3-image">
                        <div class="floating-icon">🛒</div>
                        <div class="floating-icon">📊</div>
                        <div class="floating-icon">💼</div>
                        <div class="floating-icon">🧹</div>
                    </div>
                </div>
            </div>
        </section>



        <section class="section4">
        
        <div class="section4-header">
            <div class="section4-icon">🏆</div>
            <h2 class="section4-title">
                Why will you choose<br>
                our services?
            </h2>
        </div>

        <div class="section4-grid">
            <div class="service-card">
                <div class="service-image">
                    <img src="https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?w=400&h=250&fit=crop" alt="Kitchen Cleaning">
                    <div class="service-overlay">
                        <button class="read-more-btn">READ MORE</button>
                    </div>
                </div>
                <div class="service-content">
                    <div class="service-icon">🥄</div>
                    <h3 class="service-title">Kitchen Cleaner</h3>
                    <p class="service-subtitle">Service</p>
                </div>
            </div>

            <div class="service-card">
                <div class="service-image">
                    <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=400&h=250&fit=crop" alt="House Cleaning">
                    <div class="service-overlay">
                        <button class="read-more-btn">READ MORE</button>
                    </div>
                </div>
                <div class="service-content">
                    <div class="service-icon">🏠</div>
                    <h3 class="service-title">House Cleaner</h3>
                    <p class="service-subtitle">Service</p>
                </div>
            </div>

            <div class="service-card">
                <div class="service-image">
                    <img src="https://images.unsplash.com/photo-1527515637462-cff94eecc1ac?w=400&h=250&fit=crop" alt="Other Cleaning">
                    <div class="service-overlay">
                        <button class="read-more-btn">READ MORE</button>
                    </div>
                </div>
                <div class="service-content">
                    <div class="service-icon">🧽</div>
                    <h3 class="service-title">Other Cleaner</h3>
                    <p class="service-subtitle">Service</p>
                </div>
            </div>

            <div class="service-card">
                <div class="service-image">
                    <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?w=400&h=250&fit=crop" alt="Office Cleaning">
                    <div class="service-overlay">
                        <button class="read-more-btn">READ MORE</button>
                    </div>
                </div>
                <div class="service-content">
                    <div class="service-icon">🏢</div>
                    <h3 class="service-title">Office Cleaner</h3>
                    <p class="service-subtitle">Service</p>
                </div>
            </div>

            <div class="service-card">
                <div class="service-image">
                    <img src="https://images.unsplash.com/photo-1563298723-dcfebaa392e3?w=400&h=250&fit=crop" alt="Glass Cleaning">
                    <div class="service-overlay">
                        <button class="read-more-btn">READ MORE</button>
                    </div>
                </div>
                <div class="service-content">
                    <div class="service-icon">🍷</div>
                    <h3 class="service-title">Glass Cleaner</h3>
                    <p class="service-subtitle">Service</p>
                </div>
            </div>

            <div class="service-card">
                <div class="service-image">
                    <img src="https://images.unsplash.com/photo-1449824913935-59a10b8d2000?w=400&h=250&fit=crop" alt="Road Cleaning">
                    <div class="service-overlay">
                        <button class="read-more-btn">READ MORE</button>
                    </div>
                </div>
                <div class="service-content">
                    <div class="service-icon">🛣️</div>
                    <h3 class="service-title">Road Cleaner</h3>
                    <p class="service-subtitle">Service</p>
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
        const words = ['Services', 'Solutions', 'Excellence', 'Professionals', 'Results'];
        let currentWordIndex = 0;
        let currentCharIndex = 0;
        let isDeleting = false;
        const animatedTextElement = document.getElementById('animatedText');

        function typeWriter() {
            const currentWord = words[currentWordIndex];

            if (isDeleting) {
                animatedTextElement.textContent = currentWord.substring(0, currentCharIndex - 1);
                currentCharIndex--;
            } else {
                animatedTextElement.textContent = currentWord.substring(0, currentCharIndex + 1);
                currentCharIndex++;
            }

            let typeSpeed = 80;

            if (isDeleting) {
                typeSpeed = 100;
            }

            if (!isDeleting && currentCharIndex === currentWord.length) {
                typeSpeed = 2000; // Pause at end of word
                isDeleting = true;
            } else if (isDeleting && currentCharIndex === 0) {
                isDeleting = false;
                currentWordIndex = (currentWordIndex + 1) % words.length;
                typeSpeed = 500; // Pause before starting new word
            }

            setTimeout(typeWriter, typeSpeed);
        }

        // Start the animation when page loads
        window.addEventListener('load', () => {
            setTimeout(typeWriter, 1000);
        });
    </script>





</body>

</html>