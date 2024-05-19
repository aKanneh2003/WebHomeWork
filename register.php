<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>

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

      .login {
         background: #fff;
         padding: 30px;
         box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
         border-radius: 10px;
         width: 100%;
         max-width: 400px;
      }

      .heading-title {
         font-size: 2rem;
         margin-bottom: 20px;
         text-align: center;
      }

      .login-form {
         display: flex;
         flex-direction: column;
      }

      .inputBox {
         margin-bottom: 15px;
      }

      .inputBox span {
         font-size: 1.2rem;
         color: #333;
         display: block;
         margin-bottom: 5px;
      }

      .inputBox input {
         width: 100%;
         padding: 10px;
         font-size: 1.2rem;
         border: 1px solid #ccc;
         border-radius: 5px;
         outline: none;
      }

      .btn {
         background: #333;
         color: #fff;
         padding: 10px;
         font-size: 1.2rem;
         border: none;
         border-radius: 5px;
         cursor: pointer;
         transition: background 0.3s;
      }

      .btn:hover {
         background: #555;
      }

      .error {
         color: red;
         font-size: 1rem;
         margin-top: 10px;
         display: none;
      }
   </style>
</head>
<body>

<section class="login">
   <h1 class="heading-title">Register New User</h1>
   <form id="login-form" action="process_register.php" method="post" class="login-form">
      <div class="inputBox">
         <span>first name :</span>
         <input type="text" placeholder="enter your first name" name="first_name" id="first_name">
      </div>
      <div class="inputBox">
         <span>last name :</span>
         <input type="text" placeholder="enter your last name" name="last_name" id="last_name">
      </div>
      <div class="inputBox">
         <span>email :</span>
         <input type="email" placeholder="enter your email" name="email" id="email">
      </div>
      <div class="inputBox">
         <span>password :</span>
         <input type="password" placeholder="enter your password" name="password" id="password">
      </div>
      <input type="submit" value="Register" class="btn" name="login">
      <div class="error" id="error-message">Please fill out all fields.</div>
   </form>
</section>

<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>
document.getElementById('login-form').addEventListener('submit', function(event) {
    var firstName = document.getElementById('first_name').value;
    var lastName = document.getElementById('last_name').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var errorMessage = document.getElementById('error-message');

    if (firstName === '' || lastName === '' || email === '' || password === '') {
        event.preventDefault();
        errorMessage.style.display = 'block';
    } else {
        errorMessage.style.display = 'none';
    }
});
</script>

</body>
</html>
