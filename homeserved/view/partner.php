<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQs - CleanHome</title>
    <link rel="stylesheet" href="../public/css/partnerstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
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
        





    </main>

    <footer>
        <div class="container">
            <p>&copy; 2025 HomeServe. All rights reserved.</p>
        </div>
    </footer>


<script>
document.addEventListener('DOMContentLoaded', function() {
    const profileToggle = document.querySelector('.profile-toggle');
    const profileDropdown = document.querySelector('.profile-dropdown');
    
    // Toggle dropdown when clicking on the profile
    profileToggle.addEventListener('click', function(e) {
        e.preventDefault();
        profileDropdown.classList.toggle('active');
    });
    
    // Close dropdown when clicking outside
    document.addEventListener('click', function(e) {
        if (!profileDropdown.contains(e.target)) {
            profileDropdown.classList.remove('active');
        }
    });
});
</script>


</body>
</html>
