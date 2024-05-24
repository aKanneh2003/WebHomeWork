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
         <a href="index.php?page=register" class="btn register-btn">Register</a>
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
