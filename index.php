<?php

// Load configuration
$config = require 'config/config.php';

// Autoload controllers
spl_autoload_register(function ($class) {
    include 'controllers/' . $class . '.php';
});

// Get the requested page and action from the URL, default to 'home' and 'index'
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

// Instantiate the MainController and handle the request
$controller = new MainController();
$controller->handleRequest($page, $action);

