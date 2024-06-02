<?php
session_start();
include 'config.php';

$page = isset($_GET['page']) ? $_GET['page'] : 'home';

include 'header.php';

switch ($page) {
    case 'home':
        include 'home.php';
        break;
    case 'about':
        include 'about.php';
        break;
    case 'gallery':
        include 'gallery.php';
        break;
    case 'contact':
        include 'contact.php';
        break;
    case 'register':
        include 'register.php';
        break;
    case 'login':
        include 'login.php';
        break;
    case 'logout':
        include 'logout.php';
        break;
    default:
        include 'home.php';
        break;
}

include 'footer.php';
?>
