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
         margin-bottom: 10px;
      }

      .btn:hover {
         background: #555;
      }

      .register-btn {
         background: #ff6347;
         text-align: center;
      }

      .register-btn:hover {
         background: #e55337;
      }

      .btn-container {
         display: flex;
         flex-direction: column;
      }
   </style>
</head>
<body>

<section class="login">
   <h1 class="heading-title">Login to your account</h1>
   <form action="process_login.php" method="post" class="login-form" onsubmit="return validateForm()">
      <div class="inputBox">
         <span>email :</span>
         <input type="email" placeholder="enter your email" name="email" id="email">
      </div>
      <div class="inputBox">
         <span>password :</span>
         <input type="password" placeholder="enter your password" name="password" id="password">
      </div>
      <div class="btn-container">
         <input type="submit" value="Login" class="btn" name="login">
         <a href="register.php" class="btn register-btn" >Register</a>
      </div>
   </form>
</section>

<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>
   function validateForm() {
      const email = document.getElementById('email').value;
      const password = document.getElementById('password').value;

      if (email === "" || password === "") {
         alert("All fields must be filled out");
         return false;
      }

      // Further validation can be added here (e.g., email format, password strength)
      return true;
   }
</script>

</body>
</html>
