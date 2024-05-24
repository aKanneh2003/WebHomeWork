<section class="login">
   <h1 class="heading-title">Register New User</h1>
   <form id="login-form" action="index.php?page=register&action=process" method="post" class="login-form">
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
      <input type="submit" value="Register" class="btn" name="register">
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
