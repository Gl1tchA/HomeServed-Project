<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQs - CleanHome</title>
    <link rel="stylesheet" href="../public/css/partnerstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../public/css/signup.css">

</head>

<body>
    <header>
        <div class="container">
            <div class="logo">
                <img src="../public/image/house-icon.png" alt="House Icon">
                <h1><span class="green">HOME</span>SERVE</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="../public/homepage.php"><img src="../public/image/home-icon.png" alt="Home"></a></li>
                    <li><a href="../view/aboutus.php">About</a></li>
                    <li><a href="../view/types.php">Types of Cleaning</a></li>
                    <li><a href="../view/faq.php" class="active">FAQs</a></li>
                    <li><a href="partners.html">Be a Cleanhome Partner</a></li>
                </ul>
            </nav>

        </div>
    </header>

    <main>

        <div class="container">
    <!-- Partner Sign Up Form Section -->
    <div class="signup-section">
        <div class="signup-box">
            <h2>Become a Partner</h2>
            <p class="subtitle">Sign up and join our network of service providers.</p>

            <form class="signup-form" method="post" action="sign-up-partner.php" enctype="multipart/form-data">
                <div class="form-group oneline">
                    <div class="form-field">
                        <label for="fname">First Name</label>
                        <input type="text" id="fname" name="fname" placeholder="First name" required>
                    </div>
                    <div class="form-field">
                        <label for="lname">Last Name</label>
                        <input type="text" id="lname" name="lname" placeholder="Last name" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="number">Phone Number</label>
                    <input type="tel" id="phone" name="number" placeholder="Enter your phone number" required>
                    <div id="phone-error" class="error-message"></div>
                </div>

                <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" id="location" name="location" placeholder="Enter your location" required>
                </div>

                <div class="form-group">
                    <label for="nationality">Nationality</label>
                    <input type="text" id="nationality" name="nationality" placeholder="Enter your nationality" required>

                    <div class="document-upload" onclick="document.getElementById('document-file').click()">
                        <div class="document-upload-icon">📄</div>
                        <label>Upload Identification Document</label>
                        <p>Click to browse or drag and drop files here</p>
                        <input type="file" id="document-file" name="document" style="display: none;" accept=".pdf,.jpg,.jpeg,.png">
                    </div>
                </div>

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" placeholder="example@acc.com" required>
                    <div id="email-error" class="error-message"></div>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
                    <div id="password-error" class="error-message"></div>
                </div>

                <button type="submit" class="btn-signup">Sign Up</button>
            </form>

            <div class="signup-footer">
                <p>Already a partner? <a href="login.php" class="login-link">Log in</a></p>
            </div>
        </div>
    </div>

    <!-- Slideshow Section (reused as-is from your working layout) -->
    <div class="slideshow-section">
        <div class="slideshow-container">
            <!-- Slide 1 -->
            <div class="slide active">
                <img src="../public/image/slide1.jpg" alt="Cleaning Service">
                <div class="slide-content">
                    <h3>Grow With Us</h3>
                    <p>Join a trusted network of skilled professionals and grow your business.</p>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="slide">
                <img src="../public/image/slide2.jpg" alt="Scheduling">
                <div class="slide-content">
                    <h3>Flexible Scheduling</h3>
                    <p>Work when it's convenient for you, on your own time.</p>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="slide">
                <img src="../public/image/slide3.jpg" alt="Earnings">
                <div class="slide-content">
                    <h3>Reliable Earnings</h3>
                    <p>Get paid fairly and on time for every completed service.</p>
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
        <div class="container">
            <p>&copy; 2025 HomeServe. All rights reserved.</p>
        </div>
    </footer>


    <script>
        // Add file upload preview functionality
        document.getElementById('document-file').addEventListener('change', function (e) {
            if (e.target.files.length > 0) {
                const fileName = e.target.files[0].name;
                document.querySelector('.document-upload p').textContent = `Selected file: ${fileName}`;
            }
        });

        // Prevent the default drag behavior
        ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
            document.querySelector('.document-upload').addEventListener(eventName, preventDefaults, false);
        });

        function preventDefaults(e) {
            e.preventDefault();
            e.stopPropagation();
        }

        // Handle file drop
        document.querySelector('.document-upload').addEventListener('drop', handleDrop, false);

        function handleDrop(e) {
            let dt = e.dataTransfer;
            let files = dt.files;

            if (files.length > 0) {
                document.getElementById('document-file').files = files;
                document.querySelector('.document-upload p').textContent = `Selected file: ${files[0].name}`;
            }
        }


        // Slideshow functionality
let slideIndex = 0;
let timer;

// Initialize slideshow
showSlides(slideIndex);
autoSlide();

// Function to move to a specific slide
function currentSlide(n) {
    clearTimeout(timer);
    showSlides(slideIndex = n);
    autoSlide();
}

// Function to display slides
function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("slide");
    let dots = document.getElementsByClassName("dot");

    // Reset all slides and dots
    for (i = 0; i < slides.length; i++) {
        slides[i].classList.remove("active");
        dots[i].classList.remove("active");
    }

    // Activate current slide and dot
    slides[slideIndex - 1].classList.add("active");
    dots[slideIndex - 1].classList.add("active");
}

// Function for automatic slideshow
function autoSlide() {
    timer = setTimeout(function () {
        slideIndex++;
        if (slideIndex > 3) { slideIndex = 1 }
        showSlides(slideIndex);
        autoSlide();
    }, 5000); // Change slide every 5 seconds
}
    </script>


</body>

</html>