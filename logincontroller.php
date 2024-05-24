<?php

class LoginController {
    public function index() {
        $config = require 'config/config.php';
        $siteName = $config['Travel'];
        $menu = $config['menu'];
        $page = 'login'; // Set the current page
        require 'views/header.php';
        require 'views/login.php';
        require 'views/footer.php';
    }
}
