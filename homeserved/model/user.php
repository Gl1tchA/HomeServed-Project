<?php
    class User{
        private $conn;

        public function __construct($db) {
            $this->conn = $db;
        }

        public function createAccount($fname, $lname, $suffix, $email, $birthday, $address, $password) {
            // Sanitize the input to prevent SQL injection
            $fname = $this->conn->real_escape_string($fname);
            $lname = $this->conn->real_escape_string($lname);
            $suffix = $this->conn->real_escape_string($suffix);
            $email = $this->conn->real_escape_string($email);            
            $birthday = $this->conn->real_escape_string($birthday);      
            $address = $this->conn->real_escape_string($address); 
            $password = $this->conn->real_escape_string($password);

    
            // Hash the password before storing it (for security)
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
    
            // SQL query to insert the new user into the accounts table
            $sql = "INSERT INTO credentials (fname,lname,suffix, email,birthday,address, password ) VALUES ('$fname', '$lname','$suffix', '$email','$birthday', '$address', '$hashedPassword')";
    
            // Execute the query and check for success
            if ($this->conn->query($sql) === TRUE) {
                return true;
            } else {
                return false;
            }
        }
        
        public function login($email,$password){
            $sql = "SELECT id, fname, password FROM credentials WHERE email = ?";
            $stmt = $this->conn->prepare($sql);

            if (!$stmt) {
                return "Error preparing SQL statement: " . $this->conn->error;
            }

            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->store_result();
            if ($stmt->num_rows > 0) {
                $stmt->bind_result($id, $fname, $hashed_password);
                $stmt->fetch();
            
                if (password_verify($password, $hashed_password)) {
                    $_SESSION['name'] = $fname;
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

        public function booking() {
            // SQL query to fetch all users
            $sql = "SELECT service_type, booked_by, service_worker, date_of_booking, edoa, fee, status FROM booking";
            
            // Prepare the statement
            $stmt = $this->conn->prepare($sql);
            
            // Execute the query
            if ($stmt->execute()) {
                // Store the result
                $stmt->store_result();
                
                // Bind the result to variables
                $stmt->bind_result($service_type, $booked_by, $service_worker, $date_of_booking, $edoa, $fee, $status);
                
                // Initialize an array to hold the user data
                $users = [];
                
                // Fetch all results and store them in the array
                while ($stmt->fetch()) {
                    $users[] = ['service_type' => $service_type, 'booked_by' => $booked_by, 'date_of_booking' => $date_of_booking, 'edoa' => $edoa, 'fee' => $fee, 'status' => $status];
                }
    
                // Return the array of users
                return $users;
            } else {
                // If the query failed, return an error message
                return "Error: " . $stmt->error;
            }
        }

        
    }
?>