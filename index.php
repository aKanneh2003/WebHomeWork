
<?php

// Load configuration
$config = require 'config/config.php';

// Autoload controllers
spl_autoload_register(function ($class) {
    include 'controllers/' . $class . '.php';
});

// Get the requested page from the URL, default to 'home'
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

// Check if the page exists in the menu configuration
if (array_key_exists($page, $config['menu']) || in_array($page, ['register', 'home'])) { // Include additional pages as needed
    $controllerName = ucfirst($page) . 'Controller';
    if (class_exists($controllerName)) {
        $controller = new $controllerName();
        if (method_exists($controller, $action)) {
            $controller->{$action}();
        } else {
            echo "Action '$action' not found!";
        }
    } else {
        // Handle missing controller
        echo "Controller for page '$page' not found!";
    }
} else {
    // Handle invalid page request
    echo "Page '$page' not found!";
}
