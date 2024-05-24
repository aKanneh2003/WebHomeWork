<?php

class AboutController {
    public function index() {
        $config = require 'config/config.php';
        $siteName = $config['Travel'];
        $menu = $config['menu'];
        $page = 'about'; // Set the current page
        require 'views/header.php';
        require 'views/about.php';
        require 'views/footer.php';
    }
}
