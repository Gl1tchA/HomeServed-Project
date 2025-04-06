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
    </style>

    <div class="nav_login">
        <ul>
            <li class="scroll-to-section"><a href="#">HELLO, <?php echo htmlspecialchars($_SESSION['name']); ?></a></li>
            <li class="scroll-to-section"><a href="api/logout.php">LOGOUT</a></li>
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
