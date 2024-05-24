<?php

class BookController {
    public function index() {
        $config = require 'config/config.php';
        $siteName = $config['Travel'];
        $menu = $config['menu'];
        $page = 'book'; // Set the current page
        require 'views/header.php';
        require 'views/book.php';
        require 'views/footer.php';
    }
}
