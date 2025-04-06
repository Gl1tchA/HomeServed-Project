<?php
    class User{
        private $conn;

        public function __construct($db) {
            $this->conn = $db;
        }

        public function createAccount($name, $email, $birthday, $address, $password) {
            // Sanitize the input to prevent SQL injection
            $name = $this->conn->real_escape_string($name);
            $email = $this->conn->real_escape_string($email);            
            $birthday = $this->conn->real_escape_string($birthday);      
            $address = $this->conn->real_escape_string($address); 
            $password = $this->conn->real_escape_string($password);

    
            // Hash the password before storing it (for security)
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
    
            // SQL query to insert the new user into the accounts table
            $sql = "INSERT INTO credentials (name, email,birthday,address, password ) VALUES ('$name', '$email','$birthday', '$address', '$hashedPassword')";
    
            // Execute the query and check for success
            if ($this->conn->query($sql) === TRUE) {
                return true;
            } else {
                return false;
            }
        }
        
        public function login($email,$password){
            $sql = "SELECT id, name, password FROM credentials WHERE email = ?";
            $stmt = $this->conn->prepare($sql);

            if (!$stmt) {
                return "Error preparing SQL statement: " . $this->conn->error;
            }

            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->store_result();
            if ($stmt->num_rows > 0) {
                $stmt->bind_result($id, $name, $hashed_password);
                $stmt->fetch();
            
                if (password_verify($password, $hashed_password)) {
                    $_SESSION['name'] = $name;
                    $_SESSION['user_id'] = $id;
                    header("Location: ../public/homepage.php");
                    exit();
                } else {
                    $_SESSION['error'] = "Invalid password. Please try again.";
                }
            } else {
                $_SESSION['error'] = "No user found with that email.";
            }
        }

        
    }
?>