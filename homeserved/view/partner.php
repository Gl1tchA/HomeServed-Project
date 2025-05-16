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

        <div class="login-container">
            <div class="login-box">
                <h2>Let's create your account!</h2>
                <p class="subtitle">So you can book and schedule our services anytime,<br> anywhere.</p>

                <form class="login-form" method="post" action="sign-up.php" enctype="multipart/form-data">
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
                        <label for="number">Number</label>
                        <input type="tel" id="number" name="number" placeholder="Enter your phone number" required>
                    </div>

                    <div class="form-group">
                        <label for="location">Location</label>
                        <input type="text" id="location" name="location" placeholder="Enter your location" required>
                    </div>

                    <div class="form-group">
                        <label for="nationality">Nationality</label>
                        <input type="text" id="nationality" name="nationality" placeholder="Enter your nationality"
                            required>

                        <div class="document-upload" onclick="document.getElementById('document-file').click()">
                            <div class="document-upload-icon">📄</div>
                            <label>Upload Identification Document</label>
                            <p>Click to browse or drag and drop files here</p>
                            <input type="file" id="document-file" name="document" style="display: none;"
                                accept=".pdf,.jpg,.jpeg,.png">
                        </div>
                    </div>

                    <button type="submit" class="btn-login-form">Sign up</button>
                </form>

                <div class="login-footer">
                    <p>Already have an account? <a href="login.php" class="signup-link">Log in</a></p>
                </div>
            </div>

            <div class="login-image">
                <div class="green-circle"></div>
                <img src="../public/image/cleaners.png" alt="Professional Cleaners">
                <div class="login-message">
                    <h3>Your clean home is just a click away!</h3>
                    <p>Professional cleaners ready to transform your space</p>
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
    </script>


</body>

</html>