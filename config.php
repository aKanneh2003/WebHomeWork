<?php
$menu = array(
    'home' => 'Home',
    'about' => 'About',
    'gallery' => 'Gallery',
    'contact' => 'Contact',
    'register' => 'Register',
    'login' => 'Login',
    'view_messages' => 'View Messages'
);

$servername = "localhost";
$username = "id22187394_allfredahmed";
$password = "Karzolaa19!";
$dbname = "id22187394_alfredb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
