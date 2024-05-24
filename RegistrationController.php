<?php

class RegisterController {
    public function index() {
        $config = require 'config/config.php';
        $siteName = $config['site_name'];
        $menu = $config['menu'];
        $page = 'register'; // Set the current page
        require 'views/header.php';
        require 'views/register.php';
        require 'views/footer.php';
    }

    public function process() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $firstName = $_POST['first_name'];
            $lastName = $_POST['last_name'];
            $email = $_POST['email'];
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

            // Implement your user saving logic here, e.g., saving to a database
            // Assuming you have a User model with a save method
            // $user = new User($firstName, $lastName, $email, $password);
            // $user->save();

            // For demonstration, let's just print the data
            echo "User registered: $firstName $lastName, $email";

            // Redirect to a success page or login page
            // header('Location: index.php?page=login');
        }
    }
}
