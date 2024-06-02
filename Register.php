<h1>Register</h1>
<form action="process_register.php" method="post" class="needs-validation" novalidate>
    <div class="form-group">
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" class="form-control" required>
        <div class="invalid-feedback">Please enter your first name.</div>
    </div>
    <div class="form-group">
        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" class="form-control" required>
        <div class="invalid-feedback">Please enter your last name.</div>
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" class="form-control" required>
        <div class="invalid-feedback">Please enter a valid email.</div>
    </div>
    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" class="form-control" required>
        <div class="invalid-feedback">Please enter your password.</div>
    </div>
    <button type="submit" class="btn btn-primary">Register</button>
</form>

<script>
    // Bootstrap form validation
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            var forms = document.getElementsByClassName('needs-validation');
            Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>
