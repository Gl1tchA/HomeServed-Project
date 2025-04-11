<?php
require_once '../model/user.php'; 

class UserController {
    private $user;

    // Constructor to initialize the User model
    public function __construct($db) {
        $this->user = new User($db);  // Create an instance of the User model with the database connection
    }

    // Method to handle user registration
    public function register() {
        // Check if the form is submitted via POST
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Retrieve form data from POST request
            $fname = $_POST['fname'] ?? ''; // If the name isn't set, use an empty string
            $lname = $_POST['lname'] ?? '';
            $suffix = $_POST['suffix'] ?? '';
            $email = $_POST['email'] ?? '';
            $birthday = $_POST['birthday'] ?? '';
            $address = $_POST['address'] ?? '';
            $password = $_POST['password'] ?? '';

            // Basic validation
            if (empty($fname) || empty($lname) || empty($email) || empty($password)) {
                echo "All fields are required!";
                return;
            }

            // Call the User model to create a new account
            $result = $this->user->createAccount($fname, $lname, $suffix, $email, $birthday, $address, $password);

            // Check if the account creation was successful
            if ($result) {
                // Redirect to the login page if the registration is successful
                header("Location: login.php");
                exit();  // Ensure no further code is executed
            } else {
                // Show an error message if the registration failed
                echo "Error: Could not register the account.";
            }
        }
    }
    public function login() {
        // Check if the form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST['email'];    // Get the email from the form
            $password = $_POST['password'];  // Get the password from the form

            // Call the login function from the User model
            $result = $this->user->login($email, $password);

            if ($result === true) {
                // Successful login - no need to redirect here, model already did it
                exit();
            } else {
                // Unsuccessful login - set error and redirect to the login page
                $_SESSION['error'] = $result;
                header("Location: login.php");
                exit();
            }
        }
    }
}

?>