<?php

class PackageController {
    public function index() {
        $config = require 'config/config.php';
        $siteName = $config['site_name'];
        $menu = $config['menu'];
        $page = 'package'; // Set the current page
        require 'views/header.php';
        require 'views/package.php';
        require 'views/footer.php';
    }
}
