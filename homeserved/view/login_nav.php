<!-- login_nav.php -->

<?php if (isset($_SESSION['name'])): ?>
    <style>
        .nav_login{
            margin: 0;
            padding: 0;
        }
        .nav_login ul{
            list-style-type: none;  
        }
        .nav_login ul li {
            display: inline-block;  /* Displays items side by side */
            margin-right: 20px;     /* Adds space between the items */
        }

        .profile-dropdown {
        position: relative;
    }
    
    .dropdown-menu {
        display: none;
        position: absolute;
        top: 100%;
        right: 0;
        background-color: #fff;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        border-radius: 5px;
        min-width: 180px;
        z-index: 100;
    }
    
    .dropdown-menu a {
        display: block;
        padding: 12px 15px;
        color: #1e1e1e;
        text-decoration: none;
        transition: all 0.3s;
    }
    
    .dropdown-menu a:hover {
        background-color: #f8f8f8;
    }
    
    .dropdown-menu a:not(:last-child) {
        border-bottom: 1px solid #f1f1f1;
    }
    
    /* For the dropdown arrow */
    .profile-toggle i {
        margin-left: 5px;
        transition: transform 0.3s;
    }
    
    .profile-dropdown.active .profile-toggle i {
        transform: rotate(180deg);
    }
    
    .profile-dropdown.active .dropdown-menu {
        display: block;
    }



    </style>

    <div class="nav_login">
    <ul>
        <li class="scroll-to-section profile-dropdown">
            <a href="#" class="profile-toggle">HELLO, <?php echo htmlspecialchars($_SESSION['name']); ?> <i class="fa fa-angle-down"></i></a>
            <div class="dropdown-menu">
                <a href="profilepage.php">My Profile</a>
                <a href="bookings.php">My Bookings</a>
                <a href="api/logout.php">Logout</a>
            </div>
        </li>
    </ul>
</div>


<?php else: ?>
    <style>
        /* Your custom CSS for the login button */
        .btn-login {
            background-color: #22bb74;
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 20px;
            cursor: pointer;
            font-weight: bold;
        }
        .login-btn button:hover {
            background-color: #0056b3;
        }

    
    </style>

    <div class="login-btn">
        <a href="../view/login.php">
            <button class="btn-login">Log In</button>
        </a>
    </div>


    

<?php endif; ?>


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