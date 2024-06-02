<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Visit Salone</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css"> <!-- Custom CSS file -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.php">Visit Salone</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php?page=home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?page=about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?page=gallery">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?page=contact">Contact</a></li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']): ?>
                        <li class="nav-item"><a class="nav-link" href="index.php?page=view_messages">Messages</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php?page=logout">Logout</a></li>
                        <li class="nav-item"><span class="navbar-text">Welcome, <?php echo $_SESSION['first_name'] . ' ' . $_SESSION['last_name']; ?></span></li>
                    <?php else: ?>
                        <li class="nav-item"><a class="nav-link" href="index.php?page=login">Login</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php?page=register">Register</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </nav>
    </header>
    <main class="container mt-5">
