<?php

class MainController {
    public function handleRequest($page, $action) {
        switch ($page) {
            case 'home':
                $this->home($action);
                break;
            case 'about':
                $this->about($action);
                break;
            case 'package':
                $this->package($action);
                break;
            case 'book':
                $this->book($action);
                break;
            case 'login':
                $this->login($action);
                break;
            case 'register':
                $this->register($action);
                break;
            case 'gallery':
                $this->gallery($action);
                break;
            default:
                $this->home('index');
                break;
        }
    }

    private function home($action) {
        if ($action == 'loadDestinations') {
            $this->loadDestinations();
        } else {
            $config = require 'config/config.php';
            $siteName = $config['site_name'];
            $menu = $config['menu'];
            $page = 'home';
            require 'views/header.php';
            require 'views/home.php';
            require 'views/footer.php';
        }
    }

    private function about($action) {
        // Handle 'about' page actions
    }

    private function package($action) {
        // Handle 'package' page actions
    }

    private function book($action) {
        // Handle 'book' page actions
    }

    private function login($action) {
        // Handle 'login' page actions
    }

    private function register($action) {
        if ($action == 'process') {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Process registration
            }
        } else {
            $config = require 'config/config.php';
            $siteName = $config['Travel'];
            $menu = $config['menu'];
            $page = 'register';
            require 'views/header.php';
            require 'views/register.php';
            require 'views/footer.php';
        }
    }

    private function gallery($action) {
        if ($action == 'upload') {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Handle file upload
            }
        } else {
            $config = require 'config/config.php';
            $siteName = $config['Travel'];
            $menu = $config['menu'];
            $page = 'gallery';
            require 'views/header.php';
            require 'views/gallery.php';
            require 'views/footer.php';
        }
    }

    private function loadDestinations() {
        $destinations = [
            ['name' => 'Paris', 'description' => 'The city of light.'],
            ['name' => 'New York', 'description' => 'The city that never sleeps.'],
            ['name' => 'Tokyo', 'description' => 'A blend of tradition and modernity.']
        ];

        header('Content-Type: application/json');
        echo json_encode($destinations);
    }
}
