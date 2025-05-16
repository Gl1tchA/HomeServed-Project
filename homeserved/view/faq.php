<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQs - CleanHome</title>
    <link rel="stylesheet" href="../public/css/faqstyles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
</head>
<body>
<?php
        session_start();  // Make sure session is started
    ?>
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
            <?php
                require_once '../view/login_nav.php'; 
            ?>

        </div>
    </header>

    <main>
        <section class="page-title">
            <div class="container">
                <h1>Frequently Asked Questions</h1>
                <p>Find answers to common questions about our services</p>
            </div>
        </section>

        <section class="faq-container">
            <div class="container">
                <div class="faq-item">
                    <button class="faq-question">How do I book a cleaning service? <span class="faq-icon">+</span></button>
                    <div class="faq-answer">
                        <p>You can book a cleaning service through our website by selecting the service you need and choosing a date and time that works for you.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">What cleaning supplies do you use? <span class="faq-icon">+</span></button>
                    <div class="faq-answer">
                        <p>We use high-quality, eco-friendly cleaning products that are safe for children and pets. If you prefer specific products, let us know in advance!</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">Are your cleaners insured? <span class="faq-icon">+</span></button>
                    <div class="faq-answer">
                        <p>Yes, all of our cleaners are fully insured and background-checked to ensure the safety and security of your home.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">What if I need to cancel or reschedule? <span class="faq-icon">+</span></button>
                    <div class="faq-answer">
                        <p>You can cancel or reschedule your appointment at least 24 hours in advance to avoid any cancellation fees.</p>
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

document.addEventListener("DOMContentLoaded", function () {
    const faqItems = document.querySelectorAll(".faq-item");

    faqItems.forEach((item) => {
        const question = item.querySelector(".faq-question");

        question.addEventListener("click", function () {
            item.classList.toggle("active");
        });
    });
});



</script>



</body>
</html>
