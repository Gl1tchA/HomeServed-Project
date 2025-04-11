<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CleanHome - Login</title>
    <link rel="stylesheet" href="../public/css/profilepage.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
                <img src="../public/image/house-icon.png" alt="House Icon">
                <h1><span class="green">CLEAN</span>HOME</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="../public/homepage.php"><img src="../public/image/home-icon.png" alt="Home"></a></li>
                    <li><a href="../public/view/aboutus.php">About</a></li>
                    <li><a href="../public/view/types.php">Types of Cleaning</a></li>
                    <li><a href="../public/view/faq.php">FAQs</a></li>
                    <li><a href="#">Be a Cleanhome Partner</a></li>
                </ul>
            </nav>
            <div class="login-btn">
                <a href="login.html">
                    <button class="btn-login">Log In</button>
                </a>
            </div>
        </div>
    </header>

    <main>
        
        <!-- Main content container -->
    <div class="container">
        <!-- Left sidebar -->
        <div class="sidebar">
            <div class="user-info">
                <div class="avatar">
                    <img src="/api/placeholder/80/80" alt="Profile picture">
                </div>
                <div class="username">lucky313</div>
                <a href="#" class="edit-profile">✏️ Edit Profile</a>
            </div>

            <div class="menu-item active">
                <div class="menu-title">
                    <i>👤</i> My Account
                </div>
                <div class="submenu">
                    <ul class="submenu-list">
                        <li><a onclick="loadContent('./profiletabs/profile.html')" href="javascript:void(0);" class="submenu-item">Profile</a></li>
                        <li><a href="#" class="submenu-item">Banks & Cards</a></li>
                        <li><a href="address.html" class="submenu-item">Addresses</a></li>
                        <li><a href="#" class="submenu-item">Change Password</a></li>
                        <li><a href="#" class="submenu-item">Privacy Settings</a></li>
                        <li><a href="#" class="submenu-item">Notification Settings</a></li>
                      </ul>
                </div>
            </div>

            <div class="menu-item">
                <div class="menu-title">
                    <i>🛒</i> My Purchase
                </div>
            </div>
        </div>

        <div id="content-area">

        </div>
    </div>

    </main>

    <footer>
        <div class="containerfooter">
            <p>&copy; 2025 CleanHome. All rights reserved.</p>
        </div>
    </footer>
    <script src="../public/js/profiletabs.js"></script>
</body>
</html>