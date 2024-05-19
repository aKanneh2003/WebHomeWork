<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Details</title>
    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f3f4f6;
            margin: 0;
        }
        .booking {
            background: #fff;
            padding: 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            width: 100%;
            max-width: 600px;
        }
        .heading-title {
            font-size: 2rem;
            margin-bottom: 20px;
            text-align: center;
        }
        .book-form {
            display: flex;
            flex-direction: column;
        }
        .inputBox {
            margin-bottom: 20px;
        }
        .inputBox span {
            font-size: 1.4rem;
            color: #333;
            display: block;
            margin-bottom: 5px;
        }
        .inputBox p {
            font-size: 1.2rem;
            background: #f3f3f3;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        .btn {
            background: #333;
            color: #fff;
            padding: 15px;
            font-size: 1.2rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
            display: block;
            margin-top: 20px;
            text-decoration: none;
            transition: background 0.3s;
        }
        .btn:hover {
            background: #555;
        }
    </style>
</head>
<body>

<section class="booking">
    <h1 class="heading-title">Booking Details</h1>
    <div class="book-form">
        <div class="inputBox">
            <span>Name:</span>
            <p><?php echo htmlspecialchars($_GET['name']); ?></p>
        </div>
        <div class="inputBox">
            <span>Email:</span>
            <p><?php echo htmlspecialchars($_GET['email']); ?></p>
        </div>
        <div class="inputBox">
            <span>Phone:</span>
            <p><?php echo htmlspecialchars($_GET['phone']); ?></p>
        </div>
        <div class="inputBox">
            <span>Address:</span>
            <p><?php echo htmlspecialchars($_GET['address']); ?></p>
        </div>
        <div class="inputBox">
            <span>Location:</span>
            <p><?php echo htmlspecialchars($_GET['location']); ?></p>
        </div>
        <div class="inputBox">
            <span>Guests:</span>
            <p><?php echo htmlspecialchars($_GET['guests']); ?></p>
        </div>
        <div class="inputBox">
            <span>Arrivals:</span>
            <p><?php echo htmlspecialchars($_GET['arrivals']); ?></p>
        </div>
        <div class="inputBox">
            <span>Leaving:</span>
            <p><?php echo htmlspecialchars($_GET['leaving']); ?></p>
        </div>
        <a href="allbookings.php" class="btn">View All Bookings</a>
    </div>
</section>

</body>
</html>
