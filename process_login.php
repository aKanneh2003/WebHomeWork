<?php
$servername = "localhost";
$username = "id22187394_allfredahmed"; // Change this to your database username
$password = "Karzolaa19"; // Change this to your database password
$dbname = "id22187394_alfredb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            header('Location:logged.php');
            exit();
            
        } else {
            echo "Invalid password";
        }
    } else {
        echo "No user found with that email address";
    }

    $conn->close();
}
?>
