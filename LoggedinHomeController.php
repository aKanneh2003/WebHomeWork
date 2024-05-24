<?php

class LoggedinHomeController {
    public function index() {
        $config = require 'config/config.php';
        $siteName = $config['Travel'];
        $menu = $config['menu'];
        $page = 'loggedinhome'; // Set the current page
        require 'views/header.php';
        require 'views/loggedin_home.php';
        require 'views/footer.php';
    }
}
