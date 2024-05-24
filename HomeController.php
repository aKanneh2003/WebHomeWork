<?php

class HomeController {
    public function index() {
        $config = require 'config/config.php';
        $siteName = $config['site_name'];
        $menu = $config['menu'];
        $page = 'home'; // Set the current page
        require 'views/header.php';
        require 'views/home.php';
        require 'views/footer.php';
    }

    public function loadDestinations() {
        // For simplicity, let's just return a hardcoded list of destinations
        $destinations = [
            ['name' => 'Paris', 'description' => 'The city of light.'],
            ['name' => 'New York', 'description' => 'The city that never sleeps.'],
            ['name' => 'Tokyo', 'description' => 'A blend of tradition and modernity.']
        ];

        // Send the response as JSON
        header('Content-Type: application/json');
        echo json_encode($destinations);
    }
}
